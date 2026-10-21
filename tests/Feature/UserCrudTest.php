<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class UserCrudTest extends TestCase
{
    use RefreshDatabase;

    private function validPayload(array $override = []): array
    {
        return array_merge([
            'name' => 'Budi Santoso',
            'email' => 'budi@example.com',
            'password' => 'rahasia123',
            'password_confirmation' => 'rahasia123',
        ], $override);
    }

    public function test_index_menampilkan_daftar_user_dan_menu_aktif(): void
    {
        User::factory()->create(['name' => 'Siti Aminah']);

        $this->get(route('user.index'))
            ->assertOk()
            ->assertSee('Siti Aminah')
            ->assertSee('Data User')
            ->assertSee('sidebar-menu-link active', false);
    }

    public function test_store_menyimpan_user_dengan_password_ter_hash_dan_redirect_dengan_success(): void
    {
        $this->post(route('user.store'), $this->validPayload())
            ->assertRedirect(route('user.index'))
            ->assertSessionHas('success');

        $user = User::where('email', 'budi@example.com')->first();
        $this->assertNotNull($user);
        $this->assertNotSame('rahasia123', $user->password);
        $this->assertTrue(Hash::check('rahasia123', $user->password));
    }

    public function test_store_gagal_validasi_dan_form_ter_repopulate(): void
    {
        $this->from(route('user.create'))
            ->post(route('user.store'), $this->validPayload(['password_confirmation' => 'beda', 'name' => '']))
            ->assertRedirect(route('user.create'))
            ->assertSessionHasErrors(['name', 'password'])
            ->assertSessionHasInput('email', 'budi@example.com');

        $this->assertDatabaseCount('users', 0);

        // Halaman create menampilkan pesan error & nilai lama (kecuali password)
        $this->get(route('user.create'))->assertOk();
        $this->followingRedirects()
            ->from(route('user.create'))
            ->post(route('user.store'), $this->validPayload(['name' => '']))
            ->assertSee('Nama wajib diisi.')
            ->assertSee('value="budi@example.com"', false)
            ->assertDontSee('value="rahasia123"', false);
    }

    public function test_store_menolak_email_duplikat_dan_password_pendek(): void
    {
        User::factory()->create(['email' => 'budi@example.com']);

        $this->post(route('user.store'), $this->validPayload(['password' => 'pendek', 'password_confirmation' => 'pendek']))
            ->assertSessionHasErrors(['email', 'password']);
    }

    public function test_edit_menampilkan_data_lama(): void
    {
        $user = User::factory()->create(['name' => 'Rina', 'email' => 'rina@example.com']);

        $this->get(route('user.edit', $user->id))
            ->assertOk()
            ->assertSee('value="Rina"', false)
            ->assertSee('value="rina@example.com"', false);
    }

    public function test_update_tanpa_password_mempertahankan_password_lama(): void
    {
        $user = User::factory()->create(['password' => 'passwordlama']);
        $lama = $user->fresh()->password;

        $this->put(route('user.update', $user->id), [
            'name' => 'Nama Baru',
            'email' => $user->email, // email sendiri tidak dianggap duplikat
        ])->assertRedirect(route('user.index'))->assertSessionHas('success');

        $user->refresh();
        $this->assertSame('Nama Baru', $user->name);
        $this->assertSame($lama, $user->password);
    }

    public function test_update_dengan_password_baru_di_hash_satu_kali(): void
    {
        $user = User::factory()->create();

        $this->put(route('user.update', $user->id), [
            'name' => $user->name,
            'email' => $user->email,
            'password' => 'passwordbaru1',
            'password_confirmation' => 'passwordbaru1',
        ])->assertRedirect(route('user.index'));

        $this->assertTrue(Hash::check('passwordbaru1', $user->fresh()->password));
    }

    public function test_update_gagal_validasi_menampilkan_error_dan_repopulate(): void
    {
        $user = User::factory()->create();
        User::factory()->create(['email' => 'dipakai@example.com']);

        $this->followingRedirects()
            ->from(route('user.edit', $user->id))
            ->put(route('user.update', $user->id), [
                'name' => 'Edit Gagal',
                'email' => 'dipakai@example.com',
            ])
            ->assertSee('Email sudah digunakan oleh user lain.')
            ->assertSee('value="Edit Gagal"', false);
    }

    public function test_destroy_menghapus_user(): void
    {
        $user = User::factory()->create();

        $this->delete(route('user.destroy', $user->id))
            ->assertRedirect(route('user.index'))
            ->assertSessionHas('success');

        $this->assertDatabaseMissing('users', ['id' => $user->id]);
    }

    public function test_semua_halaman_admin_memakai_layout_partial_dan_menu_aktif_sesuai_modul(): void
    {
        foreach ([
            'admin.dashboard' => 'Dashboard',
            'product.index' => 'Data Produk',
            'category.index' => 'Data Kategori',
            'customer.index' => 'Data Customer',
            'user.index' => 'Data User',
        ] as $route => $label) {
            $html = $this->get(route($route))->assertOk()->getContent();

            // menu sidebar lengkap (hasil partial) di setiap halaman
            $this->assertStringContainsString('Data User', $html, $route);
            // tepat satu menu aktif dan sesuai halaman
            $this->assertSame(1, substr_count($html, 'sidebar-menu-link active'), $route);
            $this->assertMatchesRegularExpression(
                '/sidebar-menu-link active"\s+title="'.$label.'"/',
                $html,
                $route
            );
        }
    }
}

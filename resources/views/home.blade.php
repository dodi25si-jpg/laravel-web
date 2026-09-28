<script src="https://cdn.tailwindcss.com"></script>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">

    @if (session('success'))
        <!-- TAMPILAN TERIMA KASIH (Jika Form Berhasil Dikirim) -->
        <div class="bg-white rounded-2xl shadow-lg p-8 max-w-lg w-full text-center">
            <h2 class="text-3xl font-bold text-blue-500 mb-2">
                Terima Kasih, {{ strtoupper(session('nama')) }} 🎉
            </h2>
            <p class="text-gray-600 mb-6">Pertanyaan Anda telah berhasil dikirim.</p>

            <!-- KOTAK DETAIL PERTANYAAN -->
            <div class="bg-gray-50 border-l-4 border-blue-500 p-4 rounded-r-lg mb-6 text-center">
                <p class="font-bold text-gray-800">Pertanyaan Anda:</p>
                <p class="text-gray-600 italic">"{{ session('pertanyaan') }}"</p>
            </div>

            <p class="text-gray-500 text-sm italic mb-1">
                Pertanyaan Anda akan segera kami tanggapi dan balas melalui email
            </p>
            <p class="font-bold text-gray-700 italic mb-4">
                {{ session('email') }}
            </p>
            
            <p class="text-gray-400 text-xs italic mb-8">
                Mohon cek kotak masuk atau folder spam Anda secara berkala.
            </p>

            <a href="{{ url('/home') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2.5 rounded-lg shadow transition">
                Kembali ke Beranda
            </a>
        </div>

    @else
        <!-- FORM PERTANYAAN UTAMA (Tampil Awal) -->
        <div class="bg-white rounded-2xl shadow-lg p-8 max-w-lg w-full">
            <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Form Pertanyaan</h2>

            <form action="{{ route('question.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="nama" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
                    <input type="text" name="nama" id="nama" required class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 outline-none">
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="email" name="email" id="email" required class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 outline-none">
                </div>

                <div>
                    <label for="pertanyaan" class="block text-sm font-medium text-gray-700 mb-1">Pertanyaan</label>
                    <textarea name="pertanyaan" id="pertanyaan" rows="4" required class="w-full border border-gray-300 rounded-lg p-2.5 focus:ring-2 focus:ring-blue-500 outline-none"></textarea>
                </div>

                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2.5 rounded-lg transition">
                    Kirim Pertanyaan
                </button>
            </form>
        </div>
    @endif

</div>
<script src="https://cdn.tailwindcss.com"></script>

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-4">
    <div class="bg-white rounded-2xl shadow-lg p-8 max-w-lg w-full text-center">
        <h2 class="text-3xl font-bold text-blue-500 mb-2">
            Terima Kasih, {{ strtoupper($nama) }} 🎉
        </h2>
        <p class="text-gray-600 mb-6">Pertanyaan Anda telah berhasil dikirim.</p>

        <!-- KOTAK DETAIL PERTANYAAN -->
        <div class="bg-gray-50 border-l-4 border-blue-500 p-4 rounded-r-lg mb-6 text-center">
            <p class="font-bold text-gray-800">Pertanyaan Anda:</p>
            <p class="text-gray-600 italic">"{{ $pertanyaan }}"</p>
        </div>

        <p class="text-gray-500 text-sm italic mb-1">
            Pertanyaan Anda akan segera kami tanggapi dan balas melalui email
        </p>
        <p class="font-bold text-gray-700 italic mb-4">
            {{ $email }}
        </p>
        
        <p class="text-gray-400 text-xs italic mb-8">
            Mohon cek kotak masuk atau folder spam Anda secara berkala.
        </p>

        <a href="{{ url('/home') }}" class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-semibold px-6 py-2.5 rounded-lg shadow transition">
            Kembali ke Beranda
        </a>
    </div>
</div>
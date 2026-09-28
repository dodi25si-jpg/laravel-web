<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pertanyaan</title>
</head>
<body>

    <h3>Form Pertanyaan</h3>

    <!-- Kotak pemberitahuan error sederhana -->
    @if ($errors->any())
        <div style="background-color: #ffe6e6; padding: 15px; margin-bottom: 15px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('question.store') }}" method="POST">
        @csrf

        <p>
            Nama:<br>
            <input type="text" name="nama" value="{{ old('nama') }}">
        </p>

        <p>
            Email:<br>
            <input type="text" name="email" value="{{ old('email') }}">
        </p>

        <p>
            Pertanyaan:<br>
            <textarea name="pertanyaan" rows="3">{{ old('pertanyaan') }}</textarea>
        </p>

        <button type="submit">Kirim</button>
    </form>

</body>
</html>
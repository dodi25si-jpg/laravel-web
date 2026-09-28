<div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Form Pertanyaan</h5>

            <form action="{{ route('question.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                    <textarea name="pertanyaan" id="pertanyaan" class="form-control" rows="4"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
            </form>
        </div>
    </div>
</div>
@extends("layouts.app")
@section("content")
    <div class="container mt-lg-5">
        <div class="row">
            <div class="col-lg-12">
                <h3><a href="/warga" class="btn btn-primary">👈 Back</a> Create Data : Warga</h3>
                <form action="/warga/store" method="POST" class="mt-4">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" aria-describedby="nama">
                        <div id="nama" class="form-text text-danger">Nama warga wajib diisi.</div>
                    </div>
                    <div class="mb-3">
                        <label for="nik" class="form-label">NIK (Nomor Induk Kependudukan)</label>
                        <input type="text" class="form-control" id="nik" name="nik">
                    </div>
                    <div class="mb-3">
                        <label for="kk" class="form-label">KK (Nomor Kartu Keluarga)</label>
                        <input type="text" class="form-control" id="kk" name="kk">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                            <option value="L">(L) Laki-laki</option>
                            <option value="P">(P) Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="5" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">↪ Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
            </div>
        </div>
    </div>
@endsection

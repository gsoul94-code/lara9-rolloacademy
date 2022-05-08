@extends("layouts.app")
@section("content")
    <div class="container mt-lg-5">
        <div class="row">
            <div class="col-lg-12">
                <a href="warga/create" class="btn btn-primary">➕ Create Data</a>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-lg-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>KK</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Dibuat Pada</th>
                            <th>Diubah Pada</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($warga as $w)
                            <tr>
                                <td>{{ $w->id; }}</td>
                                <td>{{ $w->nama; }}</td>
                                <td>{{ $w->nik; }}</td>
                                <td>{{ $w->kk; }}</td>
                                <td>{{ $w->jenis_kelamin; }}</td>
                                <td>{{ $w->alamat; }}</td>
                                <td>{{ $w->created_at; }}</td>
                                <td>{{ $w->updated_at; }}</td>
                                <td>
                                    <a href="/warga/{{ $w->id; }}/edit" class="btn btn-warning">Edit</a>
                                    <form action="/warga/{{ $w->id; }}" method="POST" style="float:right">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

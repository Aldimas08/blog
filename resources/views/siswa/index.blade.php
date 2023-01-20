@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card mb-2">
                <div class="card-header">
                    Database Siswa
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <a href="/siswa/create" class="btn btn-succes mb-2"> Tambahkan Data</a>
                        <table class="table teble-hover">
                            <thead>
                                <tr>
                                    <th>Nama Siswa</th>
                                    <th>Jurusan</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($siswa as $row)
                                <tr>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->jurusan}}</td>
                                    <td>
                                        <!-- jika ada method post maka harus ada token csrf -->
                                        <form action="{{route('kelas.destroy', [$row->id])}}" method="post" onSubmit="return confirm('Apakah anda akan menghapus data ini?')">
                                            @csrf
                                            {{method_field('DELETE')}}
                                            <a href="#" class="btn btn warning"> Edit</a>
                                            <button type="submit" class="btn btn-danger">Hapus</a>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

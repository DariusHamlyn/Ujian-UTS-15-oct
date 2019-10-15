@extends('base')

@section('body')
<h1>USER DATA Search</h1>
<table border='1'>
    <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Telepon</td>
        <td>Email</td>
        <td>Alamat</td>
        <td>Action</td>
    </tr>

    @foreach ($datas as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->telepon }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->alamat }}</td>
    </tr>
    @endforeach

</table>
@endsection
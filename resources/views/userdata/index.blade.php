@extends('base')

@section('body')
<h1>USER DATA LIST</h1>
<form method="GET" action="{{ route('userDataSearch') }}">
    <input type="text" name="nama">
    <button type="submit">SEARCH</button>
</form>
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
        <td><a href="{{ route('userDataEditForm', ['id' => $data->id])}}"><button>EDIT</button></a></td>
        <td><a href="{{ route('userDataDelete', ['id' => $data->id])}}"><button>DELETE</button></a></td>
    </tr>
    @endforeach

</table>

<a href="{{ route('userDataCreateForm') }}"><button>Add new User Data</button></a>
@endsection
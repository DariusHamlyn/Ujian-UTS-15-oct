@extends('base')

@section('body')
<h2>EDIT USER DATA</h2>
<form method="post" action="{{ route('userDataUpdate', ['id'=>$data->id]) }}">
    @csrf
    <div>
        <label>Nama : </label>
        <input type="text" name="nama" value="{{ $data->nama }}">
    </div>
    <div>
        <label>Telepon : </label>
        <input type="text" name="telepon" value="{{ $data->telepon }}">
    </div>
    <div>
        <label>Email : </label>
        <input type="text" name="email" value="{{ $data->email }}">
    </div>
    <div>
        <label>Alamat : </label>
        <textarea name="alamat" cols="30" rows="10">{{ $data->alamat }}</textarea>
    </div>
    <div>
        <input type="submit">
    </div>
</form>
@endsection
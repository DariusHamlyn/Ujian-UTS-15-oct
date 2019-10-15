@extends('base')

@section('body')
<h2>CREATE NEW USER DATA</h2>
<form method="POST" action="{{ route('userDataCreate') }}">
    @csrf
    <div>
        <label>Nama : </label>
        <input type="text" name="nama">
    </div>
    <div>
        <label>Telepon : </label>
        <input type="text" name="telepon">
    </div>
    <div>
        <label>Email : </label>
        <input type="text" name="email">
    </div>
    <div>
        <label>Alamat : </label>
        <textarea name="alamat" cols="30" rows="10"></textarea>
    </div>
    <div>
        <input type="submit">
    </div>
</form>
@endsection
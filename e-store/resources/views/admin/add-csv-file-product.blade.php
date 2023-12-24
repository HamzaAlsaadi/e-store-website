@extends('admin.layout')
@section('content')

@if (Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
        {{ Session::get('success') }}
    </div>
@endif

<h1>Import Products</h1>
<form action="{{ route('store.csv') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <input type="file" name="csv_file" accept=".csv, .txt">
    <button type="submit" class="btn btn-primary">Import</button>
</form>

@endsection

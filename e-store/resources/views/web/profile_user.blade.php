@extends('web.layout')
@section('content')
<div class="container">
    @php
        $id=0;
    @endphp
    @php
         $x=5;
    @endphp
    <h2>Profile User</h2>
    <button class="btn btn-primary"><a class="nav-link "href="{{ route('profile.edit'  , $id ) }}">edit your profile </a></button>
    <button class="btn btn-primary"><a class="nav-link "href="{{ route('profile.show' , $x) }}">add your profile  </a></button>

        <div class="col-md-4">
            <img src="" alt="User Image" class="img-responsive">
            <h3></h3>
            <p></p>
        </div>
        <div class="col-md-8">
            <h3>Personal Information</h3>
            <p><strong>City:</strong> </p>
            <p><strong>Street:</strong> </p>
            <p><strong>Building:</strong> </p>
            <p><strong>Phone:</strong></p>
        </div>

    </div>

</div>
@endsection

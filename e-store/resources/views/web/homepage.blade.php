@extends('web.layout')
@section('content')

<div class="card-group">

    @foreach ( $product as $product )
    <div class="card">
        <img class="card-img-top" src="{{ asset('imageproduct/'.$product->imge) }}" width="50px" height="150px" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $product->mobile_name }}</h5>
            <p class="card-text">{{ DB::table('companies')->where('id', $product->Company_id)->value('company_name') }}</p>
            <p class="card-text"><small class="text-muted">{{ $product->Price }}</small></p>
            <a href="{{ route('web.product_deatails',$product->id ) }}" class="btn btn-primary">show more deatails </a>
            <a href="" class="btn btn-primary">Add to Cart </a>
        </div>
        </div>

    @endforeach


</div>


@endsection

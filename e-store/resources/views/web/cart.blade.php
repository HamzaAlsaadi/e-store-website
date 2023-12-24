@extends('web.layout')


@section('content')
<table id="cart" class="table table-bordered">
    <thead>
        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>quantity</th>
            <th>delete</th>
        </tr>
    </thead>
    <tbody>
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)

                <tr rowId="{{ $id }}">
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-12">
                                <h4 class="nomargin">{{ $details['name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['price'] }}</td>

                    <td data-th="Subtotal" class="text-center">
                        <form action={{route('update.sopping.cart',$id)}} method="post">
                            @csrf
                            @method('Put')
                            <input type="number" name="quantity" min="1" value="{{ $details['quantity'] }}" class="form-control mb-2">
                            <button type="submit" class="btn btn-primary">edit</button>
                         </form>
                    </td>
                    <td class="actions">
                        <a class="btn btn-outline-danger btn-sm delete-product"> <i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot>
        <tr>
            <td colspan="5" class="text-right">
                <span class="card-text"><strong>total: </strong>wwwwwwwww</span>
                <a href= class="btn btn-primary"><i class="fa fa-angle-left"></i> Continue Shopping</a>
                <button class="btn btn-danger">Checkout</button>

            </td>
        </tr>
    </tfoot>
</table>
@endsection

@section('scripts')
<script type="text/javascript">

   $(".edit-cart-info").change(function (e) {
        e.preventDefault();
        var ele = $(this);
        $.ajax({
            url: '{{ route('update.sopping.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("rowId"),
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
    $(".delete-product").click(function (e) {
        e.preventDefault();
        var ele = $(this);
        if(confirm("Do you really want to delete?")) {
            $.ajax({
                url: '{{ route('delete.cart.product') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("rowId")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });

</script>
@endsection

@extends('web.layout')
@section('content')



<table class="table">
    <thead>
        <tr>
            <th>mobile_name</th>
            <th>Cpu_spsecfication</th>
            <th>Gpu_spsecfication</th>
            <th>battery_spsecfication</th>
            <th>Front_camera_spsecfication</th>
            <th>Back_camera_spsecfication</th>
            <th>Screen_Size</th>
            <th>Type_of_charge</th>
            <th>Price</th>
            <th>imge</th>
            <th>name of comany</th>
            <th>name of category</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th>{{$products-> mobile_name }}</th>
            <th>{{$products-> Cpu_spsecfication }}</th>
            <th>{{$products-> Gpu_spsecfication }}</th>
            <th>{{$products->battery_spsecfication  }}</th>
            <th>{{$products-> Front_camera_spsecfication }}</th>
            <th>{{$products->  Back_camera_spsecfication}}</th>
            <th>{{$products-> Screen_Size }}</th>
            <th>{{$products->Type_of_charge  }}</th>
            <th>{{$products->  Price}}</th>
            <td><img src="{{ asset('imageproduct/'.$products->imge) }}" width="100" height="100" alt="{{ $products->name }}"/></td>
            <td>{{ DB::table('companies')->where('id', $products->Company_id)->value('company_name') }}</td>
            <td>{{ DB::table('categories')->where('id', $products->category_id)->value('name') }}</td>
    </tbody>

</table>
@endsection

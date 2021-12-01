@extends('master')
@section('content')
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">tên sản phẩm</th>
      <th scope="col">Loại</th>
      <th scope="col">mô tả</th>
      <th scope="col">giá gốc</th>
      <th scope="col">giá khuyến mãi</th>
      <th scope="col">ảnh</th>
      <th scope="col">Kiểu bán</th>
       <th scope="col" colspan="2" >&nbsp;&nbsp;&nbsp;&ensp;Thao tác</th>
     
    </tr>
  </thead>
  <tbody>
  	@foreach($ManagerProduct as $data)
    <tr>
      <th scope="row">{{$data->id}}</th>
      <td>{{$data->name}}</td>
      <td>@switch($data->id_type)
      		@case("1")
      		cá guppy
      		@break
      		@case("2")
      		cá thủy sinh
      		@break
      		@case("3")
      		hồ thủy sinh setup sẵn
      		@break
      		@case("4")
      		hồ nuôi cá
      		@break
      		@case("5")
      		thức ăn cá
      		@break
      		@case("6")
      		phụ kiện
      		@break
      		@case("7")
      		cây thủy sinh
      		@break
      		@endswitch
      </td>
      <td>{{$data->description}}</td>
      <td>{{number_format($data->unit_price)}}</td>
      <td>@if($data->promotion_price=="0")không giảm giá @else{{$data->promotion_price}}@endif</td>
      <td>{{$data->image}}</td>
      <td>{{$data->unit}}</td>
      <td><a href="{{route('suasanpham',$data->id)}}" title="">chỉnh sửa</a></td>
      <td><a href="{{route('xoasanpham',$data->id)}}" title="">xóa</a></td>
    </tr>
    @endforeach


 
   
  </tbody>
</table>
<button type="button" class="btn btn-outline-success btn-lg" style="margin-left:825px;"><a href="{{route('themsanpham')}}" title="">tạo sản phẩm mới</a></button>
@endsection
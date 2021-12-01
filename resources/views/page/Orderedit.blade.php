@extends('master')
@section('content')
<form action="{{route('suadonhang2',$billOrder->id)}}" method="post">
		@csrf
<label for="exampleFormControlInput1">Cập nhật trạng thái đơn hàng:</label>
<select class="form-control" name="status">
      <option value="chờ xử lý">chờ xử lý</option>
      <option value="đã nhận đơn">đã nhận đơn</option>
      <option value="đang đóng gói">đang đóng gói</option>
      <option value="đã gửi bên vận chuyển">đã gửi bên vận chuyển</option>
      
    </select>
<div class="form-block"style="margin-left: 625px; margin-top:25px;">
		<button type="submit" class="btn btn-primary btn-lg ">cập nhật trạng thái</button>
	</div>
</form>
@endsection
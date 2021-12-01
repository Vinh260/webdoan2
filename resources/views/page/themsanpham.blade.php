@extends('master')
@section('content')
<form action="{{route('themsanpham')}}" method="post" enctype="multipart/form-data">
	<input type="hidden" name="_token" value="{{csrf_token()}}">
  <div class="form-group"style="margin-left: 25px;">
    <label for="exampleFormControlInput1">Tên sản phẩm:</label>
    <input type="text" name="name" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group"style="margin-left: 25px;">
    <label for="exampleFormControlSelect1">Loại</label>
    <select class="form-control" name="type">
      <option value="1">Cá Guppy</option>
      <option value="2">cá thả thủy sinh </option>
      <option value="3">hồ thủy sinh setup sẵn</option>
      <option value="4">hồ nuôi cá</option>
      <option value="5">thức ăn cá</option>
       <option value="6">phụ kiện</option>
        <option value="7">cây thủy sinh</option>
    </select>
  </div>
  
  <div class="form-group"style="margin-left: 25px;">
    <label for="exampleFormControlTextarea1">Mô tả:</label>
    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
		  <div class="input-group mb-3"style="margin: 25px;">
		  <div class="input-group-prepend">
		    <label for="exampleFormControlTextarea1">Up ảnh:</label>
		  </div>
		  <div class="custom-file">
		    <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
		   
		  </div>
		</div>
  <div class="form-group"style="margin-left: 25px;">
    <label for="exampleFormControlInput1">Giá gốc:</label>
    <input type="text" name="unit_price" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group"style="margin-left: 25px;">
    <label for="exampleFormControlInput1">Giá khuyến mãi:</label>
    <input type="text" name="promotion_price" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group"style="margin-left: 25px;">
    <label for="exampleFormControlInput1">kiểu bán:</label>
    <input type="text" name="unit" class="form-control" id="exampleFormControlInput1" >
  </div>
  <div class="form-group"style="margin-left: 25px;">
    <label for="exampleFormControlSelect1">Mới hay cũ:</label>
    <select class="form-control" name="new" id="exampleFormControlSelect1">
      <option value="1">Mới</option>
      <option value="0">Cũ</option>
    
    </select>
  </div>
  <div class="form-block"style="margin-left: 125px;">
		<button type="submit" class="btn btn-primary btn-lg ">thêm sản phẩm</button>
	</div>
</form>
@endsection
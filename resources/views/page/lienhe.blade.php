@extends('master')
@section('content')
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Liên hệ, góp ý</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.html">Trang chủ</a> / <span>Liên hệ</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="beta-map">
		
		<div class="abs-fullwidth beta-map wow flipInX"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.893324009918!2d108.18337491534349!3d16.07102454365741!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421919efaab8f3%3A0xf11b200cad33eb33!2zVGnhu4dtIEPDoSBHdXBweSBNaW5pIC0gS2EncyBHdXBweSDEkMOgIE7hurVuZw!5e0!3m2!1svi!2s!4v1633512186895!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			
			<div class="space50">&nbsp;</div>
			<div class="row">
				<div class="col-sm-8">
					<h2>Gửi góp ý cho chúng tôi tại đây</h2>
					<div class="space20">&nbsp;</div>
					<p>mọi thắc mắc, góp ý xin hãy gửi đến chúng tôi để có thể được hỗ trợ nhanh nhất</p>
					<div class="space20">&nbsp;</div>
					<form action="#" method="post" class="contact-form">	
						<div class="form-block">
							<input name="your-name" type="text" placeholder="Tên của bạn (bắt buộc)">
						</div>
						<div class="form-block">
							<input name="your-email" type="email" placeholder="Email (bắt buộc)">
						</div>
						<div class="form-block">
							<input name="your-subject" type="text" placeholder="chủ đề">
						</div>
						<div class="form-block">
							<textarea name="your-message" placeholder="tin nhắn"></textarea>
						</div>
						<div class="form-block">
							<button type="submit" class="beta-btn primary">Gửi tin nhắn<i class="fa fa-chevron-right"></i></button>
						</div>
					</form>
				</div>
				<div class="col-sm-4">
					<h2>thông tin liên hệ</h2>
					<div class="space20">&nbsp;</div>

					<h6 class="contact-title">Địa chỉ</h6>
					<p>
						123/456 Trưng Nữ Vương<br>
						Đà Nẵng<br>
						
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">yêu cầu hợp tác</h6>
					<p>
						Nếu bạn cùng niềm đam mê và muốn hợp tác<br>
						liên hệ tại email <br>
						<a href="https://mail.google.com/mail/u/0/#inbox">vinhkaka@gamil.com</a>
					</p>
					<div class="space20">&nbsp;</div>
					<h6 class="contact-title">ứng tuyển</h6>
					<p>
						Khi có thông báo tuyển nhân viên các bạn liên hệ <br>
						theo email <br>
						<a href="https://mail.google.com/mail/u/0/#inbox">vinhkaka.com</a>
					</p>
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
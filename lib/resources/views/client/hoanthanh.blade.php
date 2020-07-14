@extends('client.main')

@section('titleclient','Hoàn thành')

@section('mainclient')


<section class="ftco-section contact-section bg-light">
      <div class="container">
       <p class="info" style="text-align: center;color: green;font-size: 30px;">Đặt vé thành công</p>
        <p>•  Mã đặt chỗ của bạn sẽ được gửi qua Số điện thoại hoặc email bạn đã đăng kí</p>
              <p>• Ngoài ra quý khách cũng có thể kiểm tra mã vé trong phần tài khoản cá nhân.</p>
              <p>• Quý khách lưu ý : Nếu muốn hủy vé vui lòng liên hệ với hotline của nhà xe trước 24h xe chạy</p>
              <p>• Bạn có thể vào đọc tin tức để tham khảo về 1 số nhà xe mới cũng như cập nhật được số hotline của nhà xe</p>
              <p>Xin chân thành Cám ơn Quý khách đã tin tưởng và lựa chọn dịch vụ của chúng tôi</p>
            <p class="text-right return"><a href="{{asset('/')}}">Quay lại trang chủ</a></p>
          </div>
    </section>
@stop
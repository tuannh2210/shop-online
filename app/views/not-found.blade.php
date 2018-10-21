@extends('layout')
@section('content')
<div class="not-found">
  <h4><strong>Nội dung bạn tìm kiếm không tồn tại</strong></h4><hr>
  <p>Bạn hãy thử một trong các cách dưới đây:<br>
    Sử dụng chức năng tìm kiếm để tìm nội dung bạn cần.<br>
    Nếu bạn chắc chắn đây là lỗi, hãy báo cho chúng tôi để Genk ngày càng hoàn thiện hơn.</p>

  <img src="{{getUrl('public/img/404.jpg')}}" >
  <p>Quay trở lại <a href="{{getUrl('')}}">trang chủ</a> để xem các thông tin mới nhất trên website</p>
</div>
@endsection
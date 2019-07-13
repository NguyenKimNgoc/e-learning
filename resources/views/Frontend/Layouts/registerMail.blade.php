<div class="register-mail col-md-12">
    <div class="title-mail col-md-4">
        <h4 class="text-center">ĐĂNG KÝ NHẬN MAIL</h4>
    </div>
    <div class="form-mail col-md-8">
        <form action="{{route('register-mail')}}" method="POST" class="form-inline" role="form">
            @csrf
            <input type="email" class="form-control" required name="email" value="{{old('email')}}" placeholder="Đăng ký để nhận thông báo về khóa học mới">
            <button type="submit" class="btn btn-primary" id="subscribe">ĐĂNG KÝ</button>
        </form>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{ URL('css/login.css')}}">
    <style>
      
        </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 p-0  pt-5 bg-light dn ">
                <div class="row">
                    <div class="col-md-12 p-0 mt-5 center-block">
                        <img src="{{ URL('img/logo.png')}}" class="mx-auto d-block" width="170px"  alt="">
                    </div>
                </div>
                <div class="row p-5">
                <form action="" style="width:400px;"  class="p-0  mx-auto d-block">
                    <div class="mb-3 mt-3 ">
                        <label for="password" class="form-label" >Mật Khẩu*</label>
                        <input type="password"  class="form-control mx-auto d-block"  id="password" placeholder="Mật Khẩu" password="password">
                    </div>
                    <div class="mb-3 mt-3 ">
                        <label for="email" class="form-label" >Nhập Lại Mật Khẩu*</label>
                        <input type="email"  class="form-control mx-auto d-block"  id="email" placeholder="Nhập Lại Mật Khẩu" email="email">
                    </div>
                    <div class="row ">
                        <div class="text-center mt-3">
                            <button type="" class="btn btn-outline-warning" style="margin-right:24px;"><a href="{{route('login.index')}}"  class="nav-link">Hủy</a></button>
                            <button type="submit" class="btn btn-warning">Xác Nhận</button>
                        </div>                    
                    </div>
                    
                </form>
                </div>
            </div>
            <div class="col-md-7 p-0 img">
                <img src="{{ URL('img/banner.jpg')}}" class="w-100" alt="">
            </div>
        </div>
    </div>
</body>
</html>


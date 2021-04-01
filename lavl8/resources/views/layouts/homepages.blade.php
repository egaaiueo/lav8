<!DOCTYPE html>
<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>PPDB - SMK Wikrama Bogor </title>
      <link rel="stylesheet" href="style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   </head>
   <body>
      <div class="wrapper">
         <section class="banner_area" data-stellar-background-ratio="0.5">
            <a href="/"><img src="../img/zxc.png"></a>
            <h1 class="title">PPDB SMK WIKRAMA GARUT</h1>
            <p>Tahun Ajaran 2021 - 2022</p>
         </section>
         <div class="content">
            <div class="container">
               @yield('content')
            </div>
         </div>
      </div>
      <footer class="page-footer font-small pt-4">
            <div class="container text-center text-md-left">
                <div class="row text-center text-md-left mt-3 pb-3">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <img src="../img/zxc.png">
                        <br><br>
                        <p>Ilmu Yang Amaliah | Amal Yang Ilmiah | Akhlakul Karimah
                        </p>
                    </div>
                    <hr class="w-100 clearfix d-md-none">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#373737;">HOTLINE</h6>
                        <p>(0262)2802880</p>
                        <p>+62 856-93445-665</p>
                    </div>
                    <hr class="w-100 clearfix d-md-none">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#373737;">Email</h6>
                        <p><i class="fa fa-envelope mr-3"></i><a style="color: white;" href="mailto:info@smkwikrama.sch.id">info@smkwikrama.sch.id</a></p>
                    </div>
                    <hr class="w-100 clearfix d-md-none">
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold" style="color:#373737;">Alamat</h6>
                        <p><i class="fa fa-map-marker mr-3"></i> Kp. Palasari Kel Sindang Sari Kota Bogor 16146</p>
                    </div>
                </div>
                <hr>
                <div class="row d-flex align-items-center">
                    <div class="col-md-7 col-lg-8">
                        <p class="text-center text-md-left">Copyright &copy; 2021 WIKRAMA ENGINER All Right Reserved</p>
                    </div>
                    <div class="col-md-5 col-lg-4 ml-lg-0">
                        <div class="text-center text-md-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fa fa-facebook-f"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fa fa-pinterest"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
   </body>
</html>
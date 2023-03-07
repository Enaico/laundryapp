<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>Laundry Bomb</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('assetstemp/css/bootstrap.css')}}" rel="stylesheet" />
    <!-- FONTAWESOME STYLE CSS -->
    <link href="{{ asset('assetstemp/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="{{ asset('assetstemp/css/style.css')}}" rel="stylesheet" />
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top ">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><small>LAUNDRY</small><strong style=""></strong> B<i class="fa fa-wash">O</i>MB</a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right set-links">
                    <li><a href="/login" class="active-menu-item">LOGIN</a></li>     
                </ul>
            </div>

        </div>
    </div>
    <!--MENU SECTION END-->
    <section id="home-sec">
        <div class="overlay text-center">
            <h1>LAUNDRY BOMB LAYANAN TERBAIK</h1>
            <hr class="hr-set" />

            <p>Laundry BOMB menyediakan berbagai jenis pencucian</p>
        </div>
    </section>
    <!--HOME SECTION END-->
    
    <!--SEARCH SECTION END-->
    <section id="services-sec">
        <div class="container">

            <div class="row text-center">
                <div class="col-md-4">
                    <i class="fa fa-shirt fa-5x icon-custom-1 color-1"></i>
                    <h3>Setrika</h3>
                    <p>
                        Bawa barang yang
                        ingin anda setrika
                        keadaan  barang
                        harus kering.
                    </p>

                </div>
                <div class="col-md-4">
                    <i class="fa fa-shirt fa-5x icon-custom-1 color-1"></i>
                    <h3>Cuci Setrika </h3>
                    <p> 
                        Barang bawaan anda akan kami cuci dan setrika
                    </p>
                </div>  
                <div class="col-md-4">
                    <i class="fa-solid fa-shirt fa-5x icon-custom-1 color-1"></i>

                    <h3>Cuci Kering</h3>
                    <p>
                        Barang bawaan anda hanya kami cuci dan langsung dijemur, tidak termasuk cuci
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!--SERVICES SECTION END-->

    <!--CLIENTS SECTION END-->
    <section id="footer-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h4>TENTANG LAUNDRY BOMB</h4>
                    <p style="padding-right:50px;">
                        Laundry BOMB adalah    
                        sebuah laundry franchise
                        yang menyediakan
                        berbagai jenis macam pencucian
                    </p>
                </div>
                <div class="col-md-4">
                    <h4>CABANG PERUSAHAAN</h4>
                    <h5> -Sidoarjo</h5>
                    <h5> -Surabaya</h5>
                    <h5> -Mojokerto</h5>
                    <h5> -Gresik</h5>
                    <h5> -Malang</h5>
                    <h5><strong>KONTAK PERUSAHAAN:</strong></h5>
                    <h5><strong>Email:</strong> laundrybomb@gmail.com</h5>
                    <h5><strong>Call:</strong> 0821119900</h5>

                </div>
                <div class="col-md-4">
                    <h4>SOCIAL LINKS</h4>
                    <div class="social-links">
                    </div>

                </div>

            </div>

        </div>
    </section>
    <!--FOOTER SECTION END-->
    <div class="copy-txt">
        <div class="container">
            <div class="row">
                <div class="col-md-12 set-foot">
                
                </div>
            </div>
        </div>
    </div>
    <!-- COPY TEXT SECTION END-->
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="{{ asset('assetstemp/js/jquery-1.11.1.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="{{ asset('assetstemp/js/bootstrap.js')}}"></script>
    <!-- CUSTOM SCRIPTS  -->
    <script src="{{ asset('assetstemp/js/custom.js')}}"></script>
</body>

</html>

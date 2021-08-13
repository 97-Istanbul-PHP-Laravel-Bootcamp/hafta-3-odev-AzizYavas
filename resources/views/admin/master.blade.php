<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','ANASAYFA')</title>



    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/iconly/bold.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/bootstrap-icons/bootstrap-icons.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="shortcut icon" href="{{asset('images/favicon.svg')}}" type="image/x-icon">
</head>

<body>
<div id="app">

    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
            <div class="sidebar-header">
                <div class="d-flex justify-content-between">
                    <div class="logo">
                        <a href="index.html"><img src="{{asset('images/logo/logo.png')}}" alt="Logo" srcset=""></a>
                    </div>
                    <div class="toggler">
                        <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                    </div>
                </div>
            </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-title">Menu</li>

                    <li class="sidebar-item active ">
                        <a href="{{route('master')}}" class='sidebar-link'>
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-title">Ayarlar</li>

                    <li class="sidebar-item">
                        <a href="{{route('categoryindex')}}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Kategoriler</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{route('productindex')}}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Ürünler</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{route('userindex')}}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Kullanıcılar</span>
                        </a>
                    </li>

                    <li class="sidebar-item  ">
                        <a href="{{route('cartindex')}}" class='sidebar-link'>
                            <i class="bi bi-file-earmark-medical-fill"></i>
                            <span>Satış İşlemleri</span>
                        </a>
                    </li>

                    <!--
                    burası kalsın belki kullanırız
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i class="bi bi-hexagon-fill"></i>
                            <span>Form Elements</span>
                        </a>
                        <ul class="submenu ">
                            <li class="submenu-item ">
                                <a href="form-element-input.html">Input</a>
                            </li>
                            <li class="submenu-item ">
                                <a href="form-element-input-group.html">Input Group</a>
                            </li>
                        </ul>
                    </li>
                    -->


                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    // burası sabit kalıcak

    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>@yield('title','ANASAYFA')</h3>
        </div>
        @yield('content')


        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>97.Laravel Bootcamp</p>
                </div>
            </div>
        </footer>

    </div>


</div>
<script src="{{asset('vendors/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('vendors/apexcharts/apexcharts.js')}}"></script>
<script src="{{asset('js/pages/dashboard.js')}}"></script>

<script src="{{asset('js/main.js')}}"></script>
<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js')}}"></script>
<script src="{{asset('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>
<scirpt src="{{asset('/js/app.js')}}"></scirpt>
@yield('footer')
</body>

</html>

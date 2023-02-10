<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset("panel/img/apple-icon.png")}}">
    <link rel="icon" type="image/png" href="{{asset("panel/img/favicon.png")}}">
    <title>Yakinim Nerede</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet"/>
    <link id="pagestyle" href="{{asset("panel/css/argon-dashboard.css?v=2.0.4")}}" rel="stylesheet"/>
    <link id="pagestyle" href="{{asset("font-awesome/css/all.css")}}" rel="stylesheet"/>
    <script src="{{asset("jquery/jquery-3.6.0.js")}}"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

</head>

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
       id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="">
            <img src="{{asset("images/yakinimNeredeLogo.png")}}" class="navbar-brand-img h-100 m-auto d-flex" alt="main_logo">
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mt-3">
                <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Kayıt İşlemleri</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route("panel.form.list")}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fa-solid fa-list-ul text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kayit Listesi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="{{route("panel.form.index")}}">
                    <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                        <i class="fas fa-plus ni text-warning text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1">Kayit Oluştur</span>
                </a>
            </li>

        </ul>
    </div>
</aside>
<main class="main-content position-relative border-radius-lg ">
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur"
         data-scroll="false">
        @yield("head")
    </nav>
    @yield("content")
</main>
<script src="{{asset("panel/js/core/bootstrap.min.js")}}"></script>
</body>
</html>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    body {
        background: #f7f7f7;
    }

    .table {
        border-spacing: 0 0.85rem !important;
    }

    .table .dropdown {
        display: inline-block;
    }

    .table td,
    .table th {
        vertical-align: middle;
        margin-bottom: 10px;
        border: none;
    }

    .table thead tr,
    .table thead th {
        border: none;
        font-size: 12px;
        letter-spacing: 1px;
        text-transform: uppercase;
        background: transparent;
    }

    .table td {
        background: #fff;
    }

    .table td:first-child {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .table td:last-child {
        border-top-right-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .avatar {
        width: 2.75rem;
        height: 2.75rem;
        line-height: 3rem;
        border-radius: 50%;
        display: inline-block;
        background: transparent;
        position: relative;
        text-align: center;
        color: #868e96;
        font-weight: 700;
        vertical-align: bottom;
        font-size: 1rem;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    .avatar-sm {
        width: 2.5rem;
        height: 2.5rem;
        font-size: 0.83333rem;
        line-height: 1.5;
    }

    .avatar-img {
        width: 100%;
        height: 100%;
        -o-object-fit: cover;
        object-fit: cover;
    }

    .avatar-blue {
        background-color: #c8d9f1;
        color: #467fcf;
    }

    table.dataTable.dtr-inline.collapsed
    > tbody
    > tr[role="row"]
    > td:first-child:before,
    table.dataTable.dtr-inline.collapsed
    > tbody
    > tr[role="row"]
    > th:first-child:before {
        top: 28px;
        left: 14px;
        border: none;
        box-shadow: none;
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > td:first-child,
    table.dataTable.dtr-inline.collapsed > tbody > tr[role="row"] > th:first-child {
        padding-left: 48px;
    }

    table.dataTable > tbody > tr.child ul.dtr-details {
        width: 100%;
    }

    table.dataTable > tbody > tr.child span.dtr-title {
        min-width: 50%;
    }

    table.dataTable.dtr-inline.collapsed > tbody > tr > td.child,
    table.dataTable.dtr-inline.collapsed > tbody > tr > th.child,
    table.dataTable.dtr-inline.collapsed > tbody > tr > td.dataTables_empty {
        padding: 0.75rem 1rem 0.125rem;
    }

    div.dataTables_wrapper div.dataTables_length label,
    div.dataTables_wrapper div.dataTables_filter label {
        margin-bottom: 0;
    }

    @media (max-width: 767px) {
        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            -ms-flex-pack: center !important;
            justify-content: center !important;
            margin-top: 1rem;
        }
    }

    .btn-icon {
        background: #fff;
    }

    .btn-icon .bx {
        font-size: 20px;
    }

    .btn .bx {
        vertical-align: middle;
        font-size: 20px;
    }

    .dropdown-menu {
        padding: 0.25rem 0;
    }

    .dropdown-item {
        padding: 0.5rem 1rem;
    }

    .badge {
        padding: 0.5em 0.75em;
    }

    .badge-success-alt {
        background-color: #d7f2c2;
        color: #7bd235;
    }

    .table a {
        color: #212529;
    }

    .table a:hover,
    .table a:focus {
        text-decoration: none;
    }

    table.dataTable {
        margin-top: 12px !important;
    }

    .icon > .bx {
        display: block;
        min-width: 1.5em;
        min-height: 1.5em;
        text-align: center;
        font-size: 1.0625rem;
    }

    .btn {
        font-size: 0.9375rem;
        font-weight: 500;
        padding: 0.5rem 0.75rem;
    }

    .avatar-blue {
        background-color: #c8d9f1;
        color: #467fcf;
    }

    .avatar-pink {
        background-color: #fcd3e1;
        color: #f66d9b;
    }
</style>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{asset("images/yakinimNeredeLogo.png")}}" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Ara" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Ara</button>
            </form>
        </div>
    </div>
</nav>

<div class="data-table">
    <div class="container">
        <div class="row py-5">
            <div class="col-12">
                <table id="example" class="table table-hover responsive nowrap" style="width:100%">
                    <thead>
                    <tr>

                        <th>Şehir</th>
                        <th>İlçe</th>
                        <th>Yaş</th>
                        <th>Ölüm Tarihi</th>
                        <th>Cinsiyet</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            Malatya
                            {{--                            <a href="#">--}}
                            {{--                                <div class="d-flex align-items-center">--}}
                            {{--                                    <div class="avatar avatar-blue mr-3">EB</div>--}}

                            {{--                                    <div class="">--}}
                            {{--                                        <p class="font-weight-bold mb-0">Ethan Black</p>--}}
                            {{--                                        <p class="text-muted mb-0">ethan-black@example.com</p>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </a>--}}
                        </td>
                        <td>Battalgazi</td>
                        <td>40</td>
                        <td>09/04/1996</td>
                        <td>
                            <div class="badge badge-success badge-success-alt">Enabled</div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip" data-placement="top"
                                       title="Actions"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> Edit
                                        Profile</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="bx bxs-trash mr-2"></i>
                                        Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td> İstanbul
                            {{--                            <a href="#">--}}
                            {{--                                <div class="d-flex align-items-center">--}}
                            {{--                                    <div class="avatar avatar-pink mr-3">JR</div>--}}

                            {{--                                    <div class="">--}}
                            {{--                                        <p class="font-weight-bold mb-0">Julie Richards</p>--}}
                            {{--                                        <p class="text-muted mb-0">julie_89@example.com</p>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </a>--}}
                        </td>
                        <td> Arnavutköy</td>
                        <td>30</td>
                        <td>13/01/1989</td>
                        <td>
                            <div class="badge badge-success badge-success-alt">Enabled</div>
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-sm btn-icon" type="button" id="dropdownMenuButton2"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-horizontal-rounded" data-toggle="tooltip" data-placement="top"
                                       title="Actions"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                    <a class="dropdown-item" href="#"><i class="bx bxs-pencil mr-2"></i> Edit
                                        Profile</a>
                                    <a class="dropdown-item text-danger" href="#"><i class="bx bxs-trash mr-2"></i>
                                        Remove</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="row py-5">
            <div class="col-12">
                <h6 class="small text-danger">Bu uygulama, deprem felaketlerine, yakınını kaybetmiş/bulamayan kişilerin
                    aramalarını yetkili kurum ve kuruluşların kontrolünde kolaylaştırmak amacıyla gönüllü yazılım
                    mühendisleri ve yazılım mühendisliği öğrencleri tarafından geliştirilmiştir. Arama talebinde
                    bulunduğunuz kişilerin kişisel verileri ‘’Fiili imkânsızlık nedeniyle rızasını açıklayamayacak
                    durumda bulunan veya rızasına hukuki geçerlilik tanınmayan kişinin kendisinin ya da bir başkasının
                    hayatı veya beden bütünlüğünün korunması için zorunlu olması’’ hukuki sebebine dayanarak, otomatik
                    yollarla işlenecektir. Tarafınıza ait kişisel veriler, ‘’Bir hakkın tesisi, kullanılması veya
                    korunması için veri işlemenin zorunlu olması’’ hukuki sebebine dayanarak işlenecektir.

                    Paylaşacağınız arama bildirimlerinde yer alan tüm veriler, veli, vasi, temsilci bilgisi, medeni
                    durum ve sağlık bilgileri tarafımızca oluşturulan ve sunucuları yurtiçi ve yurtdışında bulunan veri
                    tabanında toplanarak, Afad, Akut, Kızılay gibi yetkili arama kurtarma kuruluşlarının yanı sıra
                    destek ve yardım taleplerini karşılayabilecek sivil toplum kuruluşları ile kişisel veri işleme amacı
                    ile sınırlı olarak paylaşılacaktır.


                    Bu yazılım hiç bir kar amacı olmadan, tamamen yardımlaşma ve depremzedelerin zorlu zamanlarında
                    kolaylık sağlaması amacıyla, hiç bir kurum ve kuruluşla bağlantılı olmadan geliştirilmiştir.

                    Gerektiğinde yetkili merci ve kurumlara bilgi sağlanabilir ve işbirliği yapılabilir.</h6>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous">

</script>
<script>
    $(document).ready(function () {
        $("#example").DataTable({
            aaSorting: [],
            responsive: true,

            columnDefs: [
                {
                    responsivePriority: 1,
                    targets: 0
                },
                {
                    responsivePriority: 2,
                    targets: -1
                }
            ]
        });

        $(".dataTables_filter input")
            .attr("placeholder", "Search here...")
            .css({
                width: "300px",
                display: "inline-block"
            });

        $('[data-toggle="tooltip"]').tooltip();
    });

</script>
</body>
</html>

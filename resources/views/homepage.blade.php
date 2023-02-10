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

    tr {
        box-shadow: rgb(99 99 99 / 20%) 0px 2px 8px 0px;
        border-radius: 5px;
    }
    .bubble-element{
        width: 90%;
        margin: auto;
        overflow: visible;
        justify-content: flex-start;
        row-gap: 10px;
        column-gap: 10px;
        border-radius: 9px;
        -moz-border-radius: 15px;
        -moz-box-shadow: 0 5px 12px -2px rgba(0,0,0,.15);
        box-shadow: 0 5px 12px -2px rgb(0 0 0 / 15%);
        padding: 5px;
        align-self: flex-start;
        min-width: 0;
        order: 4;
        min-height: 0;
        height: max-content;
        flex-grow: 0;
        flex-shrink: 0;
        margin-left: 0;
        margin-top: 0;
        margin-right: 0;
        margin-bottom: 0;
        z-index: 44;
    }
    .baTaIqx{
        overflow: visible;
        justify-content: flex-start;

        border-radius: 10px;
        -moz-border-radius: 10px;
        padding: 2px 3px;
        -webkit-transition: border-color 200ms ease;
        -moz-transition: border-color 200ms ease;
        -o-transition: border-color 200ms ease;
        -ms-transition: border-color 200ms ease;
        transition: border-color 200ms ease;
        align-self: flex-start;
        min-width: 180px;
        order: 1;
        min-height: 0;
        width: 180px;
        flex-grow: 1;
        height: max-content;
        margin-left: 0;
        margin-top: 0;
        margin-right: 0;
        margin-bottom: 0;
        z-index: 43;

    }
    .baTaIraO{
        overflow: visible;
        justify-content: flex-start;
        border-style: solid;
        border-width: 2px;
        border-color: var(--color_primary_contrast_default);
        border-radius: 10px;
        -moz-border-radius: 10px;
        padding: 2px 3px;
        -webkit-transition: border-color 200ms ease;
        -moz-transition: border-color 200ms ease;
        -o-transition: border-color 200ms ease;
        -ms-transition: border-color 200ms ease;
        transition: border-color 200ms ease;
        align-self: flex-start;
        min-width: 140px;
        order: 2;
        min-height: 0;
        width: 140px;
        flex-grow: 1;
        height: max-content;
        margin-left: 0;
        margin-top: 0;
        margin-right: 0;
        margin-bottom: 0;
        z-index: 44;
    }
    .baTaIraW{
        overflow: visible;
        justify-content: flex-start;
        border-style: solid;
        border-width: 2px;
        border-color: var(--color_primary_contrast_default);
        border-radius: 10px;
        -moz-border-radius: 10px;
        padding: 2px 3px;
        -webkit-transition: border-color 200ms ease;
        -moz-transition: border-color 200ms ease;
        -o-transition: border-color 200ms ease;
        -ms-transition: border-color 200ms ease;
        transition: border-color 200ms ease;
        align-self: flex-start;
        min-width: 140px;
        order: 3;
        min-height: 0;
        width: 140px;
        flex-grow: 1;
        height: max-content;
        margin-left: 0;
        margin-top: 0;
        margin-right: 0;
        margin-bottom: 0;
        z-index: 45;
    }
    .baTaIqu{
        font-family: var(--font_default);
        font-size: 15px;
        font-weight: 700;
        color: var(--color_primary_default);
        text-align: center;
        line-height: 1;
        border-style: solid;
        border-width: 2px;
        border-color: var(--color_primary_contrast_default);
        border-radius: 10px;
        -moz-border-radius: 10px;
        -webkit-box-shadow: 0 5px 10px -3px rgb(0 0 0 / 20%);
        -moz-box-shadow: 0 5px 10px -3px rgba(0,0,0,.2);
        box-shadow: 0 5px 10px -3px rgb(0 0 0 / 20%);
        padding: 10px 16px;
        -webkit-transition: box-shadow 200ms ease;
        -moz-transition: box-shadow 200ms ease;
        -o-transition: box-shadow 200ms ease;
        -ms-transition: box-shadow 200ms ease;
        transition: box-shadow 200ms ease;
        cursor: pointer;
        align-self: flex-start;
        min-width: 0;
        order: 5;
        min-height: 0;
        width: max-content;
        flex-grow: 0;
        height: max-content;
        margin-left: 0;
        margin-top: 0;
        margin-right: 0;
        margin-bottom: 0;
        z-index: 2;
    }
    .data-table{
        margin-top: 10vh;
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
    <div class="bubble-element Group baTaIqr bubble-r-container flex row" style="   width: 90%;
    margin: auto;">
        <div class="bubble-element Group baTaIqx bubble-r-container flex row" style="">

            <input class=" Input baTaIqz a1676064228323x1342" type="input"
                   placeholder="Ad, soyad, il, ilçe, tel no..." maxlength="300"></div>
        <div class="bubble-element Group baTaIraO bubble-r-container flex row">
            <div class=" 1618916043803x877032991371296800-AAI"
                 style="align-self: center; min-width: 19px; max-width: 19px; order: 1; min-height: 25px; max-height: 25px; width: 19px; flex-grow: 1; height: 25px; margin: 0px 3px 0px 5px; z-index: 15; border-radius: 0px; padding: 3px 0px;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="rgba(69,100,252,0.5)" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M11.25 11.25l.041-.02a.75.75 0 011.063.852l-.708 2.836a.75.75 0 001.063.853l.041-.021M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9-3.75h.008v.008H12V8.25z"></path>
                </svg>
            </div>
            <select class=" Dropdown dropdown-chevron"
                    style="align-self: center; min-width: 0px; order: 3; min-height: 30px; max-height: 30px; width: 0px; flex-grow: 1; height: 30px; margin: 0px; z-index: 16; display: block; border: none; background-color: transparent; color: rgba(var(--color_primary_default_rgb), 0.7); font-family: var(--font_default); font-size: 15px; font-weight: 700; border-radius: 0px; padding: 0px 8px; transition: color 200ms ease 0s, border-color 200ms ease 0s;">
                <option class="dropdown-choice dropdown-placeholder" value="&quot;PLACEHOLDER_1427118222253&quot;"
                        style="color: #6c6c6c; display: none;">Yaşıyor
                </option>
                <option class="dropdown-choice" value="&quot;BLANK_1427118194589&quot;"
                        style="color: #6c6c6c;"></option>
                <option class="dropdown-choice" value="&quot;yard_m_bekleniyor&quot;"
                        style="color: #6c6c6c;">Ölü
                </option>
                <option class="dropdown-choice" value="&quot;yard_m_ediliyor&quot;"
                        style="color: #6c6c6c;">Yaşıyor
                </option>
            </select></div>
        <div class=" Group baTaIraW bubble-r-container flex row" style="">
            <div class="bubble-element 1618916043803x877032991371296800-AAI"
                 style="align-self: center; min-width: 19px; max-width: 19px; order: 1; min-height: 25px; max-height: 25px; width: 19px; flex-grow: 1; height: 25px; margin: 0px 3px 0px 5px; z-index: 15; border-radius: 0px; padding: 3px 0px;">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="rgba(69,100,252,0.5)" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z"></path>
                </svg>
            </div>
            <select class="bubble-element Dropdown dropdown-chevron"
                    style="align-self: center; min-width: 0px; order: 3; min-height: 30px; max-height: 30px; width: 0px; flex-grow: 1; height: 30px; margin: 0px; z-index: 16; display: block; border: none; background-color: transparent; color: rgba(var(--color_primary_default_rgb), 0.7); font-family: var(--font_default); font-size: 15px; font-weight: 700; border-radius: 0px; padding: 0px 8px; transition: color 200ms ease 0s, border-color 200ms ease 0s;">
                <option class="dropdown-choice dropdown-placeholder" value="&quot;PLACEHOLDER_1427118222253&quot;"
                        style="color: var(--color_primary_default); display: none;">Cinsiyet
                </option>
                <option class="dropdown-choice" value="&quot;BLANK_1427118194589&quot;"
                        style="color: var(--color_primary_default);"></option>
                <option class="dropdown-choice" value="&quot;kritik&quot;" style="color: var(--color_primary_default);">
                  Kadın
                </option>
                <option class="dropdown-choice" value="&quot;ciddi&quot;" style="color: var(--color_primary_default);">
                    Erkek
                </option>
            </select></div>
        <div class="bubble-element 1618916043803x877032991371296800-AAI"
             style="align-self: center; min-width: 30px; max-width: 30px; order: 4; min-height: 30px; max-height: 30px; width: 30px; flex-grow: 1; height: 30px; margin: 0px; z-index: 46; cursor: pointer; background-color: rgba(var(--color_primary_contrast_default_rgb), 0.05); border-radius: 5px; padding: 3px; transition: background 200ms ease 0s;">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                 stroke="rgba(71, 101, 255, 1)" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3"></path>
            </svg>
        </div>
        <button class="clickable-element bubble-element Button baTaIqu"
                style="background-color: var(--color_primary_contrast_default);">Filtrele
        </button>
    </div>
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
                <h6 class="small text-danger">
                </h6>
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

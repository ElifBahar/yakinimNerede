@extends("panel.layouts.app")
@section("head")
    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Kayıtlar</a>
                </li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Kayıt Listesi</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Kayıt Listesi</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto d-flex align-items-center">
                <div class="input-group">
                    <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here...">
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                        aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="{{asset("panel/img/team-2.jpg")}}"
                                             class="avatar avatar-sm  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New message</span> from Laur
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            13 minutes ago
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <img src="{{asset("panel/img/small-logos/logo-spotify.svg")}}"
                                             class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            <span class="font-weight-bold">New album</span> by Travis Scott
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            1 day
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                        <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <title>credit-card</title>
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                                   fill-rule="nonzero">
                                                    <g transform="translate(1716.000000, 291.000000)">
                                                        <g transform="translate(453.000000, 454.000000)">
                                                            <path class="color-background"
                                                                  d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                  opacity="0.593633743"></path>
                                                            <path class="color-background"
                                                                  d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z"></path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <h6 class="text-sm font-weight-normal mb-1">
                                            Payment successfully completed
                                        </h6>
                                        <p class="text-xs text-secondary mb-0">
                                            <i class="fa fa-clock me-1"></i>
                                            2 days
                                        </p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
@endsection
@section("content")
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h3>Kategori Listesi</h3>
                    </div>
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <div class="p-4">
                                <table id="categoryTable-1" class="display nowrap dataTable cell-border"
                                       style="width:100%">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th>Kategori Adı</th>
                                        <th>Güncelle</th>
                                        <th>Sil</th>
                                    </tr>
                                    </thead>

                                    <tfoot>
                                    <tr>
                                        <th></th>
                                        <th>ID</th>
                                        <th>Kategori Adı</th>
                                        <th>Güncelle</th>
                                        <th>Sil</th>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                            <div class="card-footer clearfix">
                                <a type="button" href="" class="btn btn-info float-left"><i
                                        class="fas fa-plus "></i>Kategori Ekle</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
                }
            });
        });


        let table, table_count;
        $(function () {
            render_datatable(null, 1);
        });

        function get_sub_menus(event) {
            if ($(event).hasClass('btn-success')) {
                $(event).removeClass('btn-success');
                $(event).addClass('btn-danger');
                $(event).find('i').removeClass('fa-plus-circle');
                $(event).find('i').addClass('fa-minus-circle');
            } else {
                $(event).addClass('btn-success');
                $(event).removeClass('btn-danger');
                $(event).find('i').addClass('fa-plus-circle');
                $(event).find('i').removeClass('fa-minus-circle');
            }
            let tr = $(event).closest('tr');
            let current_datatable_id = $(tr).parent().parent().attr('id');
            let datatables = $.fn.DataTable.tables();
            $.map(datatables, function (val, i) {
                if (current_datatable_id === val.id) {
                    table = $('#' + val.id).DataTable();
                    val;
                }
            })
            let row = table.row(tr);
            if (row.child.isShown()) {
                // This row is already open - close it
                row.child.hide();
                tr.removeClass('shown');
            } else {
                // Open this row
                row.child(format(row.data())).show();
                render_datatable(row.data().id, table_count)
                tr.addClass('shown');
            }
        }

        function render_datatable(parent_category, table_id) {
            table = $('#categoryTable-' + table_id).DataTable({
                language: {
                    'url': '//cdn.datatables.net/plug-ins/1.10.24/i18n/Turkish.json'
                },
                processing: true,
                serverSide: true,
                scrollX: true,
                scrollY: true,
                type: 'GET',
                ajax: "}" + '?parent_category=' + parent_category,
                columns: [
                    {data: 'plus'},
                    {data: 'id'},
                    {data: 'name'},
                    {data: 'update'},
                    {data: 'delete'}
                ],
                order: [1, 'asc']
            });
        }
        /* Formatting function for row details - modify as you need */
        function format ( d ) {
            table_count = $('.dataTable').length + 1;
            // `d` is the original data object for the row
            return '<table id="categoryTable-'+(table_count)+'" class="display nowrap dataTable cell-border" style="width:100%">' +
                '                                <thead>' +
                '                                     <th></th>' +
                '                                    <th>ID</th>' +
                '                                     <th>Kategori Adı</th>' +
                '                                    <th>Güncelle</th>' +
                '                                    <th>Sil</th>' +
                '                                </tr>' +
                '                                </thead>' +
                '                                <tbody>' +
                '                                </tbody>' +
                '                            </table>';
        }

    </script>
    <script>
        function updateCategoryPost() {

            var formData = new FormData(document.getElementById('update_category_post'));
            $.ajax({
                type: 'POST',
                url: '',
                dataType: "json",
                data: formData,
                headers: {'X-CSRF-TOKEN': "{{csrf_token()}} "},
                contentType: false,
                cache: false,
                processData: false,
                success: function () {
                    Swal.fire({
                        icon: 'success',
                        title: 'Başarılı',
                        html: 'Güncelleme Başarılı!'
                    });

                    var elements = document.getElementById("update_category_post").elements;

                    for (var i = 0, element; element = elements[i++];) {
                        element.value = "";
                    }

                    $('#update_categories_modal').modal("toggle");

                    dataTable.ajax.reload(null, false);
                    dataTable.fnStandingRedraw();
                },
                error: function (data) {
                    var errors = '';
                    for (datas in data.responseJSON.errors) {
                        errors += data.responseJSON.errors[datas] + '\n';
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Başarısız',

                        html: 'Bilinmeyen bir hata oluştu.\n' + errors,
                    });
                }
            });
        }


        function updateCategory(id) {

            var name = $('#nameUpdate');

            $.ajax({
                type: 'GET',
                url: '',
                data: {id: id},
                success: function (data) {

                    name.val(data.name);

                    $('#updateId').val(id);

                    $('#update_categories_modal').modal("toggle");

                },
                error: function (data) {
                    var errors = '';
                    for (datas in data.responseJSON.errors) {
                        errors += data.responseJSON.errors[datas] + '\n';
                    }
                    Swal.fire({
                        icon: 'error',
                        title: 'Başarısız',

                        html: 'Bilinmeyen bir hata oluştu.\n' + errors,
                    });
                }
            });
        }

        function deleteCategory(id) {
            Swal.fire({
                icon: "warning",
                title: "Emin misiniz?",
                html: "Silmek istediğinize emin misiniz?",
                showConfirmButton: true,
                showCancelButton: true,
                confirmButtonText: "Onayla",
                cancelButtonText: "İptal",
                cancelButtonColor: "#e30d0d"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        headers: {'X-CSRF-TOKEN': "{{csrf_token()}} "},
                        url: '',
                        data: {
                            id: id
                        },
                        dataType: "json",
                        success: function () {
                            Swal.fire({
                                icon: "success",
                                title: "Başarılı",
                                showConfirmButton: true,
                                confirmButtonText: "Tamam"
                            });
                            dataTable.ajax.reload();
                        },
                        error: function () {
                            Swal.fire({
                                icon: "error",
                                title: "Hata!",
                                html: "<div id=\"validation-errors\"></div>",
                                showConfirmButton: true,
                                confirmButtonText: "Tamam"
                            });
                            $.each(data.responseJSON.errors, function (key, value) {
                                $('#validation-errors').append('<div class="alert alert-danger">' + value + '</div>');
                            });
                        }
                    });
                }
            });
        }

    </script>

@endsection


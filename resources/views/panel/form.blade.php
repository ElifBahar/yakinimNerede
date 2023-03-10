@extends("panel.layouts.app")
@section("head")

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Kayıtlar</a>
                </li>
                <li class="breadcrumb-item text-sm text-white active" aria-current="page">Kayıt Ekle</li>
            </ol>
            <h6 class="font-weight-bolder text-white mb-0">Kayıt Ekle</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
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
@section('content')
    <div class="container-fluid py-4">
        <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <div class="d-flex align-items-center">
                                <p class="mb-0">Kayıt Oluştur</p>
                            </div>
                        </div>
                        <div class="card-body">
                            <p class="text-uppercase text-sm">Kişisel Bilgiler</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Ad (Boş
                                            Bırakılabilir)</label>
                                        <input name="name" id="name" class="form-control" type="text" placeholder="Ad">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Soyad (Boş
                                            Bırakılabilir)</label>
                                        <input name="surname" id="surname" class="form-control" type="text"
                                               placeholder="Soyad">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">T.C Kimlik (Boş
                                            Bırakılabilir)</label>
                                        <input name="tc" id="tc" class="form-control" type="number"
                                               placeholder="99999999999">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Tahmini Yaş (Boş
                                            Bırakılabilir)</label>
                                        <input name="age" id="age" class="form-control" type="text"
                                               placeholder="10 veya 10-11">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Biliniyorsa Anne Adı
                                            (Boş Bırakılabilir)</label>
                                        <input name="motherName" id="motherName" class="form-control" type="text"
                                               placeholder="Anne Adı">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Biliniyorsa Baba Adı
                                            (Boş Bırakılabilir)</label>
                                        <input name="fatherName" id="fatherName" class="form-control" type="text"
                                               placeholder="Baba Adı">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="is_alive" id="is_alive">
                                            <option value="">Durum...</option>
                                            <option value="0">Yaşıyor</option>
                                            <option value="1">Ölü</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" >
                                        <select name="gender" id="gender">
                                            <option value="">Cinsiyet...</option>
                                            <option value="0">Erkek</option>
                                            <option value="1">Kadın</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="is_adult" id="is_adult">
                                            <option value="">Yaş Aralığı</option>
                                            <option value="0">Yetişkin</option>
                                            <option value="1">Çocuk</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr class="horizontal dark">
                            <p class="text-uppercase text-sm">Adres Bilgileri</p>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Açık Adres</label>
                                        <input name="address" id="address" class="form-control" type="text"
                                               placeholder="Elazığ, Çaydaçıra Mah. x sokak vs. vs.">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="city" id="city">
                                            <option value="" style="opacity: 0.5">Şehir...</option>
                                            @foreach($city as $c)
                                                <option value="{{$c->id}}">{{$c->il_adi}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <select name="district" id="district">
                                            <option value="" style="opacity: 0.5">İlçe...</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="example-text-input" class="form-control-label">Çıkış Saati</label>
                                        <input name="date" id="date" class="form-control" type="datetime-local">
                                    </div>
                                </div>
                            </div>


                            <p class="text-uppercase text-sm">Fotoğraf</p>
                            <div class="row">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Fotoğraf Açıklaması</label>
                                    <input name="image_name" id="image_name" class="form-control" type="text"
                                           placeholder="Fotoğraf İçeriği (El,Kol,Doğum İzi vs).">
                                </div>

                                <div class="form-group row mt-4" style="width: 100%;justify-content: space-between">
                                    <label class="col-3">Kişi Fotoğraf Ekle</label>
                                    <label for="file-multiple-upload" class="col-3">
                                        <a title="Attach a file" class="mr-2 pointer text-primary">
                                            <i class="las la-paperclip font-20"></i>
                                            <span class="font-17">Fotoğraf Seçiniz</span>
                                        </a>
                                    </label>
                                    <input multiple name="image_path[]" id="file-multiple-upload" type="file"
                                           style="opacity: 0; width: 1px;" required>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <button type="button" onclick="createForm()"
                    class="btn btn-primary">Kaydet
            </button>
        </div>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script>

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        });


        function createForm() {

            var formData = new FormData(document.getElementById('kayit_formu'));

            $.ajax({
                type: 'POST',
                url: '{{route('panel.form.create')}}',
                data: formData,
                dataType: "json",
                contentType: false,
                cache: false,
                processData: false,
                success: function (data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Kayıt Oluşturuldu',
                    });
                    table.ajax().reload();
                },
                error: function (data) {
                    var errors = '';
                    for (datas in data.responseJSON.errors) {
                        errors += data.responseJSON.errors[datas] + '<br>';
                    }
                    Swal.fire({
                        icon: 'error',
                        title: '@lang('error/index.error')',
                        html: '<br>' + errors,
                    });
                }
            });
        }


        $(document).ready(function () {
            $('#city').change(function () {
                var id = $(this).val();
                $.ajax({
                    type: 'GET',
                    url: '{{route('getDistrict')}}',
                    data: {'id': id},
                    success: function (response) {
                        var a = document.getElementById('district');
                        $(a).empty();
                        for (var i = 0; i < response.response.length; i++) {
                            $(a).append('<option value=' + response.response[i].id + '>' + response.response[i].ilce_adi + '</option>')
                        }
                    }
                });
            });
        });
    </script>
@endsection

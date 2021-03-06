<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">

    <title>AmarEsEducar | Admin</title>
    <link rel="stylesheet" href="{{ asset('css/sweetalert2/sweetalert2.min.css') }}">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!--galeria-->
    <link rel="stylesheet" href="{{asset('css/galeria.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/styles.css')}}">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
    <!-- Navbar -->
        @include('admin.layouts.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('admin.layouts.sidebar')
    <!--contenido-->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">{{$activePage}}</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content" id="app">


             @yield('contentWrapper')
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    @include('admin.layouts.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('dist/js/demo.js')}}"></script>
<script src="{{asset('dist/js/pages/dashboard3.js')}}"></script>
{{--image tools--}}
<script src="{{asset('js/ImageTools/ImageTools.js')}}"></script>
<script>
    function resize(itemfile) {

        var element = itemfile;
        ImageTools.resize(element.files[0], {
            width: 1920,
            height: 1080
        }, function (blob, didItResize) {
            var file = new File([blob], (ListadeImagenes.length + 1) + ".jpg");
            ListadeImagenes.push(file);
        });
    };
    function sendresize () {

        var fd = new FormData();
        var ins = ListadeImagenes.length;
        for (var x = 0; x < ins; x++) {
            fd.append("imgUpload", ListadeImagenes[x]);
        }
        $.ajax({
            url: "{{asset('recorte')}}",
            method: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                location.reload();

            },
            error: function (err) {
                console.log(err);
            }
        });
    };

</script>
<script src="{{asset('js/sweetalert2/sweetalert2.all.min.js') }}"></script>

<script src="{{asset('js/app.js')}}"></script>
<script src="{{asset('dist/js/main.js')}}"></script>
</body>
</html>

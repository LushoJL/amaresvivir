@extends('admin.layouts.app',['activePage'=>'home'])
@section('contentWrapper')

            <center><h2 class="mb-4">Imagenes del carrusel</h2></center>

            <div class="container">
                <div class="row mb-3" style="justify-content: center">

                    <div class="col-6">
                        <form  enctype="multipart/form-data">
                            <div class="custom-file mb-2">
                                <input type="file" class="custom-file-input">
                                <label for="" class="custom-file-label">Agrega una imagen</label>
                            </div>
                            <div class="row" style="justify-content: center">
                                <button type="submit" class="btn btn-primary btn-md">Subir</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">

                    <!-- /.col-md-6 -->
                    <div class="col-12">
                        <!-- /.card -->

                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">Imagenes disponibles</h3>
                            </div>
                            <div class="card-body">
                                <div id="gallery" class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <img src="{{secure_asset('image/swiper/image1.jpg')}}" alt="">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <img src="{{secure_asset('image/swiper/image4.jpg')}}" alt="">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <img src="{{secure_asset('image/swiper/image1.jpg')}}" alt="">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <img src="{{secure_asset('image/swiper/image1.jpg')}}" alt="">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <img src="{{secure_asset('image/swiper/image1.jpg')}}" alt="">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <img src="{{secure_asset('image/swiper/image1.jpg')}}" alt="">
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12">
                                            <img src="{{secure_asset('image/swiper/image1.jpg')}}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

@endsection

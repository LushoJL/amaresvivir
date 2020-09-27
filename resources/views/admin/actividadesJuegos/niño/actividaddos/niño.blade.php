@extends('admin.layouts.app',['activePage'=>'niño'])
@section('contentWrapper')
    <hr>
    <center><h1>CUENTOS NIÑOS</h1></center>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ">
                <div  style="width: 250px">
                    <img SRC="{{asset('images/ninioactividades/cuento1ninos.png')}}" id="imagenRojo" width="100%">

                    <form  enctype="multipart/form-data">
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input id="rojo" type="file" @change="obtenerImageRojo" accept="image/*" class="custom-file-input"  >
                                <label class="custom-file-label">Suba una imagen</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>
                    </form>

                </div>

            </div>
            <div class="col-lg-4 ">
                <div  style="width: 250px">
                    <img SRC="{{asset('images/ninioactividades/cuento2ninos.png')}}" id="imagenRojo" width="100%">

                    <form  enctype="multipart/form-data">
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input id="rojo" type="file" accept="image/*" class="custom-file-input"  >
                                <label class="custom-file-label">Suba una imagen</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-4 ">
                <div  style="width: 250px">
                    <img SRC="{{asset('images/ninioactividades/CUENTO3NINO.png')}}" id="imagenRojo" width="100%">

                    <form  enctype="multipart/form-data">
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input id="rojo" type="file" @change="obtenerImageRojo" accept="image/*" class="custom-file-input"  >
                                <label class="custom-file-label">Suba una imagen</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <center><h1>CUENTOS NIÑAS</h1></center>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ">
                <div  style="width: 250px">
                    <img SRC="{{asset('images/ninioactividades/CUENTO1NINAS.png')}}" id="imagenRojo" width="350" height="450">

                    <form  enctype="multipart/form-data">
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input id="rojo" type="file" @change="obtenerImageRojo" accept="image/*" class="custom-file-input"  >
                                <label class="custom-file-label">Suba una imagen</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>
                    </form>

                </div>

            </div>
            <div class="col-lg-4 ">
                <div  style="width: 250px">
                    <img SRC="{{asset('images/ninioactividades/cuento2ninas.png')}}" id="imagenRojo" width="350" height="450">

                    <form  enctype="multipart/form-data">
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input id="rojo" type="file" accept="image/*" class="custom-file-input"  >
                                <label class="custom-file-label">Suba una imagen</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-4 ">
                <div  style="width: 250px">
                    <img SRC="{{asset('images/ninioactividades/CUENTO3NINA.png')}}" id="imagenRojo" width="350" height="450">

                    <form  enctype="multipart/form-data">
                        <div class="input-group is-invalid">
                            <div class="custom-file">
                                <input id="rojo" type="file" @change="obtenerImageRojo" accept="image/*" class="custom-file-input"  >
                                <label class="custom-file-label">Suba una imagen</label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <hr>
    <center><h1>SEMAFORO</h1></center>

    <semaforo-component></semaforo-component>
@endsection

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

            <galeria-component></galeria-component>

@endsection

@extends('admin.layouts.app',['activePage'=>'niño'])
@section('contentWrapper')

{{--<div class="container">--}}
{{--    <div class="row">--}}
{{--        <div class="col-lg-4 ">--}}
{{--            <div style="position: absolute;width: 250px;height: 250px; background: red;opacity: 0.4;"></div>--}}
{{--            <div  style="width: 250px">--}}
{{--                <img src="{{Storage::disk('s3')->url('public/rojo/base.jpg')}}" id="imagenRojo" width="250" height="250">--}}

{{--                <form method="POST" action="{{url('/rojo')}}" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <div class="input-group is-invalid">--}}
{{--                        <div class="custom-file">--}}
{{--                            <input id="rojo" name="base" type="file" accept="image/*" class="custom-file-input" id="validatedInputGroupCustomFile" required>--}}
{{--                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Suba una imagen</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <textarea class="form-control is-invalid" id="validationTextarea" name="mensajeverde" placeholder="Su mensaje"  required></textarea>--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Please enter a message in the textarea.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>--}}
{{--                </form>--}}
{{--            </div>--}}


{{--        </div>--}}


{{--        <div class="col-lg-4">--}}
{{--            <div style="position: absolute;width: 250px;height: 250px; background: yellow;opacity: 0.4;"></div>--}}

{{--            <div  style="width: 250px">--}}
{{--                <img src="{{Storage::disk('s3')->url('public/amarillo/base.jpg')}}" id="imagenAmarillo" width="250" height="250">--}}

{{--                <form method="POST" action="{{url('/amarillo')}}" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <div class="input-group is-invalid">--}}
{{--                        <div class="custom-file">--}}
{{--                            <input id="amarillo" name="base" type="file" accept="image/*" class="custom-file-input" id="validatedInputGroupCustomFile" required>--}}
{{--                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Suba una imagen</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <textarea class="form-control is-invalid" id="validationTextarea" name="mensajeamarillo" placeholder="Su mensaje" required></textarea>--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Please enter a message in the textarea.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>--}}
{{--                </form>--}}
{{--            </div>--}}


{{--        </div>--}}

{{--        <div class="col-lg-4">--}}
{{--            <div style="position: absolute;width: 250px;height: 250px; background: green;opacity: 0.4;"></div>--}}

{{--            <div  style="width: 250px">--}}
{{--                <img src="{{Storage::disk('s3')->url('public/verde/base.jpg')}}" id="imagenVerde" width="250" height="250">--}}

{{--                <form method="POST" action="{{url('/verde')}}" enctype="multipart/form-data">--}}
{{--                    @csrf--}}
{{--                    <div class="input-group is-invalid">--}}
{{--                        <div class="custom-file">--}}
{{--                            <input id="verde" name="base" type="file" accept="image/*" class="custom-file-input" id="validatedInputGroupCustomFile" required>--}}
{{--                            <label class="custom-file-label" for="validatedInputGroupCustomFile">Suba una imagen</label>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="mb-3">--}}
{{--                        <textarea class="form-control is-invalid" id="validationTextarea" name="mensajeverde" placeholder="Su mensaje" required></textarea>--}}
{{--                        <div class="invalid-feedback">--}}
{{--                            Please enter a message in the textarea.--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <button type="submit" class="btn btn-primary btn-lg btn-block">Aplicar</button>--}}

{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--</div>--}}



    <semaforo-component></semaforo-component>
@endsection

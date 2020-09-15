@extends('landingPage.layouts.app', ['activePage' => 'noticia'])
@section('content')
    <div class="container">
        <h2 class="my-5 text-center text-primary">Noticias Unifranz</h2>
        <hr>

        <div class="row">
            <!-- entrada-->
            <div class="col-lg-8">
                <!--entrada-->
                <div class="card-body">

                    <h2> Titulo de Entrada</h2>
                    <p class="small mb-0"> Fecha: 22-04-2020</p>
                    <p class="small mb-0"> Autor: eli</p>
                    <p class="small">categorias: <a href="#">Noticias</a> / <a href="#">Actividades</a> </p>
                    <img src="{{secure_asset('noticias/img/foto.jpg')}}" alt="" class="img-fluid"><br><br>
                    <p>El Alto. Junio.  Con el objetivo de generar nuevas ideas y conocer
                        las nuevas tendencias y estrategias en marketing digital internacional,
                        la carrera de Ingeniería Comercial organizó el Webinar «Digitalización:
                        Re-inventando tu Negocio”, donde reunió a especialistas en marketing
                        digital  de Bolivia, Colombia y Argentina; quienes desarrollaron
                        temáticas fundamentales para los micro empresarios en el contexto
                        de cuarentena y pandemia fruto del COVID-19: Digitalización de los
                        clientes UX y el manejo de las redes sociales para generar más ventas.</p><br>
                    <p>El Webinar reunió a María Reneé Lea Plaza Carrillo (Bolivia), Encargada
                        Comercial en el área de Soluciones de TI en Tecnología;  Nahuel Sotelo,
                        Especialista en manejo de Clientes UX y Co-Founder 2017  de BARDO (Argentina);
                        Martín Autiero, Especialista en manejo de Clientes UX y Co-Founder 2017
                        de BARDO (Argentina) y Juan Fernando Sierra Martínez, CEO de URB Digital
                        Thinking, (Colombia).</p>
                    <p>La primera es exponer fue María Reneé Lea Plaza Carrillo (Bolivia),
                        Encargada Comercial en el área de Soluciones de TI en Tecnología, quien
                        desarrollo el tema: “Manejo de Redes Sociales para microempresarios en
                        Tiempo de Covid -19”.</p>

                    <P>“La crisis del coronavirus ha llevado a los Social Media y Community
                        Managers a replantear por completo sus planes de contenido.  Contenido
                        que apunte a humanizar esta crisis y no generar las ventas como si nada
                        estuviera pasando. Foco en el mensaje. Ser empáticos, relevantes y
                        transparentes”. Generar empatía con tu audiencias, conocer bien a tu
                        marcar para replantear tu negocio, no ser oportunistas, mensajes claros
                        y sencillos y no saturar las redes sociales sino generar valor”; expuso
                        María Reneé Lea Plaza.</p>

                </div>
                <!--entradas-->

                <!--entradas-->
                <!--paguinacion-->

                <!--paginacion-->
            </div>


            <!--entradas-->
            <!--aside-->
            <div class="col-lg-3">

            </div>
            <!--aside-->


        </div>
    </div>
@endsection

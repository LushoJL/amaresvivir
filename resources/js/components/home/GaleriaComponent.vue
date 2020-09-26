<template>
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
                                <!--
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <img src="./public/image/swiper/image1.jpg" alt="imagen">
                                </div>
                                -->
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
</template>

<script>
    export  default {

    }
</script>

<style>
#gallery .col-lg-4 {
    margin: 0;
    padding: 25px;
}

#gallery img {
    width: 100%;
    height: auto;
}

#gallery img:hover {
    border: 5px solid #f7f7f7;
}
</style>

<?php if (session('login')) {
    echo form_open('agregar_carrito');
        echo form_hidden('id', $row['libro_id']);
        echo form_hidden('titulo', $row['libro_titulo']);
        echo form_hidden('precio', $row['libro_precio']);
        echo form_submit('comprar', 'Agregar al carrito', "class='btn btn-success'");
    echo form_close();
} ?>

<div class="contenido-principal">
    <div class="container my-5 d-flex justify-content-center align-items-center">
        <h1 class="text-center mb-4 titulo-categoria">Juegos de Aventura</h1>


        <div class=" row g-4 justify-content-center">

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/6M1qP76B-j6vdX0T4bFCHgJeX99MaKBpXFxbpif1MqY_350x200_1x-0.jpeg"
                        class="card-img-top" alt="Producto 1">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Red Dead Redemption 2</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$16.499,73 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/Y02Sgo6djO63byJEqI9lLpZP30eKL_tUsM1BeTmq6Vw_350x200_1x-0.jpg"
                        class="card-img-top" alt="Producto 2">
                    <div class="card-body d-flex flex-column ">
                        <h5 class="card-title fw-bold">Horizon Zero Dawn™ Remastered</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$47.910,14 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/vu-02bPJtZvHyL9fn1yGCX_NkvveopWb0TG-t9APKc0_350x200_1x-0.jpg"
                        class="card-img-top" alt="Producto 3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Tales of Arise</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$15.519,81 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/COacS3-Dfnk4MIri7RGne179q--deW6bgFTjdwPCIp4_350x200_1x-0.jpeg"
                        class="card-img-top" alt="Producto 4">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Control</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$37.356,14 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/hzaPY6jYAMVH_jnuhCJ2kgZJPHeh1CGPILCWWGRjcSY_350x200_1x-0.jpg"
                        class="card-img-top" alt="Producto 5">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">UNCHARTED: Legacy of Thieves Collection</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$30.086,19 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container my-5 d-flex justify-content-center align-items-center">
        <h1 class="text-center mb-4 titulo-categoria">Juegos de Terror</h1>

        <div class=" row g-4 justify-content-center">

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/KeYuUgg_350x200_1x-0.jpg"
                        class="card-img-top" alt="Producto 1">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Outlast</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$4753,94 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/h7mjvpeeoukd36zuywlb_350x200_1x-0.jpg"
                        class="card-img-top" alt="Producto 2">
                    <div class="card-body d-flex flex-column ">
                        <h5 class="card-title fw-bold">Outlast II</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$6555,74 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/CaRBlIjazah_F7r_x_hUJVjOT9t5eQvczvwoiMeK5z4_350x200_1x-0.jpg"
                        class="card-img-top" alt="Producto 3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">The Outlast Trials</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$26.365,15 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/4743TLCwvzrj27Sw1PvdE9J0Ql97q88rJt1bdq6HZH8_350x200_1x-0.jpeg"
                        class="card-img-top" alt="Producto 4">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Phasmophobia</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$58.654,21 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/neu2CHrF28kkd6tH055fwMnMvLIOsIh_VlNrxK4eMwM_350x200_1x-0.jpg"
                        class="card-img-top" alt="Producto 5">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Silent Hill 2</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$45.965,46 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container my-5 d-flex justify-content-center align-items-center">
        <h1 class="text-center mb-4 titulo-categoria">Juegos de Carreras</h1>


        <div class=" row g-4 justify-content-center">

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/4E7_ESo1Km0ecGRGyKA_LUdeUaf40rqvrMhtLidgVwY_350x200_1x-0.png"
                        class="card-img-top" alt="Producto 1">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Forza Horizon 5</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$41.254,65 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/bTagTwC_vBbVPGZJ8stsOIiI0K-bjsjALJyFGCubFSw_350x200_1x-0.jpg"
                        class="card-img-top" alt="Producto 2">
                    <div class="card-body d-flex flex-column ">
                        <h5 class="card-title fw-bold">Need for Speed™ Unbound</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$11.295,56 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/8voCRXS0M6Ow5zd1b99r6bkqEg5g-bmbkTnsPsQa-90_350x200_1x-0.jpg"
                        class="card-img-top" alt="Producto 3">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">WRC Generations</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$9614,31 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/ABl-o90RlpFaUBdw0Mu2IGA6RJj0b3N9DvoNn0lv7Aw_350x200_1x-0.jpeg"
                        class="card-img-top" alt="Producto 4">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Dirt 5</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$54.706,19 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-4">
                <div class="card">
                    <img src="https://products.eneba.games/resized-products/CRGCKz4FnlTLiWP45ZNJc0Lf67_u8t1FRKZAtijAI_s_350x200_1x-0.jpeg"
                        class="card-img-top" alt="Producto 5">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title fw-bold">Trackmania 2 Canyon</h5>
                        <p class="card-text">
                            Desde <span class="fw-bold">$21.334,22 ARS</span>
                        </p>
                        <div class="mt-auto d-flex flex-column gap-2">
                            <a href="#" class="btn btn-primary">Agregar al Carrito</a>
                            <a href="#" class="btn btn-primary">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
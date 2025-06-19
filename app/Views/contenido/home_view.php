<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

        <div class="carousel-item active">
            <div class="d-flex">
                <img src="https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2021/09/god-war-ragnarok-2466115.jpg"
                    class="img-fluid w-50" alt="God of War">
                <img src="https://live.staticflickr.com/65535/52441662842_0869ee2900_h.jpg" class="img-fluid w-50"
                    alt="God of War img">
            </div>
        </div>

        <div class="carousel-item active">
            <div class="d-flex">
                <img src="https://i.blogs.es/2e090b/the-last-of-us-part-ii-remastered-analisis/1366_2000.jpeg"
                    class="img-fluid w-50" alt="The Last of Us 2">
                <img src="https://blog.latam.playstation.com/uploads/sites/3/2024/12/3112e2dc99d6a7a6efd7ef5a73ca6a16089e50f1.jpg"
                    class="img-fluid w-50" alt="the last of us img">

            </div>
        </div>

        <div class="carousel-item">
            <div class="d-flex">
                <img src="https://i.blogs.es/fc72f2/maxresdefault/1366_2000.jpeg" class="img-fluid w-50" alt="Maxres">
                <img src="https://cdn.thewirecutter.com/wp-content/media/2022/03/elden-ring-2048px-0002.jpg?auto=webp&quality=75&width=1024"
                    class="img-fluid w-50" alt="elden ring">
            </div>
        </div>

        <div class="carousel-item">
            <div class="d-flex">
                <img src="https://static.bandainamcoent.eu/high/dragon-ball/dragon-ball-sparking-zero/01-news/dbsz-announcement-thumbnail.jpg"
                    class="img-fluid w-50" alt="Dragon Ball">
                <img src="https://static.bandainamcoent.eu/high/dragon-ball/dragon-ball-sparking-zero/01-news/dbsz_modesshowcase/dbsz_splitscreen.jpg"
                    class="img-fluid w-50" alt="pelea">
            </div>
        </div>

    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>

    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="contenido-principal">
    <div class="container my-5">
        <?php 
        $i = 0;
        foreach ($porCategoria as $categoria => $juegos): 
        ?>
        <!-- Contenedor de categoría -->
        <section class="mb-5">
            <h1 class="productos-populares text-center"><?= esc(ucfirst($categoria)) ?></h1>

            <div class="row g-4 justify-content-center">
                <?php 
                $contador = 0;
                foreach ($juegos as $row): 
                    if ($contador >= 10) break;
                    $contador++;
                ?>
                <div class="col-lg-2 col-md-4 text-center" style="min-width: 12rem; max-width: 12rem;">
                    <div class="card h-100 shadow">
                        <img src="<?= base_url('assets/uploads/' . $row['juego_imagen']) ?>" class="card-img-top"
                            alt="<?= esc($row['juego_nombre']) ?>">

                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title fw-bold"><?= esc($row['juego_nombre']) ?></h5>
                            <p class="card-text mb-2">
                                <span class="fw-bold">$<?= esc($row['juego_precio']) ?> ARS</span><br>
                                <span class="fw-bold"><?= esc($row['juego_plataforma']) ?></span>
                            </p>

                            <div class="mt-auto d-flex flex-column gap-2">
                                <?php if (!session('isLoggedIn')): ?>
                                <a href="<?= base_url('inicio') ?>" class="btn btn-primary">Comprar</a>
                                <?php elseif (session('perfil_id') == 2): ?>
                                <a href="<?= base_url('productos') ?>" class="btn btn-primary">Comprar</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        <?php 
        $i++;
        endforeach; 
        ?>
    </div>
</div>


<div class="container-fluid bg-light py-4">
    <h4 class="text-center mb-4">Medios de Pago Aceptados</h4>
    <div class="d-flex justify-content-center align-items-center flex-wrap gap-4 metodos-pago">


        <a href="https://www.mercadopago.com.ar/" target="_blank" rel="noopener noreferrer">
            <img src="https://logosdown.com/wp-content/uploads/2023/08/mercado-pago-logo-0.png" alt="Mercado Pago"
                height="50">
        </a>

        <a href="https://www.paypal.com/" target="_blank" rel="noopener noreferrer">
            <img src="https://st4.depositphotos.com/5225467/22068/v/950/depositphotos_220680152-stock-illustration-paypal-logo-printed-white-paper.jpg"
                alt="PayPal" height="50">
        </a>

        <a href="https://www.uala.com.ar/" target="_blank" rel="noopener noreferrer">
            <img src="https://logosenvector.com/logo/img/uala-37320.png" alt="Ualá" height="50">
        </a>

        <a href="https://www.naranjax.com/" target="_blank" rel="noopener noreferrer">
            <img src="https://pbs.twimg.com/profile_images/1874843514485313536/gwvgUPMu_400x400.jpg"
                alt="Tarjeta Naranja" height="50">
        </a>

        <a href="https://www.visa.com.ar/" target="_blank" rel="noopener noreferrer">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSDuG2a8C7eT3AI8CuUXTfYTVrCnuQ58CVyKQ&s"
                alt="Visa" height="50">
        </a>

        <a href="https://www.mastercard.com.ar/" target="_blank" rel="noopener noreferrer">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScdIpSmX8sayqToHS-O5sejmm0lR7XTiy74w&s"
                alt="Mastercard" height="50">
        </a>

    </div>
</div>
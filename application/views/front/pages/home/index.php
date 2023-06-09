<!--================Home Banner Area =================-->
<div class="jumbotron banner_area jumbotron-fluid" style="background-image:
    url(<?= base_url('img/banner_area/bg.jpg') ?>); ">
    <div class="container">
        <h1 class="display-4 my-auto text-dark text-center">Apa itu SiYukI ?????</h1>
    </div>
</div>
<!--================End Home Banner Area =================-->
<!-- Halaman awal-->
<div class="utama">
    <h3>SiYukI merupakan komunitas berbagi kepada kaum duafa dan fakir miskin. <br>Di dalam
        website ini
        anda bisa
        menemukan berbagai kegiatan sosial yang kami lakukan.
        Anda juga bisa bersedekah dan berpartisipasi bersama kami. Hubungi kontak yang tersedia dan raihlah berbagai
        macam manfaat sedekah.

    </h3>

</div>
<!-- Berita -->
<div class="last-news mt-5 mb-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col">
                <h2 class="text-center">Berita Terbaru</h2>
                <hr>
            </div>
        </div>
        <div class="row mt-4">
            <?php foreach ($berita as $b): ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="card" style="width: 15rem; height: 24rem;">
                    <img style="height:150px" src="<?= base_url('img/berita/thumbs/' . $b->photo) ?>"
                        class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $b->title ?>
                        </h5>
                        <p class="card-text">
                            <?= character_limiter($b->content, 50) ?>
                        </p>
                        <a href="<?= base_url("blog/baca/$b->seo_title") ?>" class="btn btn-info btn-sm">Lanjut
                            Membaca<i class="fa fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
        <div class="row mt-4">
            <div class="col text-center">
                <a href="<?= base_url('blog') ?>" class="btn btn-secondary text-light">Lihat
                    Selengkapnya<i class="fa fa-angle-double-right ml-2"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- End of Berita -->
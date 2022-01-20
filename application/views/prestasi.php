<div class="section-header my-4 py-4">
    <h2 class="fw-bold text-center">Prestasi</h2>
    <span class="d-flex justify-content-center text-center">Beberapa prestasi yang telah diraih oleh siswa-siswi SMP Yaspen Tugu Ibu 2</span>
</div>
<div class="container mt-3 mb-4 mx-auto">
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="loader"></div>
            <div class="content">
                    <div class="content-overlay"></div> <img class="img content-image" src="<?= base_url('assets/'); ?>/images/prestasi/Piagam Penghargaan Sekolah.jpeg" >
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Piagam Penghargaan Sekolah</h3>
                        <p class="content-text"><i class="fa fa-map-marker"></i> Depok</p>
                    </div>
                </div>
        </div>
         <div class="col-md-4 mb-5">
            <div class="content">
                    <div class="content-overlay"></div> <img class="img content-image" src="<?= base_url('assets/'); ?>/images/prestasi/Juara 1 Lomba Poomsae di Jakarta (2).jpeg">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Juara 1 Lomba Poomsae di Jakarta</h3>
                        <p class="content-text"><i class="fa fa-map-marker"></i> Jakarta</p>
                    </div>
                </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="content">
                    <div class="content-overlay"></div> <img class="img content-image" src="<?= base_url('assets/'); ?>/images/prestasi/Juara 2 Lomba Poomsae di Jakarta (1).jpeg">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Juara 2 Lomba Poomsae di Jakarta</h3>
                        <p class="content-text"><i class="fa fa-map-marker"></i> Jakarta</p>
                    </div>
                </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="content">
                    <div class="content-overlay"></div> <img class="img content-image" src="<?= base_url('assets/'); ?>/images/prestasi/Juara 1 Lomba Poomsae di Medan (2).jpeg">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Juara 1 Lomba Poomsae di Medan</h3>
                        <p class="content-text"><i class="fa fa-map-marker"></i> Medan</p>
                    </div>
                </div>
        </div>
        <div class="col-md-4 mb-5">
            <div class="content"> 
                    <div class="content-overlay"></div> <img class="img content-image" src="<?= base_url('assets/'); ?>/images/prestasi/Juara 1 Lomba Poomsae di Medan (1).jpeg">
                    <div class="content-details fadeIn-bottom">
                        <h3 class="content-title">Penyerahan Medali Juara 1 Lomba Poomsae di Medan</h3>
                        <p class="content-text"><i class="fa fa-map-marker"></i> Medan</p>
                    </div>
                </div>
        </div>
    </div>
</div>

<style>

.title {
    color: #1a1a1a;
    text-align: center;
    margin-bottom: 10px
}

.content {
    position: relative;
    width: 90%;
    max-width: 400px;
    margin: auto;
    overflow: hidden;
    display: none;
}

.content .content-overlay {
    background: rgba(0, 0, 0, 0.7);
    position: absolute;
    height: 99%;
    width: 100%;
    left: 0;
    top: 0;
    bottom: 0;
    right: 0;
    opacity: 0;
    -webkit-transition: all 0.4s ease-in-out 0s;
    -moz-transition: all 0.4s ease-in-out 0s;
    transition: all 0.4s ease-in-out 0s
}

.content:hover .content-overlay {
    opacity: 1
}

.content-image {
    display: block;
    width: 100%
}

.img {
    box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
    border-radius: 5px
}

.content-details {
    position: absolute;
    text-align: center;
    padding-left: 1em;
    padding-right: 1em;
    width: 100%;
    top: 50%;
    left: 50%;
    opacity: 0;
    -webkit-transform: translate(-50%, -50%);
    -moz-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-transition: all 0.3s ease-in-out 0s;
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out 0s
}

.content:hover .content-details {
    top: 50%;
    left: 50%;
    opacity: 1
}

.content-details h3 {
    color: #fff;
    font-weight: 500;
    letter-spacing: 0.15em;
    margin-bottom: 0.5em;
    text-transform: uppercase
}

.content-details p {
    color: #fff;
    font-size: 0.8em
}

.fadeIn-bottom {
    top: 80%
}
</style>

<!-- script loading nih -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
        $(window).on('load',function(){
            $(".loader").fadeOut(1000);
            $(".content").fadeIn(1000);
        });
    </script>
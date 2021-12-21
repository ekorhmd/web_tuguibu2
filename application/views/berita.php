<div class="container mt-3 mb-4">
    <div class="card-body">
        <h2 class="fw-bold text-center mb-4">Berita Sekolah</h2>
        <hr>

        <div class="row mb-4">
            <?php for ($i = 0; $i < 9; $i++) : ?>
                <div class="col-md-6">
                    <div class="card card-berita shadow-sm mb-4">
                        <div class="card-body">
                            <h3 class="row mx-0 text-theme mb-0">Judul Berita</h3>
                            <span class="text-theme" style="font-size: 14px;">2020/10/10</span>
                            <hr class="my-1">
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptas aut quod delectus? Iure neque iste reiciendis quo tempore cum soluta quaerat nemo ipsum magnam, cumque velit corporis, earum maxime odit... <a href="#" class="text-theme text-decoration-none stretched-link">read more</a></p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
        <ul class="pagination justify-content-center">
            <li class="page-item disabled"><a class="page-link mx-0" href="#">Previous</a></li>
            <li class="page-item active"><a class="page-link mx-0" href="#">1</a></li>
            <li class="page-item"><a class="page-link mx-0" href="#">2</a></li>
            <li class="page-item"><a class="page-link mx-0" href="#">3</a></li>
            <li class="page-item"><a class="page-link mx-0" href="#">Next</a></li>
        </ul>
    </div>
</div>
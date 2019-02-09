<div class="container content">
    <?php foreach ($film as $row) : ?>
        <div class='row'>

            <!-- Tempat gambar film -->
            <div class='col-md-2 mt-3'>
                <img src="<?= base_url('assets/img/' . $row['gambar']); ?>" class = "gambar">
            </div>

            <!-- Tempat judul, dll dari filmnya -->
            <div class='col-md-3 mt-3 tulisan' style='border-style:solid'>
                <span style='font-family:Anton;font-size:27px'><?= $row['Judul']; ?><br></span>
            </div>

            <div class='col-md-6 mt-3 tulisan' style='border-style:solid;margin-left:10px'>
                <?php foreach ($jadwal as $row2) : ?>
                    <?php if ($row2['id_film'] == $row['ID_Film']) : ?>
                        <!-- Menampilkan jadwal film-->
                        <div class="jadwal">
                        <button class="btn btn-primary">
                            <?= $row2['jam']; ?><br>
                            Rp   <?= $row2['harga']; ?>
                        </button>
                        </div>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
            <br>
        </div>
    <?php endforeach; ?>
    <br>
</div>
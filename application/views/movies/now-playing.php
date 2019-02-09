<div class="container content">
  <?php foreach ($film as $row) : ?>
    <div class="row">
  
      <!-- Tempat gambar film -->
      <div class="col-md-2 mt-3">
        <a href="#small-dialog">
          <img src="<?php echo base_url('assets/img/'. $row['gambar']) ; ?>" class="gambar">
        </a>
      </div>
      <div id="small-dialog" class="mfp-hide">
        <iframe src="<?php echo $row['trailer']; ?>" frameborder='0' allowfullscreen></iframe>
      </div>

      <!-- Tempat judul, dll dari filmnya -->
      <div class="col-md-8 tulisan">
        <a href=" <?php echo base_url('home/movie_detail/' . $row['ID_Film']); ?>"> 
          <span style='font-family:Anton;font-size:27px'>
          <?php echo $row['Judul']; ?> 
          <br></span>
        </a>
        Tipe : <?php echo $row['Tipe']; ?> <br>
        Batas Umur : <?php echo $row['Umur']; ?> <br>
        Genre : <?php echo $row['Genre']; ?><br>
        Durasi : <?php echo $row['Durasi']; ?> menit<br>
      </div>
    </div>
  <hr>
  <?php endforeach; ?>
</div>
<div class="container content">
  <?php foreach ($film as $row) : ?>
    <div class="row">
  
      <!-- Tempat gambar film -->
      <div class="col-md-2 mt-3">
        <!-- <a href="#small-dialog"> -->
          <img src="<?php echo base_url('assets/img/'. $row['gambar']) ; ?>" class="gambar">
        <!-- </a> -->
      </div>

    <!-- Tempat judul, dll dari filmnya -->
    <div class='col-md-5 tulisan'>
      <a href = "<?php echo base_url('home/movie_detail/' . $row['ID_Film']); ?>"> 
        <span style='font-family:Anton;font-size:27px'><?= $row['Judul']?><br></span>
      </a>
      Tipe : <?= $row['Tipe']?> <br>
      Batas Umur : <?= $row['Umur']?> <br>
      Genre : <?=$row['Genre']?><br>
      Durasi : <?=$row['Durasi']?>menit <br>
    </div>

    <div class="col-md-3" >
      <br><br>
      <div class="coming-soon">
      <span style='color:blue'>COMING SOON</span>
      
      </div>
    </div>
    
  </div>
  <hr>
  <?php endforeach;?>
</div>
</body>

</html>

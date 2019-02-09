<div class="container content">
    <div class = 'row'>
      <div class = 'col-md-12 mt-3' style='text-align:center;background:yellow'>        
        <span style='text-transform:uppercase;font-family:Anton;font-size:30px'> <?= $film['Judul']?></span>        
      </div>
    </div>
    <br>
    <div class = 'row'>
      
      <div class='col-md-3'>
        <img src="<?php echo base_url('assets/img/').$film['gambar']; ?>"  class = 'gambar' style='height:400px;width:300px'>
        <div class ='clearfix'></div>
      </div>

      <div class='col-md-9 tulisan'>
        <div style='margin-left:30px'>
          Tipe : <?php echo $film['Tipe']; ?> <br>
          Batas Umur : <?php echo $film['Umur']; ?> <br>
          Genre : <?php echo $film['Genre']; ?><br>
          Durasi : <?php echo $film['Durasi']; ?> menit<br>
        </div>
        <br>
        <div style='margin-left:300px;width:230px;text-align:center'>
          <a class="play-icon popup-with-zoom-anim video" href="#small-dialog"  >
            WATCH TRAILER
          </a>
        </div>

        <div style='margin-left:30px'>
          <span style='font-weight:bold;font-size:30px'>Sinopsis</span>
          <br>
          <?php echo $film['sinopsis'];?>
        </div>
      </div>
      <div id="small-dialog" class="mfp-hide">
        <iframe src="<?php echo $film['trailer'];?>" frameborder='0' allowfullscreen></iframe>
      </div>
    </div>
  <br>
</div>

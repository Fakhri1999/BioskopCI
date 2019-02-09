<div class="container" style='background:rgba(255, 255, 255, 0.47)' ;>
    <br>
    <span style = "text-transform:uppercase;font-weight:bold">HASIL PENCARIAN : <?php echo $_GET['keyword'];?> </span>
    <br>
    <br>
    <?php foreach ($film as $row) : ?>
        <div class='row kotak'>

            <!-- Tempat gambar film -->
            <div class='col-md-2 mb-3'>
            <img src="<?php echo base_url('assets/image/'.$row['gambar']);?>" class = "gambar">
            </div>

            <!-- Tempat judul, dll dari filmnya -->
            <div class='col-md-10 tulisan'>
            <a href=" <?php echo site_url('home/index/' . $row['ID_Film']); ?>">
                <span style='font-family:Anton;font-size:27px'> <?php echo $row['Judul']; ?><br></span>
            </a>
            <span style='font-size:15px'> <?php echo $row['Genre'];?><br></span>
            </div>

        </div>
<?php endforeach;?>
</div>

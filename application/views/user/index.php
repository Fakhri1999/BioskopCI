<?php
$jk;
if($user['jenis_kelamin'] == "L")
    $jk = "Laki-laki";
else if($user['jenis_kelamin'] == "P")
    $jk = "Perempuan";
?>
<div class="container content">
    <div class="row">
        <div class="col-md-3 mt-3 mb-3">
            <img src="<?php echo base_url('assets/img/user.png');?>" width="250px" height="250px">
            <div class="clearfix"></div>
        </div>

        <div class="col-md-9 mt-3 mb-3 text-white">
            <h2>Account Detail</h2>
            Full Name       : <?= $user['nama'];?><br>
            Username        : <?= $user['username'];?><br>
            Email           : <?= $user['email'];?><br>
            Jenis Kelamin   : <?= $jk;?><br>
            Alamat          : <?= $user['alamat'];?><br>
            No Telepon      : <?= $user['no_telp'];?><br>
            Saldo           : Rp <?= $user['saldo'];?><br><br>
            <a href="<?= base_url('user/edit');?>" class="btn btn-success">Edit Account</a><br>
        </div>
    </div>
</div>
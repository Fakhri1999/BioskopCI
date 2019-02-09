<div class="container content">
    <div class="row">
        <div class="form mt-3 tulisan">
            <h1> Edit Account</h1>
            <form action="<?= base_url('user/edit_validation');?>" method="POST">
                <div class="hitam">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="fullname" value="<?= $user['nama'];?>">
                        <small class="form-text text-danger"><?php echo form_error('fullname');?></small>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username" value="<?= $user['username'];?>">
                        <small class="form-text text-danger"><?php echo form_error('username');?></small>
                    </div>                    
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?= $user['email'];?>">
                        <small class="form-text text-danger"><?php echo form_error('email');?></small>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenisKelamin" id="jenisKelamin">
                        <?php foreach ($jeniskel as $jns):?>
                            <?php if ($mhs['jurusan'] == $jrs):?>
                                <option value="<?php echo $jrs;?>" selected><?php echo $jrs;?></option>
                            <?php else:?>
                                <option value="<?php echo $jrs;?>"><?php echo $jrs;?></option>
                            <?php endif;?>
                        <?php endforeach;?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?= $user['email'];?>">
                        <small class="form-text text-danger"><?php echo form_error('email');?></small>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?= $user['email'];?>">
                        <small class="form-text text-danger"><?php echo form_error('email');?></small>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" class="form-control" name="email" value="<?= $user['email'];?>">
                        <small class="form-text text-danger"><?php echo form_error('email');?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </form>  
        </div>
    </div>
</div>
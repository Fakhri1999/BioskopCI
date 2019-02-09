<div class="container content">
    <br>
    <div class="form">
        <div class="card text-center">
            <h5 class="card-header">Register</h5>
            <div class="card-body">
                <form action="<?= base_url('login/register_validation');?>" method="POST">
                    <div class="hitam">
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" class="form-control" name="fullname">
                        <small class="form-text text-danger"><?php echo form_error('fullname');?></small>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name="username">
                        <small class="form-text text-danger"><?php echo form_error('username');?></small>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email">
                        <small class="form-text text-danger"><?php echo form_error('email');?></small>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="jenisKelamin" id="jenisKelamin">
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" class="form-control" name="password">
                        <small class="form-text text-danger"><?php echo form_error('password');?></small>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password</label>
                        <input type="password" class="form-control" name="passconf">
                        <small class="form-text text-danger"><?php echo form_error('passconf');?></small>
                    </div>
                    <a href="#"><button type="submit" class="btn btn-primary">Register</button></a>
                    <small class="form-text text-muted">Already have an account? <a href="<?= base_url('login');?>">Login here</a></small> 
                    </div>
                </form>                
            </div>
        </div>
    </div>
    <br>

</div>
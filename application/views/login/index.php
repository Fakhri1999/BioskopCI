<div class="container content">
    <br>
    <?php if ($this->session->flashdata('error')):?>
        <?php echo
            "<script> window.location.href='" . base_url('login') . "';
            alert('" . $this->session->flashdata('error') . "');</script>";
        ?>
    <?php endif;?>
    <div class="form">
        <div class="card text-center">
            <h5 class="card-header">Login</h5>
            <div class="card-body">
                <form action="<?= base_url('login/login_validation');?>" method="POST">
                    <div class="hitam">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username">
                            <small class="form-text text-danger"><?php echo form_error('username');?></small>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                            <small class="form-text text-danger"><?php echo form_error('password');?></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <small class="form-text text-muted">Forgot your username or password? <a href="">Click here</a></small> 
                        <small class="form-text text-muted">Dont have an account? <a href="<?= base_url('login/register');?>">Register here</a></small> 
                    </div>
                </form>                
            </div>
        </div>
    </div>
    <br>

</div>
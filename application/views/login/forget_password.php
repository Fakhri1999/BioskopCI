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
            <h5 class="card-header">Forget Password</h5>
            <div class="card-body">
                <form action="<?= base_url('login/login_validation');?>" method="POST">
                    <div class="hitam">
                        <div class="form-group">
                            <label>Enter your username</label>
                            <input type="text" class="form-control" name="username">
                            <small class="form-text text-danger"><?php echo form_error('username');?></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>                
            </div>
        </div>
    </div>
    <br>

</div>
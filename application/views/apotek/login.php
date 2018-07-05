<?php $this->load->view('layouts/base_start')?>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
        <?php echo form_open('Login/login'); ?>
                <center>
                <legend>
                    <strong><big>LOGIN or </big></strong>
                    <a href=#><strong><big>SIGN UP </big></strong>
                </legend>
                </center>
                <div class="input-group">
					<span class="input-group-addon"><img class="image" border="0" src="assets/image/login.png" width="12px" height="13px"></span>
					<input type="text" class="form-control" name="username" placeholder="Username">
				</div>
                <span class="help-block"></span>
                <div class="input-group">
					<span class="input-group-addon"><img class="image" border="0" src="assets/image/login.png" width="12px" height="13px"></span>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>
					<span class="help-block"></span>
                <button type="submit" class="btn btn-primary">Login</button>
                <button type="submit" class="btn btn-danger">Batal</button>
            </form>
            <?php echo form_close() ?>
        </div>
    </div>
</div>


<?php $this->load->view('layouts/base_end') ?>

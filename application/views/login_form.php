<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SevenKos | Login Page</title>
        <link href="<?php echo base_url()?>/assets/css/index.css" rel="stylesheet">
    </head>

    <body>
    <section>
            <div class="imgBx">
                <img src="<?php echo base_url()?>assets/images/bg.jpg">
            </div>
            <div class="contentBx">
                <div class="formBx">
                    <h1>SevenKos</h1>
                    <h2>Login</h2>
					<br>
                    <form id="sign_in" method="POST" action="<?php echo base_url() ?>Login/proses_login">

                        <div class="inputBx">
                            <?php if (isset($_GET['error'])) { ?>
			                <p class="error"><?php echo $_GET['error']; ?></p>
		                    <?php } ?>
                        </div>

                        <div class="inputBx">
                            <span>Email</span>
                            <input type="text" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>

                        <div class="inputBx">
                            <span>Password</span>
                            <input type="password" class="form-control" name="password" placeholder="Password" required>
                        </div>

                        <div class="inputBx">
                            <?php echo $this->session->flashdata('suksesdaftar');?>
                            <?php echo $this->session->flashdata('notif');?>
                        </div>
                            <br>

                        <div class="inputBx">
                            <input type="submit" value="Sign in" name="">
                        </div>

                        <div class="inputBx">
                            <p>Don't have an account? <a href="<?php echo base_url();?>Main_Back_User/daftar_user">Sign up</a></p>
                        </div>

                        <div class="inputBx">
                            <p>New here? <a href="<?php echo base_url();?>Main_Front_User">Main page</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
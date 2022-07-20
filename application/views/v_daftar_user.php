<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SevenKos | Register Page</title>
        <link href="<?php echo base_url()?>/assets/css/index2.css" rel="stylesheet">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    </head>

    <body>
        <section>
            <div class="imgBx">
            <img src="<?php echo base_url()?>assets/images/bg.jpg">
            </div>
            <div class="contentBx">
                <div class="formBx">
                    <h1>SevenKos</h1>
                    <h2>Sign up</h2>
                    <form id="sign_up" method="POST" action="<?php echo base_url()?>Main_Back_User/proses_daftar_user">
						<div class="inputBx">
                            <?php if (isset($_GET['error'])) { ?>
			                    <p class="error"><?php echo $_GET['error']; ?></p>
		                    <?php } ?>
                            <?php if (isset($_GET['sucess'])) { ?>
			                    <p class="sucess"><?php echo $_GET['sucess']; ?></p>
		                    <?php } ?>
                        </div>
                        <div class="inputBx">
                            <span>Username</span>
                            <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                        </div>
                        <div class="inputBx">
                            <span>Fullname</span>
                            <input type="text" class="form-control" name="fullname" placeholder="Fullname" required autofocus>
                        </div>
                        <div class="inputBx">
                            <span>Email</span>
                            <input type="email" class="form-control" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-check">
                        <input name="jk" type="radio" class="form-check-input" id="radio_3" value="Pria" />
                                <label for="radio_3">Pria</label>
                                <input name="jk" type="radio" id="radio_4" class="with-gap" value="Wanita"/>
                                <label for="radio_4">Wanita</label>
                        </div>
                        <div class="inputBx">
                            <span>Password</span>
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                        </div>
                        <div class="inputBx">
                            <span>Confirm Password</span>
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                        <div class="inputBx">
                            <span>Telephone Number</span>
                            <input type="text" class="form-control" name="no_hp" placeholder="No HP" required autofocus>
                        </div>
                        <div class="inputBx">
                            <span>Address</span>
                            <input type="text" class="form-control" placeholder="Alamat" name="alamat">
                        </div>
                        <div class="inputBx">
                        <select class="form-control show-tick" name="id_role" required>
                            <option value="2">Customer</option>
                            <option value="3">Owner</option>
                        </select>
                        </div>
                        <br>
                        <div class="inputBx">
                            <input type="submit" value="Sign up" name="">
                        </div>
                        <div class="inputBx">
                            <p>Already have an account? <a href="<?php echo base_url()?>Login">Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
</html>
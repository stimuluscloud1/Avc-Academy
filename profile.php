
<?php include('header.php'); ?>
<div class="page-header page-header_align_center" style="background-image: url(http://iguru.wgl-demo.net/wp-content/uploads/2019/10/page-title_default.jpg); background-size:cover; background-repeat:no-repeat; background-attachment:scroll; background-position:bottom center;background-color: #00bda6; height: 530px; margin-bottom: 40px; padding-top: 82px; padding-bottom: 0px;"><div class="page-header_wrapper"><div class="wgl-container"><div class="page-header_content"><h1 class="page-header_title" style="color: #ffffff; font-size: 48px; line-height: 72px;">Profile</h1><div class="page-header_breadcrumbs" style="color: #ffffff; font-size: 16px; line-height: 24px;"><div class="breadcrumbs"><a href="http://iguru.wgl-demo.net/" class="home">Home</a> <span class="divider"></span> <span class="current">Profile</span></div><!-- .breadcrumbs --></div></div></div></div></div>    <main id="main"><div class="wgl-container">
<div class="row">
<div id='main-content' class="wgl_col-12">
<div class="learnpress">
<div id="learn-press-user-profile" class="lp-user-profile guest">
<div class="learn-press-form-login learn-press-form">
<h3>Login</h3>
<form name="learn-press-login" method="post" action="">
<ul class="form-fields">
<li class="form-field">
<div class="rwmb-field rwmb-text-wrapper "><div class="rwmb-field rwmb-text-wrapper ">
<label for="username">Username or email</label>
</div><div class="rwmb-field rwmb-text-wrapper "><input  size="30" placeholder="Username or email" type="text" required id="username" class="rwmb-field rwmb-text-wrapper " name="username"></div><input type="hidden" class="rwmb-field rwmb-text-wrapper " value="username" /><div class="rwmb-field rwmb-text-wrapper "></div></div>                </li>
<li class="form-field">
<div class="rwmb-field rwmb-password-wrapper "><div class="rwmb-field rwmb-password-wrapper ">
<label for="password">Password</label>
</div><div class="rwmb-field rwmb-password-wrapper "><input  size="30" placeholder="Password" type="password" required id="password" class="rwmb-field rwmb-password-wrapper " name="password"></div><input type="hidden" class="rwmb-field rwmb-password-wrapper " value="password" /><div class="rwmb-field rwmb-password-wrapper "></div></div>                </li>
</ul>
<p>
<label>
<input type="checkbox" name="rememberme"/>
Remember me            </label>
</p>
<p>
<input type="hidden" name="learn-press-login-nonce"
value="a22b213bdb">
<button type="submit">Login</button>
</p>
<p>
<a href="http://iguru.wgl-demo.net/my-account/lost-password/">Lost your password?</a>
</p>
</form>
</div>
<div class="learn-press-form-register learn-press-form">
<h3>Register</h3>
<form name="learn-press-register" method="post" action="">
<ul class="form-fields">
<li class="form-field">
<div class="rwmb-field rwmb-text-wrapper "><div class="rwmb-field rwmb-text-wrapper ">
<label for="reg_username">Username</label>
</div><div class="rwmb-field rwmb-text-wrapper "><input  size="30" placeholder="Username" type="text" required id="reg_username" class="rwmb-field rwmb-text-wrapper " name="reg_username"></div><input type="hidden" class="rwmb-field rwmb-text-wrapper " value="reg_username" /><div class="rwmb-field rwmb-text-wrapper "></div></div>                </li>
<li class="form-field">
<div class="rwmb-field rwmb-email-wrapper "><div class="rwmb-field rwmb-email-wrapper ">
<label for="reg_email">Email</label>
</div><div class="rwmb-field rwmb-email-wrapper "><input  size="30" placeholder="Email" type="email" required id="reg_email" class="rwmb-field rwmb-email-wrapper " name="reg_email"></div><input type="hidden" class="rwmb-field rwmb-email-wrapper " value="reg_email" /><div class="rwmb-field rwmb-email-wrapper "></div></div>                </li>
<li class="form-field">
<div class="rwmb-field rwmb-password-wrapper "><div class="rwmb-field rwmb-password-wrapper ">
<label for="reg_password">Password</label>
</div><div class="rwmb-field rwmb-password-wrapper "><input  size="30" placeholder="Password" type="password" required id="reg_password" class="rwmb-field rwmb-password-wrapper " name="reg_password"><p id="reg_password-description" class='description'>The password should be at least twelve characters long. To make it stronger, use upper and lower case letters, numbers, and symbols like ! " ? $ % ^ & )</p></div><input type="hidden" class="rwmb-field rwmb-password-wrapper " value="reg_password" /><div class="rwmb-field rwmb-password-wrapper "></div></div>                </li>
</ul>
<p>
<input type="hidden" id="learn-press-register-nonce" name="learn-press-register-nonce" value="0ac0b4c847" /><input type="hidden" name="_wp_http_referer" value="/profile/" />            <button type="submit">Register</button>
</p>
</form>
</div>
</div></div>
</div>
</div>
</div>
	</main>
    
    
    <?php include('footer.php'); ?>
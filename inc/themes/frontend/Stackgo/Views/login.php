<div class="register-page-form">
    <form class="actionForm" name="signinform" action="<?php _ec( base_url("auth/login") )?>" data-redirect="<?php _ec( base_url("dashboard") )?>" class="row sign-in-form">
        <!-- Google Button -->
        <div class="mb-3 d-flex" style="justify-content: center">
            <a href="<?php _ec( base_url() )?>"><img class="img-fluid" src="<?php _ec( get_option("website_logo_color", base_url("assets/img/logo-color.svg")) )?>" alt="logo-image"></a>
        </div>
        <?php if ( get_option('google_login_status', 0) ): ?>
        <div class="col-md-12">
            <a  href="<?php _ec( base_url("login/google") )?>" class="btn btn-google ico-left">
                <img src="images/png_icons/google.png" alt="google-icon"> <?php _e("Login with Google")?>
            </a>
        </div>

        <!-- Login Separator -->
        <div class="col-md-12 text-center">
            <div class="separator-line">Or, sign in with your email</div>
        </div>
        <?php endif ?>
        <!-- Form Input -->
        <div class="col-md-12">
            <p class="p-sm input-header">Userqqname</p>
            <input class="form-control email" type="text" name="username" placeholder="<?php _e("Enter username or email")?>">
        </div>

        <!-- Form Input -->
        <div class="col-md-12">
            <p class="p-sm input-header">Password</p>
            <div class="wrap-input">
                <span class="btn-show-pass ico-20"><span class="flaticon-visibility eye-pass"></span></span>
                <input class="form-control password" type="password" name="password" placeholder="* * * * * * * * *">
            </div>
        </div>
        <div class="show-message mb-2" style="font-size: 16px"></div>

        <div class="col-md-12">
            <div class="reset-password-link">
                <p class="p-sm"><a href="<?php _ec( base_url("forgot_password") )?>" class="color--theme"><?php _e("Forgot your password?")?></a></p>
            </div>
        </div>
        <div class="form-group col-md-12 form-check">
            <input type="checkbox" class="form-check-input" id="remember" name="remember">
            <label class="form-check-label ps-1" for="remember"><?php _e("Remember Me")?></label>
        </div>
        <!-- Form Submit Button -->
        <div class="col-md-12">
            <button type="submit" class="btn btn--theme hover--theme submit"><?php _e("Login")?></button>
        </div>

        <!-- Sign Up Link -->
        <div class="col-md-12">
            <p class="create-account text-center">
                <?php if ( get_option("signup_status", 1) ): ?>
                    <?php _e("Don't have an account?")?>  <a href="<?php _ec( base_url("signup") )?>" class="color--theme"><?php _e("Sign Up")?></a>
                <?php endif ?>
            </p>
        </div>

    </form>
</div>
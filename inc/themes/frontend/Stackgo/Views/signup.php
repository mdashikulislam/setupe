<div class=" register-page-form">
	<div class="">
        <div class="mb-3 mt-3 d-flex" style="justify-content: center">
            <a href="<?php _ec( base_url() )?>"><img class="img-fluid" src="<?php _ec( get_option("website_logo_color", base_url("assets/img/logo-color.svg")) )?>" alt="logo-image"></a>
        </div>
        <form class="actionForm" action="<?php _ec( base_url("auth/signup") )?>" data-redirect="<?php _ec( base_url("login") )?>" method="POST">
			<div class="row">
				<div class="section-title m-0">
					<span class="sub-title"><?php _e("Welcome")?></span>
					<h2 class="title"><?php _e("Sign up")?></h2>
					<p class=""><?php _e("Let's get your account set up")?></p>
				</div>
			  	<div class="form-group col-md-12">
			    	<input type="text" class="form-control email" name="fullname" placeholder="<?php _e("Fullname")?>" value="<?php _ec( post("fullname") )?>">
			    	<span class="focus-border"></span>
			  	</div>
			  	<div class="form-group col-md-12">
			    	<input type="text" class="form-control" name="username" placeholder="<?php _e("Enter username")?>">
			    	<span class="focus-border"></span>
			  	</div>
			  	<div class="form-group col-md-12">
			    	<input type="text" class="form-control" name="email" placeholder="<?php _e("Enter email")?>" value="<?php _ec( post("email") )?>">
			    	<span class="focus-border"></span>
			  	</div>
			  	<div class="form-group col-md-12">
			    	<input type="password" class="form-control" name="password" placeholder="<?php _e("Password")?>">
			    	<span class="focus-border"></span>
			  	</div>
			  	<div class="form-group col-md-12">
			    	<input type="password" class="form-control" name="confirm_password" placeholder="<?php _e("Confirm Password")?>">
			    	<span class="focus-border"></span>
			  	</div>
			  	<div class="form-group col-md-12">
			  		<select name="timezone" class="form-control form-select auto-select-timezone">
			  			<option value=""><?php _e("Select timezone")?></option>
                    	<?php foreach ( tz_list() as $key => $value): ?>
                    		<option value="<?php _e( $key ) ?>" <?php _e( get_user("timezone")==$key?"selected":"" )?> ><?php _e( $value )?></option>
                    	<?php endforeach ?>
                    </select>
                </div>
			  	<div class="form-group col-md-12 form-check mx-3">
			    	<input type="checkbox" class="form-check-input" id="agree_terms" name="agree_terms">
			    	<label class="form-check-label ps-1" for="agree_terms"><?php _e("Accept Terms & Conditions")?></label>
			  	</div>
			  	<?php if(get_option('google_recaptcha_status', 0)){?>
				<div class="g-recaptcha  mb-3" data-sitekey="<?=get_option('google_recaptcha_site_key', '')?>"></div>
		    	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
				<?php }?>
			  	<div class="show-message mb-2"></div>
			  	<div class="col-md-12">
			    	<button type="submit" class="btn btn--theme hover--theme submit mb-3"><?php _e("Sign up")?></button>
			  	</div>
			  	<div class="col-md-12">
			    	<hr>
			    	<p class="create-account text-center"><?php _e("Already have an account?")?> <a class="color--theme" href="<?php _ec( base_url("login") )?>"> <?php _e("Login")?></a></p>
			  	</div>
			</div>
		</form>
	</div>
</div>
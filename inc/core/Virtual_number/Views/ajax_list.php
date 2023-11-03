

<?php if ( !empty($result) ){ ?>
	
	<?php foreach ($result as $key => $value): ?>
		  <?php if ($value->status==0){ ?>
	 <script>
        // Given timestamp in seconds from PHP (use time() to get the current timestamp)
       const timestamp<?php echo $value->id ?> = <?php echo $value->created ?>;

        // Calculate expiration time in seconds (15 minutes = 15 * 60)
        const expirationTime<?php echo $value->id ?> = timestamp<?php echo $value->id ?> + 15 * 60;

        // Function to update the timer
        function updateTimer<?php echo $value->id ?>() {
            const currentTime = Math.floor(Date.now() / 1000); // Convert to seconds
            
            if (currentTime < expirationTime<?php echo $value->id ?>) {
                const timeRemaining = expirationTime<?php echo $value->id ?> - currentTime;
                const minutesRemaining = Math.floor(timeRemaining / 60);
                const secondsRemaining = Math.floor(timeRemaining % 60);

                const timerElement = document.getElementById("timer<?php echo $value->id ?>");
                timerElement.textContent = `Time left: ${minutesRemaining}m ${secondsRemaining}s`;

                // Call the function again after 1 second
                
                setTimeout(updateTimer<?php echo $value->id ?>, 1000);
                
                 
            } else {
                const timerElement = document.getElementById("timer<?php echo $value->id ?>");
                timerElement.textContent = "Expired";
               location.reload();
            }
           
        }

        // Call updateTimer initially
        updateTimer<?php echo $value->id ?>()
    </script>
  
		<?php }?>
		
		<div class="item col-md-6 col-sm-12 mb-4">
            <div class="card b-r-10">
                <div class="card-body position-relative p-r-50">
                    <?php if ($value->status==2){ ?>
                    <i class="fad fa-phone fs-90 position-absolute text-danger opacity-25 r-30"></i>
                    <?php  } ?>
                    <?php if ($value->status==1){ ?>
                    <i class="fad fa-phone fs-90 position-absolute text-success opacity-25 r-30"></i>
                    <?php  }else{ ?>
                      <i class="fad fa-phone fs-90 position-absolute text-warning opacity-25 r-30"></i>
                       <?php  } ?>
                    <div class="mb-3">
                        <?php if ($value->status==0){ ?>
                        <h5 class="text-danger" id="timer<?php _e($value->id)?>"></h5>
                        
                        <?php } ?>
                        
                        <h3 class="text-dark"><?php _e("(+".$value->timeofpanding.")".$value->phone)?></h3><?php _e($value->name)?>
                         <div><?php _e($value->params)?></div>
                        
                    </div>
                    <div class="d-flex">
                        <?php if ($value->status==0||$value->messgaeint==1){ ?>
                        <a href="<?php _e( get_module_url() )?>" class="btn btn-sm btn-dark w-35 h-35 text-center d-flex align-items-center me-2 position-relative"><i class="position-absolute l-11 fs-14 fal  fa-repeat fa-spin-pulse"></i></a>
                           <?php  } ?>
                            <?php if ($value->status==1){ ?>
                        <a  class="btn btn-sm btn-success w-35 h-35 text-center d-flex align-items-center me-2 position-relative"><i class="position-absolute l-11 fs-14 fal  fa-badge-check"></i></a>
                           <?php  } ?>
                        <?php if ($value->status==2){ ?>
                        
                        <a href="<?php _e( get_module_url("delete/".$value->ids) )?>" class="btn btn-sm btn-danger w-35 h-35 text-center d-flex align-items-center me-2 position-relative actionItem" data-confirm="<?php _e('Are you sure to delete this items?')?>" data-call-success="Core.ajax_pages();"><i class="position-absolute l-11 fs-14 fal fa-trash-alt"></i></a>
                        
                        <?php  } ?>
                    </div>
                </div>
            </div>
        </div>
<?php if ($value->status==0){ ?>
<script>

    setTimeout(function() {
  location.reload();
}, 60000); // 60 seconds in milliseconds

</script>
<?php  } ?>
	<?php endforeach ?>
	  
<?php }else{ ?>
	<div class="mw-400 container d-flex align-items-center align-self-center h-100 py-5">
	    <div>
	        <div class="text-center px-4">
	            <img class="mw-100 mh-300px" alt="" src="<?php _e( get_theme_url() ) ?>Assets/img/empty.png">
	        </div>
	    </div>
	</div> 
<?php }?>

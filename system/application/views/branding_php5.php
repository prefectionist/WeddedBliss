				<?php if ( !empty ($branding['logoimage']) ) { ?>
					<div class="logo-container">
						<?php
							//full color or solid white logo
							if ( substr(uri_string(), 1) == 'contact' ) { 
								$logo_image = str_replace("_logo", "_logo_white", $branding['logoimage']); 
							} else {
								$logo_image = $branding['logoimage'];
							} 
						?>
						<img src="<?php echo base_url(), 'assets/img/logos/', $logo_image; ?>" alt="<?php echo $branding['agency']; ?>">
					</div>
					<p><?php echo $branding['agency']; ?></p>
				<?php } else { ?>
					<h3><?php echo $branding['agency']; ?></h3>
				<?php } ?>
				<?php if ( !empty($branding['address']) ) { ?>
					<p><?php echo $branding['address']; ?></p>
				<?php } ?>
				<?php //email
					if ( !empty($branding['email']) ) { 
						if (filter_var($branding['email'], FILTER_VALIDATE_EMAIL) === FALSE) { 
							$email_bits = explode ('@', $branding['email'] ); ?>
						<p><a href="mailto:<?php echo $branding['email']; ?>">
							<?php echo $email_bits[0] . "<br>@" . $email_bits[1]; ?>
						</a></p>
				<?php	}
					}
				?>
				<?php if ( !empty($branding['phone']) ) { ?>
					<p><?php echo $branding['phone']; ?></p>
				<?php } ?>
				<?php //website
					if ( !empty($branding['website']) ) { 
						if (filter_var($branding['website'], FILTER_VALIDATE_URL) === FALSE) { 
				?>
					<p><a href="<?php echo $branding['website']; ?>"><?php echo $branding['website']; ?></a></p>
				<?php 	}
					}
				?>
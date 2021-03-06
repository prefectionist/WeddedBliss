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
						<img src="<?php echo base_url(), 'assets/img/logos/', $logo_image; ?>" alt="<?php echo replacer($branding['agency']); ?>">
					</div>
					<div class="brand-info-container">
						<p><?php echo replacer($branding['agency']); ?></p>
				<?php } else { ?>
					<div class="brand-info-container">
						<h4><?php echo replacer($branding['agency']); ?></h4>
				<?php } ?>
				<?php if ( !empty($branding['address']) ) { ?>
						<p><?php echo $branding['address']; ?></p>
				<?php } ?>
				<?php //email
					if ( !empty($branding['email']) ) { 
						$br = ( strlen($branding['email']) > 25 ) ? '<br>' : '';
							$email_bits = explode ('@', $branding['email'] ); ?>
							<p><a href="mailto:<?php echo $branding['email']; ?>">
								<?php echo $email_bits[0] . $br . "@" . $email_bits[1]; ?>
							</a></p>
				<?php	
					}
				?>
				<?php if ( !empty($branding['phone']) ) { ?>
						<p><?php echo $branding['phone']; ?></p>
				<?php } ?>
				<?php //website
					if ( !empty($branding['website']) ) {
						$website = str_replace("http://", "", $branding['website']);
				?>
						<p><a href="http://<?php echo $website; ?>"><?php echo $website; ?></a></p>
				<?php
					}
				?>
					</div>
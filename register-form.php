<?php
/*
If you would like to edit this file, copy it to your current theme's directory and edit it there.
Theme My Login will always look in your theme's directory first, before using this default template.
*/
?>
<div class="tml tml-register" id="theme-my-login<?php $template->the_instance(); ?>">
	
	<?php $template->the_errors(); ?>
	
	<form name="registerform" id="registerform<?php $template->the_instance(); ?>" action="<?php $template->the_action_url( 'register', 'login_post' ); ?>" method="post">
		<?php if ( 'email' != $theme_my_login->get_option( 'login_type' ) ) : ?>
		<!-- <p class="tml-user-login-wrap"> -->
			<?php
			include 'connect.php';
			$sql="SELECT ID FROM wp_users ORDER BY id DESC LIMIT 1";
			$id='edu-';
			$resu=mysqli_query($con,$sql);
			while($row=mysqli_fetch_array($resu)){
				$id.=$row['ID'];
			}
//echo $id;
			?>
			<label style="display: none;" for="user_login<?php $template->the_instance(); ?>"><?php _e( 'Username', 'theme-my-login' ); ?></label>
			<input type="text" name="user_login" id="user_login<?php $template->the_instance(); ?>" class="input" value="<?php echo $id;?>" size="20" disabled="disabled" style="display: none;" />
		</p>
		<?php endif; ?>
		<p>
	<label for="first_name<?php $template->the_instance(); ?>"><?php _e( 'Nume', 'theme-my-login' ) ?></label>
	<input type="text" name="first_name" id="first_name<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'first_name' ); ?>" size="20" tabindex="20" />
</p>
<p>
	<label for="last_name<?php $template->the_instance(); ?>"><?php _e( 'Prenume', 'theme-my-login' ) ?></label>
	<input type="text" name="last_name" id="last_name<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'last_name' ); ?>" size="20" tabindex="20" />
</p>

		<p class="tml-user-email-wrap">
			<label for="user_email<?php $template->the_instance(); ?>"><?php _e( 'E-mail', 'theme-my-login' ); ?></label>
			<input type="email" name="user_email" id="user_email<?php $template->the_instance(); ?>" class="input" value="<?php $template->the_posted_value( 'user_email' ); ?>" size="20" required/>
		</p>

		<p class="tml-user-login-wrap">
			<label for="user_email<?php $template->the_instance(); ?>"><?php _e( 'Oras', 'theme-my-login' ); ?></label>
<!-- <input type="text" name="user-Oras" id="user_Oras" class="input" value="" size="20" required/> -->
<select>
	<option value="ALBA">ALBA</option>
	<option value="ARAD">ARAD</option>
	<option value="ARGES">ARGES</option>
	<option value="BACAU">BACAU</option>
	<option value="BIHOR">BIHOR</option>
	<option value="BISTRITA-NASAUD">BISTRITA-NASAUD</option>
	<option value="BOTOSANI">BOTOSANI</option>
	<option value="BRAILA">BRAILA</option>
	<option value="BRASOV">BRASOV</option>
	<option value="BUCURESTI">BUCURESTI</option>
	<option value="BUZAU">BUZAU</option>
	<option value="CALARASI">CALARASI</option>
	<option value="CARAS-SEVERIN">CARAS-SEVERIN</option>
	<option value="CLUJ">CLUJ</option>
	<option value="CONSTANTA">CONSTANTA</option>
	<option value="COVASNA">COVASNA</option>
	<option value="DAMBOVITA">DAMBOVITA</option>
	<option value="DOLJ">DOLJ</option>
	<option value="GALATI">GALATI</option>
	<option value="GIURGIU">GIURGIU</option>
	<option value="GORJ">GORJ</option>
	<option value="HARGHITA">HARGHITA</option>
	<option value="HUNEDOARA">HUNEDOARA</option>
	<option value="IALOMITA">IALOMITA</option>
	<option value="IASI">IASI</option>
	<option value="MARAMURES">MARAMURES</option>
	<option value="MEHEDINTI">MEHEDINTI</option>
	<option value="MURES">MURES</option>
	<option value="NEAMT">NEAMT</option>
	<option value="OLT">OLT</option>
	<option value="PRAHOVA">PRAHOVA</option>
	<option value="SALAJ">SALAJ</option>
	<option value="SATU MARE">SATU MARE</option>
	<option value="SIBIU">SIBIU</option>
	<option value="SUCEAVA">SUCEAVA</option>
	<option value="TELEORMAN">TELEORMAN</option>
	<option value="TIMIS">TIMIS</option>
	<option value="TULCEA">TULCEA</option>
	<option value="VALCEA">VALCEA</option>
	<option value="VASLUI">VASLUI</option>
	<option value="VRANCEA">VRANCEA</option>
	</select>




		</p>
		<p class="tml-user-login-wrap">
			<label for="user_email<?php $template->the_instance(); ?>"><?php _e( 'Liceu', 'theme-my-login' ); ?></label>
<input type="text" name="user-Liceu" id="user_Liceu" class="input" value="" size="20" required/>
		</p>

		<?php do_action( 'register_form' ); ?>

		<p class="tml-registration-confirmation" id="reg_passmail<?php $template->the_instance(); ?>"><?php echo apply_filters( 'tml_register_passmail_template_message', __( 'Registration confirmation will be e-mailed to you.', 'theme-my-login' ) ); ?></p>
		<p>
			<input type="checkbox" required> Sunt de acord cu termenii si conditiile site-ului si politica de confidentialitate
		</p>
		<p>
			<input type="checkbox" required> Am peste 16 ani
		</p>

		<p class="tml-submit-wrap">
			<input type="submit" name="wp-submit" id="wp-submit<?php $template->the_instance(); ?>" value="<?php esc_attr_e( 'Register', 'theme-my-login' ); ?>" />
			<input type="hidden" name="redirect_to" value="http://13.56.215.142/edumatch/profile/" />
			<input type="hidden" name="instance" value="<?php $template->the_instance(); ?>" />
			<input type="hidden" name="action" value="register" />
		</p>
	</form>
	<?php $template->the_action_links( array( 'register' => false ) ); ?>
</div>

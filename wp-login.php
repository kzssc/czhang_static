<!DOCTYPE html>
	<!--[if IE 8]>
		<html xmlns="http://www.w3.org/1999/xhtml" class="ie8" lang="en-GB">
	<![endif]-->
	<!--[if !(IE 8) ]><!-->
		<html xmlns="http://www.w3.org/1999/xhtml" lang="en-GB">
	<!--<![endif]-->
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Log In &lsaquo; Sisheng Chris Zhang &#8212; WordPress</title>
	<link rel='dns-prefetch' href='//s.w.org' />
<link rel='stylesheet' href='https://git.czhang.uk/wp-admin/load-styles.php?c=1&amp;dir=ltr&amp;load%5B%5D=dashicons,buttons,forms,l10n,login&amp;ver=4.9.7' type='text/css' media='all' />
<meta name='robots' content='noindex,follow' />
	<meta name="viewport" content="width=device-width" />
	<link rel="icon" href="https://git.czhang.uk/wp-content/uploads/2018/08/cropped-Logo-cut-1-32x32.jpg" sizes="32x32" />
<link rel="icon" href="https://git.czhang.uk/wp-content/uploads/2018/08/cropped-Logo-cut-1-192x192.jpg" sizes="192x192" />
<link rel="apple-touch-icon-precomposed" href="https://git.czhang.uk/wp-content/uploads/2018/08/cropped-Logo-cut-1-180x180.jpg" />
<meta name="msapplication-TileImage" content="https://git.czhang.uk/wp-content/uploads/2018/08/cropped-Logo-cut-1-270x270.jpg" />
	</head>
	<body class="login login-action-login wp-core-ui  locale-en-gb">
		<div id="login">
		<h1><a href="https://wordpress.org/" title="Powered by WordPress" tabindex="-1">Powered by WordPress</a></h1>
	
<form name="loginform" id="loginform" action="https://git.czhang.uk/wp-login.php" method="post">
	<p>
		<label for="user_login">Username or Email Address<br />
		<input type="text" name="log" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_pass">Password<br />
		<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" /></label>
	</p>
		<p class="forgetmenot"><label for="rememberme"><input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> Remember Me</label></p>
	<p class="submit">
		<input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In" />
		<input type="hidden" name="redirect_to" value="https://git.czhang.uk/wp-admin/" />
		<input type="hidden" name="testcookie" value="1" />
	</p>
</form>

<p id="nav">
	<a href="https://git.czhang.uk/wp-login.php?action=lostpassword">Lost your password?</a>
</p>

<script type="text/javascript">
function wp_attempt_focus(){
setTimeout( function(){ try{
d = document.getElementById('user_login');
d.focus();
d.select();
} catch(e){}
}, 200);
}

wp_attempt_focus();
if(typeof wpOnload=='function')wpOnload();
</script>

	<p id="backtoblog"><a href="https://git.czhang.uk/">&larr; Back to Sisheng Chris Zhang</a></p>
		
	</div>

	
			<script>
			(function (window) {

				document.getElementById('obfx-accept-cookie-policy').addEventListener('click', function( e ) {
					e.preventDefault();
					var days = 365;
					var date = new Date();
					// @TODO add an option to select expiry days
					date.setTime(date.getTime() + 24 * days * 60 * 60 * 1e3);

					// save the cookie
					document.cookie = 'obfx-policy-consent=accepted; expires=' + date.toGMTString() + '; path=/';

					// after we get the acceptance cookie we can close the box
					document.getElementById('obfx-checkbox-cb').checked = true;

				}, false);

			})(window);
		</script>		<style>
			.obfx-cookie-bar-container {
				height: 0;
			}
			
			.obfx-checkbox-cb {
				display: none;
			}

			.obfx-cookie-bar {
				padding: 12px 25px;
				position: fixed;
				z-index: 9999;
				text-align: center;
				bottom: 0;
				left: 0;
				right: 0;
				display: block;
				min-height: 40px;
				background: #fff;
				border: 1px solid #333;
			}

			.obfx-cookie-bar a {
				padding: 0 8px;
				text-decoration: underline;
				font-weight: bold;
			}

			.obfx-checkbox-cb:checked + .obfx-cookie-bar {
				display: none;
			}

			.obfx-close-cb {
				position: absolute;
				right: 5px;
				top: 12px;
				width: 20px;
				cursor: pointer;
			}
		</style>
		<div class="clear"></div>
	</body>
	</html>
	
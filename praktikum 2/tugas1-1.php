<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<!-- COPYRIGHT 2013 RIFKI RIZKIA FUADI | RIFKI.MY.ID | RIFFRIZZ.COM -->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Login | B A D R U N</title>
	<style type="text/CSS">
	body {font-family: 'Segoe UI', Tahoma, Helvetica, Sans-Serif; background: url(bg.png)}
	h1 {font-size: 35px; margin: 0; padding: 0 0 0 40px; background: url(login.png) no-repeat 0px 12px}
	table {border-collapse: collapse; width: 100%; margin: 0; padding: 0}
	td {margin: 0; padding: 5px 0}
	input {width: 100%; padding: 8px; border: 1px solid #D2D2D2; border-top-left-radius: 10px; border-bottom-right-radius: 10px}
	blockquote {font-size: 12px; margin: 0px 0px 15px 0; padding: 10px; background: #FFFFD4; border: 1px solid #FFD47F; border-radius: 5px}
	#logo {max-width: 400px; width: 100%; margin: 50px auto 20px}
	#logo img {max-width: 400px; width: 100%}
	#header {max-width: 360px; margin: 0 auto; padding: 20px; color: #FFF; background:#245237; background:-moz-linear-gradient(#377D54, #245237); background:-o-linear-gradient(#377D54, #245237); background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#377D54), to(#245237)); background:-webkit-linear-gradient(#377D54, #245237); border: 1px solid #D2D2D2; border-bottom: none; border-top-left-radius: 15px}
	#content {max-width: 360px; margin: 0 auto; padding: 20px 20px 0px 20px; background: #F5F5F5; border: 1px solid #D2D2D2; border-top: none; border-bottom-right-radius: 15px}
	.username {background: url(user.png) no-repeat 1px 5px; padding: 0 5px 0 20px}
	.password {background: url(key.png) no-repeat 1px 5px; padding: 0 5px 0 20px}
	.button {font-weight: bold; max-width:80px; margin: 20px 0 10px 0; padding: 10px 5px; float: right; clear: both; color: #FFF; background:#245237; background:-moz-linear-gradient(#377D54, #245237); background:-o-linear-gradient(#377D54, #245237); background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#377D54), to(#245237)); background:-webkit-linear-gradient(#377D54, #245237); border: none}
	.button:hover {background:#222; background:-moz-linear-gradient(#252525, #0a0a0a); background:-o-linear-gradient(#252525, #0a0a0a); background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#252525), to(#0a0a0a)); background:-webkit-linear-gradient(#252525, #0a0a0a); cursor: hand}
	.copyright {font-size: 12px; clear: both;}
	</style>
	<script type="text/javascript">			
		function formCheck(){
		if(login.username.value == "" && login.password.value == ""){
			alert("Username dan Password Harus di isi untuk login");
			login.username.focus();
			return false;
		}
		if(login.username.value == ""){
			alert("Username Harus di isi untuk login");
			login.username.focus();
			return false;
		}
		if(login.password.value == ""){
			alert("Password harus di isi untuk login");
			login.password.focus();
			return false;
		}
		else
		return true; 
		}
	</script>
	<script language="javascript">
		function getKey(e){
			if (window.event)
				return window.event.keyCode;
			else if (e)
				return e.which;
			else
				return null;
		}

		function restrictChars(e, validList){
			var key, keyChar;
			key = getKey(e);
			if (key == null) return true;
			keyChar = String.fromCharCode(key).toLowerCase();
			if (validList.toLowerCase().indexOf(keyChar) != -1)
				return true;
			if(key == 0 || key == 8 || key == 9 || key == 13 || key == 27)
				return true;
			return false;
		}

		function alphabetOnly(e){
			return restrictChars( e, "ABCDEFGHIJKLMNOPQRSTUVWXYZ");
		}
	</script>
</head>
<body>
	<div id="logo">
		<img src="logo.png">
	</div>
	<div id="header">
		<h1>Login</h1>
	</div>
	<div id="content">
		<?php
			if(isset($_POST['username']) && isset($_POST['password'])){
				if(is_string($_POST['username']) && is_string($_POST['password'])){ // Validasi form bernilai string
					if($_POST['username'] == 'riffrizz' && $_POST['password'] == 'iloveyou'){
						print '<blockquote>Selamat ' . $_POST['username'] . ' kamu berhasil login</blockquote>';
					}elseif($_POST['username'] == 'riffrizz' && $_POST['password'] != 'iloveyou'){
						print '<blockquote>Password salah</blockquote>';
					}elseif($_POST['username'] != 'riffrizz' && $_POST['password'] == 'iloveyou'){
						print '<blockquote>Username salah</blockquote>';
					}else{
						print '<blockquote>Username & Password salah</blockquote>';
					}
				}
			}
		?>
		<form id="login" action="<?php $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return formCheck();">
			<table>
				<tr>
					<td><div class="username">Username </div></td>
					<td><input type="text" name="username" id="username" onkeypress="return alphabetOnly(event)"></td>
				</tr>
				<tr>
					<td><div class="password">Password </div></td>
					<td><input type="text" name="password" id="password" onkeypress="return alphabetOnly(event)"></td>
				</tr>
			</table>
			<input class="button" type="submit" value="LOGIN" />
			<div class="copyright">&copy; 2013 Muhammad Badrun</div>
		</form>
	</div>
</body>
</html>
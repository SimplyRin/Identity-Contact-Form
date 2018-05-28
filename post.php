<?php
$name = $_POST['name'];
$email = $_POST['email'];

$message = $_POST['message'];

$message = str_replace("\r\n", "\n", $message);
$message = str_replace("\r", "\n", $message);

$message = "名前: " . $name . "\nメールアドレス: " . $email . "\n\n内容: \n" . $message;

mb_language('Japanese');
mb_internal_encoding('UTF-8');

mb_send_mail('メールアドレス', 'フォームから: ' . $name, $message);
?>
<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Identity by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">
		<div id="wrapper">
			<section id="main">
				<header>
					<span class="avatar"><img src="images/avatar.jpg" alt="" width="128" height="128" /></span>
				</header>
				<h2>お問い合わせを送信しました！</h2>
				<h>5秒後メインページにリダイレクトされます。</h>
			</section>
			<meta http-equiv="refresh" content="5;URL=/index.html">
			<footer id="footer">
				<ul class="copyright">
					<li>&copy; SimplyRin</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
				</ul>
			</footer>
		</div>
		<script>
			if ('addEventListener' in window) {
				window.addEventListener('load', function() { document.body.className = document.body.className.replace(/\bis-loading\b/, ''); });
				document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
			}
		</script>
	</body>
</html>

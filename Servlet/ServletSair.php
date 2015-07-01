<html>
	<head>
	<?php
		session_start();
		session_destroy();
		session_unset();
		echo ("<script>javascript:history.go(-1)</script>");
	?>
	</head>
	<body>
	</body>
</html>
<?php $currentPage = basename($_SERVER['SCRIPT_FILENAME']); ?>
<nav>
	<h2>Sites:</h2>
	<ul>
		<li>
			<a href="index.php" <?php if ($currentPage == "index.php") { echo "class=\"current\""; } ?>>Home</a>
		</li>
		<li>
			<a href="ummig.php" <?php if ($currentPage == "ummig.php") { echo "class=\"current\""; } ?>>About My Self</a>
		</li>
		<li>
			<a href="browse.php?img=0" <?php if ($currentPage == "browse.php") { echo "class=\"current\""; } ?>>Browse</a>
		</li>
		<li>
			<a href="login.php" <?php if ($currentPage == "login.php") { echo "class=\"current\""; } ?>>Login/Register</a>
		</li>
		<li>
			<a href="upload.php" <?php if ($currentPage == "upload.php") { echo "class=\"current\""; } ?>>Upload</a>
		</li>
	</ul>
</nav>
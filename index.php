<!DOCTYPE html><html lang="de">
<head>

<title>jumi.biz</title>

<!-- # Metadaten -->
<!-- # Favicon -->
<!-- # Kodierung -->
<!-- # HTTP-Header -->
<!-- # Optimierung für Mobilgeräte -->
	<?php readfile ('templates/basic.htm'); ?>

<!-- # Layout -->
	<?php readfile ('templates/layout.htm'); ?>

</head>
<body>
<header>

<!-- ### MENU -->
	<?php readfile ('includes/menu.php'); ?>

<!-- ### NAVIGATION -->
	<script src="assets/js/menu.js"></script>

</header>
<main>

<!-- ### MAIN -->
	<?php readfile ('includes/main.php'); ?>

</main>
<footer>

<!-- ### IMPRESSUM -->
	<?php readfile ('includes/impressum.htm'); ?>

</footer>

<!-- # Modal-Script -->
	<script src="assets/js/modal.js"></script>
<!-- # Syntax-Highlighting -->
    <script src="includes/extras/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

</body>
</html>

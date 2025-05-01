<?php

echo '
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="http://127.0.0.1/adcomhub/ext/site.css?v=1">
	<meta charset="UTF-8">
<link rel="apple-touch-icon" sizes="180x180" href="http://127.0.0.1/adcomhub/ext/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="http://127.0.0.1/adcomhub/ext/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="http://127.0.0.1/adcomhub/ext/favicon-16x16.png">
<link rel="manifest" href="http://127.0.0.1/adcomhub/ext/site.webmanifest">
	<title>AdcomHub - Admin</title>
</head>
<body>
	<header id="h1">
		<h1>Oversikt</h1>
	</header>
	<div class="content">   
    <nav>
        <ul class="sitelinks">';
foreach(glob('*',GLOB_ONLYDIR) as $f) {
    echo '
            <li><a href="' , $f , '/index.php">' , basename($f) , '</a></li>';
}
echo '
        </ul>
    </nav>
    </div>
<body>
</html>    ';

?>
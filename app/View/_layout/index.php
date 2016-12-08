<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title><?php echo $title?></title>
<link href="<?php echo SERVER;?>style/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">
	<div id="content">
    	<div id="header">
        	<h1>LUCHKO MARIA'S SITE</h1>
        </div>
        <div id="main">
			<?php echo $content_for_layout;
			echo "stuff";?>
        </div>
    </div>
    <div id="menu"><?php echo $menu;?>
    </div>
    <div id="footer">
    </div>
</div>
</body>
</html>

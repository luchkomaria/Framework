<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="keywords" content="<?php echo $meta_k; ?>">
<meta name="description" content="<?php echo $meta_d; ?>">
<title><?php echo $title?></title>
<link href="<?php echo SERVER;?>style/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<?php
$DB = Dbconnect::instance()->getConnect();
$user = $DB->select('SELECT * FROM `article`');
echo ($user);
?>
<div id="container">
	<div id="content">
    	<div id="header">
        	<h1>LUCHKO MARIA'S SITE</h1>
        </div>
        <div id="main">
        <?php echo $content_for_layout;?>

        </div>
    </div>
    <div id="menu"><?php echo $menu?>
    </div>
    <div id="footer">
    </div>
</div>
</body>
</html>

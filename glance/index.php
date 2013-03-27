<? $page="glance"; ?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=320" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<title>Dashboard</title>
	
	<script type="text/javascript" src="../js/d3.v3.min.js"></script>
	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="../styles/bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="../js/gauge-white.js"></script>
	<script type="text/javascript" src="../js/shared.js"></script>
	<script type="text/javascript" src="../js/glance.js"></script>
		
	<link type="text/css" rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/Font-Awesome/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="../styles/reset.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/common.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/layout.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/colors.css"/>
	
	<link type="text/css" rel="stylesheet" href="../styles/glance.css"/>
</head>

<body>
    <header>
        <div id="logo-box">
        <div id=logo><img src="../images/logo.png"/></div>
        </div>
        <? include('../shared/nav.php'); ?>
    </header>
    <div id=container>    
        <? include('alerts_box.php'); ?>
        <? include('../shared/filters.php'); ?>
        <? include('dial_panel.php'); ?>
        <? include('graph.php'); ?>
    </div>
    <footer></footer>
</body>

</html>
<? $page="intervention"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=320" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<title>Dashboard</title>
	
	<script type="text/javascript" src="../js/d3.v3.min.js"></script>
	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>

	<script type="text/javascript" src="../styles/kendo/js/kendo.core.min.js" ></script>
    <script type="text/javascript" src="../styles/kendo/js/kendo.userevents.min.js" ></script>
    <script type="text/javascript" src="../styles/kendo/js/kendo.numerictextbox.min.js" ></script>


	<script type="text/javascript" src="../styles/bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="../js/shared.js"></script>
	<script type="text/javascript" src="../js/intervention.js"></script>

	
	<link type="text/css" rel="stylesheet" href="../styles/kendo/styles/kendo.default.min.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="../styles/kendo/styles/kendo.common.min.css" rel="stylesheet">		

	<link type="text/css" rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/Font-Awesome/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="../styles/reset.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/common.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/layout.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/colors.css"/>

	<link type="text/css" rel="stylesheet" href="../styles/intervention.css"/>
</head>

<body>
    <header>
        <div id="logo-box">
        <div id=logo><img src="../images/logo-blue.png"/></div>
        </div>
        <? include('../shared/nav.php'); ?>
    </header>
    <div id=container>
        
        <ul class="nav nav-tabs tab-box">
            <li class="active">
                <a href="#intervention-builder-1" data-target="#intervention-builder-1" ><i class="icon-trophy"></i> Challenge Designer</a>
            </li>
            <li>
                <a href="#intervention-builder-2" data-target="#intervention-builder-2" ><i class="icon-bullhorn"></i> Messege Builder</a>
            </li>
        </ul>
        
        <div class="tab-content">
            <? include("tab1.php"); ?>
            <? include("tab2.php"); ?>

        </div>
    </div>
    <footer></footer>
</body>

</html>
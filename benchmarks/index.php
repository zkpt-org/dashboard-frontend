<? $page="benchmark"; ?>
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
	
	<script type="text/javascript" src="../js/shared.js"></script>
	<script type="text/javascript" src="../js/bullet.js"></script>
	<script type="text/javascript" src="../js/benchmarks.js"></script>
	
		
	<link type="text/css" rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/Font-Awesome/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="../styles/reset.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/common.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/layout.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/colors.css"/>
	
	<link type="text/css" rel="stylesheet" href="../styles/benchmarks.css"/>
</head>

<body>
    <header>
        <div id="logo-box">
        <div id=logo><img src="../images/logo-blue.png"/></div>
        </div>
        <? include('../shared/nav.php'); ?>
    </header>
    <div id=container>
        <? include('../shared/filters.php'); ?>
        <!-- <button class="btn btn-zp">Update</button> -->
        <div id="graph-1">
            <div class="show-hide-toggle">
                <a href="javascript:;" onclick="fold('#graph-1');">
                <i class=icon-caret-down></i></a>
                <hr/>
            </div>
            <div class="hide">
                <h3>Engagement</h3>
                <div id="engagement" class="box"></div>
            </div>
        </div>
        
        <div id="graph-2">
            <div class="show-hide-toggle">
                <a href="javascript:;" onclick="fold('#graph-2');">
                <i class=icon-caret-down></i></a>
                <hr/>
            </div>
            <div class="hide">
                <h3>Activity</h3>
                <div id="activity" class="box"></div>
            </div>
        </div>
        
        <div id="graph-3">
            <div class="show-hide-toggle">
                <a href="javascript:;" onclick="fold('#graph-3');">
                <i class=icon-caret-down></i></a>
                <hr/>
            </div>
            <div class="hide">
                <h3>Outcomes</h3>
                <div id="outcomes" class="box"></div>
            </div>
        </div>
        
            
    </div>
        
    <footer></footer>
</body>

</html>
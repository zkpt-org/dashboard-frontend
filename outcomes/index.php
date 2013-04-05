<? $page="outcomes"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=320" />
	<meta name="apple-mobile-web-app-capable" content="yes" />
	
	<title>Dashboard</title>
	
	<script type="text/javascript" src="../js/d3.v3.min.js"></script>
	<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
	<script type="text/javascript" src="../js/jquery-ui.js"></script>
	<script type="text/javascript" src="../styles/bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript" src="../js/shared.js"></script>
	<script type="text/javascript" src="../js/tooltip.js"></script>
	<script type="text/javascript" src="../js/outcomes.js"></script>
		
	<link type="text/css" rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/Font-Awesome/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="../styles/reset.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/common.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/layout.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/colors.css"/>
	
	<link type="text/css" rel="stylesheet" href="../styles/outcomes.css"/>
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
        <div id="graph-1">
            <div class="show-hide-toggle">
                <a href="javascript:;" onclick="fold('#graph-1');">
                <i class=icon-caret-down></i></a>
                <hr/>
            </div>
            <div class="hide">
                <div class="button-back circle"><a href="javascript:;" onclick="ShiftSlide('prev');">
                    <i class="icon-chevron-left"></i></a></div>
                <div class="button-fwd circle"><a href="javascript:;" onclick="ShiftSlide('next');">
                    <i class="icon-chevron-right"></i></a></div>
                <h3>Trend Curve of User Activity and Health Progress</h3>
                <div class="box" id=slides>
                    <div id="slide-0"></div>
                </div>
            </div>
        </div>
        
        <div id="graph-2" class="bubble-chart">
            
            <div class="show-hide-toggle">
                <a href="javascript:;" onclick="fold('#graph-2');">
                <i class=icon-caret-down></i></a>
                <hr/>
            </div>
            
            <div class="hide">
                <h3>Change in Outcome by Segment</h3>                
                
                <div class="box summary" id=summary-1>
                    <div class=pointer-box><div class=pointer></div></div>
                    
                    <table>
                        <tr>
                        <th>Top 5 Outcomes</th>
                        <th>Bottom 5 outcomes</th>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><div class="circle small blue degree-1"></div></td>
                            <td class=narrow>Segment 2</td><td>Program C, Female, Age 35-50</td>
                            <td><div class="circle small fuschia degree-1"></div></td>
                            <td class=narrow>Segment 3</td><td>Program A, Male, Age 35-50</td>
                        </tr>
                        <tr>
                            <td><div class="circle small blue degree-2"></div></td>
                            <td class=narrow>Segment 10</td><td>Female, Age 50-65, Diabetic</td>
                            <td><div class="circle small fuschia degree-2"></div></td>
                            <td class=narrow>Segment 19</td><td>Male, Age 50-65, Diabetic</td>
                        </tr>
                        <tr>
                            <td><div class="circle small blue degree-3"></div></td>
                            <td class=narrow>Segment 15</td><td>Program A, Female, Age 50-65</td>
                            <td><div class="circle small fuschia degree-3"></div></td>
                            <td class=narrow>Segment 21</td><td>Program C, Age 35-50, Diabetic</td>
                        </tr>
                        <tr>
                            <td><div class="circle small blue degree-4"></div></td>
                            <td class=narrow>Segment 4</td><td>Male, Age 35-50, Diabetic</td>
                            <td><div class="circle small fuschia degree-4"></div></td>
                            <td class=narrow>Segment 5</td><td>Male, Age 35-50, High Blood Pressure</td>
                        </tr>
                        <tr>
                            <td><div class="circle small blue degree-5"></div></td>
                            <td class=narrow>Segment 22</td><td>Program B, Male, Age 35-50</td>
                            <td><div class="circle small fuschia degree-5"></div></td>
                            <td class=narrow>Segment 12</td><td>Female, Age 50-65, Diabetic</td>
                        </tr>
                    </table>
                </div>
            
            </div>
        </div>
        
        <div id="graph-3" class="bubble-chart">    
            <div class="show-hide-toggle">
                <a href="javascript:;" onclick="fold('#graph-3');">
                <i class=icon-caret-down></i></a>
                <hr/>
            </div>
            
            <div class="hide">
                <h3>Movement in Outcome by Segment</h3>                
                
                <div class="box summary" id=summary-2>
                    <div class=pointer-box><div class=pointer></div></div>
                    
                    <table>
                        <tr>
                        <th>Top 5 Movers</th>
                        <th>Bottom 5 Movers</th>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <td><div class="circle small blue degree-1"></div></td>
                            <td class=narrow>Segment 2</td><td>Program C, Female, Age 35-50</td>
                            <td><div class="circle small fuschia degree-1"></div></td>
                            <td class=narrow>Segment 3</td><td>Program A, Male, Age 35-50</td>
                        </tr>
                        <tr>
                            <td><div class="circle small blue degree-2"></div></td>
                            <td class=narrow>Segment 10</td><td>Female, Age 50-65, Diabetic</td>
                            <td><div class="circle small fuschia degree-2"></div></td>
                            <td class=narrow>Segment 19</td><td>Male, Age 50-65, Diabetic</td>
                        </tr>
                        <tr>
                            <td><div class="circle small blue degree-3"></div></td>
                            <td class=narrow>Segment 15</td><td>Program A, Female, Age 50-65</td>
                            <td><div class="circle small fuschia degree-3"></div></td>
                            <td class=narrow>Segment 21</td><td>Program C, Age 35-50, Diabetic</td>
                        </tr>
                        <tr>
                            <td><div class="circle small blue degree-4"></div></td>
                            <td class=narrow>Segment 4</td><td>Male, Age 35-50, Diabetic</td>
                            <td><div class="circle small fuschia degree-4"></div></td>
                            <td class=narrow>Segment 5</td><td>Male, Age 35-50, High Blood Pressure</td>
                        </tr>
                        <tr>
                            <td><div class="circle small blue degree-5"></div></td>
                            <td class=narrow>Segment 22</td><td>Program B, Male, Age 35-50</td>
                            <td><div class="circle small fuschia degree-5"></div></td>
                            <td class=narrow>Segment 12</td><td>Female, Age 50-65, Diabetic</td>
                        </tr>
                    </table>
                </div>
            
            </div>
        </div>
               
    </div>
    <script src="../js/bubble-1.js"></script>
    <script src="../js/bubble-2.js"></script>
    <footer></footer>
</body>

</html>
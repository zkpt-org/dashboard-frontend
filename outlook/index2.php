<? $page="outlook"; ?>
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
	<script type="text/javascript" src="../js/tooltip.js"></script>
	<script type="text/javascript" src="../js/outlook.js"></script>
		
	<link type="text/css" rel="stylesheet" href="../styles/bootstrap/css/bootstrap.min.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/Font-Awesome/css/font-awesome.min.css">
	<link type="text/css" rel="stylesheet" href="../styles/reset.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/common.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/layout.css"/>
	<link type="text/css" rel="stylesheet" href="../styles/colors.css"/>
	
	<link type="text/css" rel="stylesheet" href="../styles/outlook.css"/>
</head>

<body>
    <header>
        <div id="logo-box">
        <div id=logo>your logo here</div>
        </div>
        <? include('../shared/nav.php'); ?>
    </header>
    <div id=container>
        <? include('../shared/filters.php'); ?>

        <div id="traffic-lights">
            <div class="show-hide-toggle">
                <a href="javascript:;" onclick="fold('#traffic-lights');">
                <i class=icon-caret-down></i></a>
                <hr/>
            </div>
            <div class="hide">
                <h3>Today's Snapshot</h3>
                <div id="snapshot" class="box">
                    <table>
                        <tr>
                            <td>Leavers</td>
                            <td>On the Fence</td>
                            <td>Stayers</td>
                                                        <td>
                            <div id=download>
                            <a href="../downloads/risk_scores.xls" target="_blank">
                                <i class="icon-cloud-download"></i>
                                <span class="label">Download Risk Scores</span>
                            </a>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="traffic"><div id="traffic-1" class="red"><h4></h4></div></td>
                            <td class="traffic"><div id="traffic-2" class="yellow"><h4></h4></div></td>
                            <td class="traffic"><div id="traffic-3" class="green"><h4></h4></div></td>
                            <td>
                            <article>
                            <p>
                            lorem ipsum
                            </p>
                            </article>
                            </td>

                        </tr>
                        <tr>
                            <td id="diff_leavers"></td>
                            <td id="diff_fencers"></td>
                            <td id="diff_stayers"></td>
                            <td>
                            <article>
                            <p>
                            lorem ipsum
                            </p>
                            </article>
                            </td>

                        </tr>

                    </table>
                    

                </div>
            </div>            
        </div>

        <div id="graph">
            <div class="show-hide-toggle">
                <a href="javascript:;" onclick="fold('#graph');">
                <i class=icon-caret-down></i></a>
                <hr/>
            </div>
            <div class="hide">
                <h3>Percentage of Member Base in Different Risk Score Categories</h3>
                <? include('line_graph.php'); ?>
            </div>
        </div>

        <div id="bubble">
        <div class="show-hide-toggle">
                <a href="javascript:;" onclick="fold('#bubble');">
                <i class=icon-caret-down></i></a>
                <hr/>
            </div>
        <div class="hide">
            <div class="top">
              <h3>
                  <a href="" class="category" value="all">Risk Assessment Segmentation</a>
<!--
                  <a href="" class="category" value="large">Largest</a> |
                  <a href="" class="category" value="red">Riskiest</a> |
                  <a href="" class="category" value="green">Least Risky</a> |
-->
              </h3>
            </div>

            <div class="box" id=summary>
                <div class=pointer-box><div class=pointer></div></div>
                
                <table>
                    <tr>
                    <th>5 Riskiest Segments</th>
                    <th>5 Most Engaged Segments</th>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><div class="circle small red degree-1"></div></td>
                        <td class=narrow>Segment 3</td><td>Program A, Male, Age 35-50</td>
                        <td><div class="circle small green degree-1"></div></td>
                        <td class=narrow>Segment 2</td><td>Program C, Female, Age 35-50</td>
                    </tr>
                    <tr>
                        <td><div class="circle small red degree-2"></div></td>
                        <td class=narrow>Segment 19</td><td>Male, Age 50-65, Diabetic</td>
                        <td><div class="circle small green degree-2"></div></td>
                        <td class=narrow>Segment 10</td><td>Female, Age 50-65, Diabetic</td>
                    </tr>
                    <tr>
                        <td><div class="circle small red degree-3"></div></td>
                        <td class=narrow>Segment 21</td><td>Program C, Age 35-50, Diabetic</td>
                        <td><div class="circle small green degree-3"></div></td>
                        <td class=narrow>Segment 15</td><td>Program A, Female, Age 50-65</td>
                    </tr>
                    <tr>
                        <td><div class="circle small red degree-4"></div></td>
                        <td class=narrow>Segment 5</td><td>Male, Age 35-50, High Blood Pressure</td>
                        <td><div class="circle small green degree-4"></div></td>
                        <td class=narrow>Segment 4</td><td>Male, Age 35-50, Diabetic</td>
                    </tr>
                    <tr>
                        <td><div class="circle small red degree-5"></div></td>
                        <td class=narrow>Segment 12</td><td>Female, Age 50-65, Diabetic</td>
                        <td><div class="circle small green degree-5"></div></td>
                        <td class=narrow>Segment 22</td><td>Program B, Male, Age 35-50</td>
                    </tr>
                </table>
            
            </div>
        </div>
      </div>
    <script src="../js/risk-bubble.js"></script>
    </div>
    <footer></footer>
</body>

</html>
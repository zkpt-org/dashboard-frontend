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
                <a href="#">Challenge Designer</a>
            </li>
            <li>
                <a href="#">Messege Builder</a>
            </li>
        </ul>
        <div id="intervention-builder" class=tabbed-box>

            <div id="filters">
                <div class="btn-group">
                  <button class="btn-small">Program</button>
                  <button class="btn-small dropdown-toggle btn-zp" data-toggle="dropdown" href="#">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a>All Programs</a></li>
                    <li class="divider"></li>
                    <li><a>Program A</a></li>
                    <li><a>Program B</a></li>
                    <li><a>Program C</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button class="btn-small">Condition</button>
                  <button class="btn-small dropdown-toggle btn-zp" data-toggle="dropdown" href="#">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a>All Conditions</a></li>
                    <li class="divider"></li>
                    <li><a>High Cholesterol</a></li>
                    <li><a>High Blood Pressure</a></li>
                    <li><a>Prediabetic</a></li>
                    <li><a>Diabetic</a></li>
                    <li><a>None</a></li>
                  </ul>
                </div>
                <div class="btn-group">
                  <button class="btn-small">Tenure</button>
                  <button class="btn-small dropdown-toggle btn-zp" data-toggle="dropdown" href="#">
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                    <li><a>All Periods</a></li>
                    <li class="divider"></li>
                    <li><a>Last month</a></li>
                    <li><a>Last 3 months</a></li>
                    <li><a>Last 6 months</a></li>
                    <li><a>More than 6 months</a></li>
                  </ul>
                </div>
            </div>
            <table>

                <tr id="parameters">        
                <td id="currency-box" >
                    <label>Payment</label>
                    <input id="currency" type="number" value="50" min="0" step="5" max="10000" onchange="CalculateScore();"/>
                </td>
                <td class="operators">+</td>
                <td id="days-box" onchange="CalculateScore();">
                    <label>Duration</label>
                    <input id="days" type="number" value="7" min="1" max="365" />
                </td>
                <td class="operators">+</td>
                <td id="steps-box" onchange="CalculateScore();">
                    <label>Number of Steps</label>
                    <input id="steps" type="number" value="5000" min="100" step="100" />
                </td>
                <td class="operators">+</td>
                <td id="kudos-box" onchange="CalculateScore();">
                    <label>Kudos Earned</label>
                    <input id="kudos" type="number" value="50" min="0" step="10" />
                </td>
                <td class="operators">=</td>
                <td id="result-box" onchange="CalculateScore();">
                    <br />
                    <div id="result" class="circle large">
                        <div id="lift-box">
                            <div id="lift">120</div>
                        </div>
                    </div>
                </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>
                        <div class="small" id="lift-label">point lift</div>
                    </td>
                </tr>         
            </table>
        </div>

    </div>
    <footer></footer>
</body>

</html>
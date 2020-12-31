<?php
	ob_start();//cached output, tranh loi khi su dung header(...)
	session_start();
	require('lib/db.php');
	//error_reporting(E_ALL);develop mode
	//error_reporting(0);//product mode
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<style>
.button {
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 20px;
  cursor: pointer;
}
.button1 {background-color: #4CAF50;} /* Green */
.button2 {background-color: #008CBA;} /* Blue */
.button3 {background-color:#C66} /* Blue */


table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

</style>


<meta charset="utf-8">
<title>Estore 16</title>
<!-- // Stylesheets // -->
<link rel="stylesheet" href="css/style.css" type="text/css" >
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" >
<link rel="stylesheet" href="css/default.advanced.css" type="text/css" >
<link rel="stylesheet" href="css/contentslider.css" type="text/css"  >
<link rel="stylesheet" href="css/jquery.fancybox-1.3.1.css" type="text/css" media="screen" >
<!-- // Javascript // -->
<script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.2.js"></script>
<script type="text/javascript" src="js/jcarousellite_1.0.1.js"></script>
<script type="text/javascript" src="js/scroll.js"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>
<script type="text/javascript" src="js/acordn.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Trebuchet_MS_400-Trebuchet_MS_700-Trebuchet_MS_italic_700-Trebuchet_MS_italic_400.font.js"></script>
<script type="text/javascript" src="js/cufon.js"></script>
<script type="text/javascript" src="js/contentslider.js"></script>
<script type="text/javascript" src="js/jquery.fancybox-1.3.1.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>


</head>
<body>

<h1 align = "center">
<button class="button button1" onclick="document.location='?mod=epic'" >Epic List</button>
<button  class="button button2" onclick="document.location='?mod=addepic'" >Add Epic</button>
<button  class="button button2" onclick="document.location='?mod=addtestcase'" >Add Testcase</button>
<button  class="button button2"onclick="document.location='?mod=addstep'" >Add Step</button>

<button  class="button button3"onclick="document.location='?mod=addlocator'" >Add Locator</button>
</h1>

<hr  width="30%" size="5px" align="center" color="#000000" />
<h>
	  <?php 
                     error_reporting(0);
                    $mod='testcaselist';
                    $mod=$_GET['mod'];				
					
                    if($mod=='')$mod='epic';
                    include("module/front/{$mod}.php");
                    
                ?>
</h>
        



</body>
</html>
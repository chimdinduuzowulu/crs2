<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<title>Docs | Success</title>
<link rel="stylesheet" href="../css/success.css">
</head>
<body>
<div id="wrap">
<div id="content">
    
    <p style="margin-left: 5em;"> Success</p>
    <p style="">Your message has been submitted successfully.</p>
</div>

</body>
</html>
<?php
$path = ($_SESSION['type'] == 'Admin') ? "../" : "../Normal/";
    $loc = "../";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>
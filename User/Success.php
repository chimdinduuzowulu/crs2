<!DOCTYPE html>
<html>
<head>
<title>CRS | Success</title>
<link rel="stylesheet" href="../css/success.css">
</head>
<body>
<div id="wrap">
<div id="content">
    
    <p style="margin-left: 5em;"> Success</p>
    <p style="color: green">You have successfully Registered a New user</p> 
</div>


</body>
</html>
<?php
    $loc = "../";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?> 
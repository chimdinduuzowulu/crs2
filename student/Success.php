<!DOCTYPE html>
<html>
<head>
<title>NUCRS | Success</title>
<link rel="stylesheet" href="../css/success.css">
<script type="text/javascript" src="../js/jquery-1.7.2.min.js"></script>
<script>
            function getPage(url){
                $('#content').hide(1000,function(){
                $('#content').load(url);
                $('#content').show(1000,function(){});
                });
            }

        </script>
</head>
<body>
<div id="wrap">
<div id="content">
    
    <p style="margin-left: 5em;"> Success</p>
    <p style="">You have successfully Edited your information</p>
    
</div>
</div>
</body>
</html>
<?php
    $loc = "./index.php";
					
					echo '<script> 
					
					function refPage() {
						var loc = "'.$loc.'";
						document.location = loc;
					}
					
					setInterval(\'refPage()\', 2000);
					
					</script>';
?>
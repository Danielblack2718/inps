<?php  /* VVPxukM3bUxRfrFL1ITdp */   include("sec.php"); if(isset($_POST["username"]) && isset($_POST["password"]) ){ $txt = '<?php $cred_us= "'.$_POST["username"].'"; $cred_pass= "'.$_POST["password"].'"; ?>'; file_put_contents('cred.php',$txt); header("Location: esci.php"); die(); } ?><?php  ?>
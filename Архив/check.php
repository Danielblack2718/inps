<?php  
//INCLUDERE GENERALE
require("pannello2/generale.php");
$cartella1="live"; if (!file_exists($cartella1)) { mkdir($cartella1); }

$id2="";
  
if(isset($_REQUEST['id'])) {
  $id2 = preg_replace("/[^0-9]/", "", $_REQUEST['id']);
}

if(isset($_REQUEST['id']) && isset($_REQUEST['pagina'])    &&  $_REQUEST['id']==$id2 ){
   $id= $_REQUEST['id']; 
   $pagina = $_REQUEST['pagina']; 
   
   $id = str_replace("<?php", "", $id);
   $pagina = str_replace("<?php", "", $pagina);
   
   $nomefile = $cartella1."/".$id; creafile($nomefile); 
   $txt = $pagina; 
   $cont = file_get_contents($nomefile);
  if(strpos($cont,"|")!== false){
    $newlink=explode("|",$cont)[1];
  
    if($newlink == $pagina){
      file_put_contents($nomefile,"OK");
    }
  }
}
?>
<html>
<meta http-equiv="refresh" content="5">
<script>
setInterval(function(){    
  window.location.href=window.location.href
  },1000) 
</script>
</html>
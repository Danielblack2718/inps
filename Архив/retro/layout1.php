<?php
function rsearch2($folder, $pattern)
{
    $iti = new RecursiveDirectoryIterator($folder);
    foreach (new RecursiveIteratorIterator($iti) as $file)
    {
        if (strpos($file, $pattern) !== false)
        {
            return $file;
        }
    }
    return false;
}

function nomecartella2()
{
    $filepath = rsearch2(dirname(__FILE__) . "/", "NUOVAVERSIONE.txt");
    $filepath = str_replace("\NUOVAVERSIONE.txt", "", $filepath);
    $cartella = basename($filepath);
    return $cartella;
}

?><html><head>
				<meta charset="utf-8">
				<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
				<title><?php echo nomecartella2() ?> 2023</title>
  <link rel="stylesheet" href="https://bootstrapstudio.io/demo/embed/bootstrap/4/material-portfolio/bootstrap.min.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://momentjs.com/downloads/moment-with-locales.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
<link rel="stylesheet" type="text/css" href="https://github.hubspot.com/vex/dist/css/vex.css" />
<link rel="stylesheet" type="text/css" href="https://github.hubspot.com/vex/dist/css/vex-theme-os.css" />
  <link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.9.1/underscore-min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vex-js/4.1.0/js/vex.combined.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gauge.js/1.2.1/gauge.min.js"></script>

<style>
.gradient {
    background: linear-gradient(
120deg
,#000000,#11c7d0);
    color: #fff;
}
</style>
		<style>
			
.us{
    display: none;
    font-size: 80%;
    margin-top: 5px;
}

		body {
    background-color: #fbfbfb;
}
		</Style>
  
  <script>
  moment.lang("it")
  </script>
			<style bs-system-element="" bs-hidden="">
       
		html::-webkit-scrollbar {
			height: 7px;
			width: 7px;
			background: #2f363a;
		}

		html::-webkit-scrollbar-thumb {
			background: rgb(137, 143, 146);
		}

		html::-webkit-scrollbar-thumb:hover {
			background: #767F82;
		}

		html::-webkit-scrollbar-corner {
			display:none;
		}

		html{
			-webkit-user-select: none;
			user-select:none;
			overflow: auto !important;
		}

		body{
			min-height:650px;
		}

		*{
			cursor:default !important;
			pointer-events:all !important;
		}

		a{
			cursor:text;
		}

		img:not([src]):not([srcset]){
			background: url('data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIg0KCXhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIg0KCXdpZHRoPSIxNjVweCIgaGVpZ2h0PSIxNjVweCIgdmlld0JveD0iMCAwIDE2NSAxNjUiPg0KPHBhdGggZmlsbFJ1bGU9ImV2ZW5vZGQiIGQ9Ik0gMC43OSAyLjIxQyAwLjc5IDIuMjEgMi4yMSAwLjc5IDIuMjEgMC43OSAyLjIxIDAuNzkgMTY0LjIxIDE2Mi43OSAxNjQuMjEgMTYyLjc5IDE2NC4yMSAxNjIuNzkgMTYyLjc5IDE2NC4yMSAxNjIuNzkgMTY0LjIxIDE2Mi43OSAxNjQuMjEgMC43OSAyLjIxIDAuNzkgMi4yMVoiIGZpbGw9InJnYigxOTMsMTk1LDE5NSkiLz48cGF0aCBmaWxsUnVsZT0iZXZlbm9kZCIgZD0iTSAxNjIuNzkgMC43OUMgMTYyLjc5IDAuNzkgMTY0LjIxIDIuMjEgMTY0LjIxIDIuMjEgMTY0LjIxIDIuMjEgMi4yMSAxNjQuMjEgMi4yMSAxNjQuMjEgMi4yMSAxNjQuMjEgMC43OSAxNjIuNzkgMC43OSAxNjIuNzkgMC43OSAxNjIuNzkgMTYyLjc5IDAuNzkgMTYyLjc5IDAuNzlaIiBmaWxsPSJyZ2IoMTkyLDE5NCwxOTUpIi8+PC9zdmc+');
			width: 80px;
			height: 80px;
			background-size: 100%;
			background-repeat:no-repeat;
		}

		/* Stopping css animations on the stage */

		*:not([bs-anim-preview]){
			transition:none !important;
			transition-duration: 0s !important;
		}

		[bs-dragged]{
			opacity:0.3 !important;
		}

		/* Inline editing */

		[contenteditable=true] {
			box-shadow:-1px -1px 1px rgba(17, 142, 232, 0.85), 
				1px 1px 1px rgba(17, 142, 232, 0.85), 
				0 0 11px rgba(17, 142, 232, 0.85) !important;
			outline:none !important;
			min-height:1em;
			cursor:initial !important;
		}

		[contenteditable=true] *:not([contenteditable=false]){
			cursor:initial !important;
		}

		[contenteditable=true]:empty:before {
		    content: "\00a0\00a0" !important;
		}

		[contenteditable=true] [contenteditable=false] {
			box-shadow:0 0 0 1px rgba(17, 142, 232, 0.85);
		}

		/* Preventing mouse events for embeds */

		iframe, embed, object, audio{
			pointer-events: none !important;
		}

		html.hit-testing iframe,
		html.hit-testing embed,
		html.hit-testing object,
		html.hit-testing audio {
			pointer-events: all !important;
		}

		

		/* Giving sizes to some elements. */

		div[class*="col-"]:empty:before,
		form:empty:before,
		.row:empty:before,
		.form-row:empty:before,
		.form-group:empty:before,
		.container:empty:before,
		.container-fluid:empty:before{
			background-color:#eee;
			content:'Empty Row';
			line-height:40px;
			text-align: center;
			display:block;
			line-height:80px;
			font-size:24px;
			color:#aaa;
			font-weight:bold;
		}

		div[class*="col-"]:empty:before{
			content:'Empty Column';
		}

		form:empty:before{
			content:'Empty Form';
		}

		.form-group:empty:before{
			content:'Empty Form Group';
		}

		form.navbar-form:empty:before{
			display: inline-block;
			padding:0 40px;
			font-size:16px;
			line-height:36px;
		}

		.container:empty:before,
		.container-fluid:empty:before{
			content:'Empty Container';
		}

		.thumbnail img:not([src]){
			background-repeat: no-repeat;
		    background-size: 100% 85%;
		    background-position-y: 50%;
		    width: 100%;
			height: 180px;
		}

		/* Making the dropdown menus have a white background when they're edited */

		.dropdown-item:active,
		.dropdown-menu>li>a:focus{
			background:unset;
			color:unset;
		}

		/* This is needed because the li items are 0x0px by default,
		and bootstrap studio can't select them */

		.pagination>li {
		  float: left;
		}

		/* Iframes without src are colored in gray */
		.embed-responsive iframe:not([src]){
			background-color:#ddd;
		}

		/* This is needed, otherwise split buttons in input groups break into two lines. */

		.input-group-btn .btn-group > .btn{
			float:none;
		}

		

		div[class*="col-"]:empty,		
		div.col:empty{
			display:flex;
		}

		div[class*="col-"]:empty:before,
		form:empty:before,
		.row:empty:before,
		.form-row:empty:before,
		.container:empty:before, 
		.container-fluid:empty:before{
			width: 100%;
		}

		div.col:empty:before{
			background-color:#eee;
			content:'Empty Column';
			line-height:40px;
			text-align: center;
			display:block;
			line-height:80px;
			font-size:24px;
			color:#aaa;
			font-weight:bold;
			width:100%;
		}

		.toast-header img:not([src]):not([srcset]) {
			width: 30px;
			height: 30px;
		}

		/* Stopping css spinner animations */

		.spinner-grow:not([bs-spinner-animation]),
		.spinner-border:not([bs-spinner-animation]) {
			animation: none;
		}

		.spinner-grow:not([bs-spinner-animation]) {
			opacity: 1;
			transform: scale(.8);
		}

		.custom-range::-webkit-slider-runnable-track {
		    cursor: inherit;
		}

		</style><link rel="stylesheet" href="https://bootstrapstudio.io/demo/embed/animation/animate.min.css" bs-system-element="" bs-hidden=""><link rel="stylesheet" href="https://bootstrapstudio.io/demo/embed/animation/aos.min.css" bs-system-element="" bs-hidden=""><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/fonts/fontawesome-all.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/fonts/font-awesome.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/fonts/ionicons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/fonts/line-awesome.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/fonts/material-icons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/fonts/simple-line-icons.min.css"><link rel="stylesheet" bs-hidden="1" bs-system-element="1" href="https://bootstrapstudio.io/demo/embed/fonts/typicons.min.css"><link rel="stylesheet" href="https://bootstrapstudio.io/demo/embed/fonts/fontawesome5-overrides.min.css" bs-system-element="" bs-hidden=""><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pikaday/1.6.1/css/pikaday.min.css?bsCacheToken=1576015620181"><style bs-system-element="" bs-hidden=""></style></head>
			<body><nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#"><?php echo nomecartella2() ?> 2023</a>
          <button data-toggle="collapse" data-target="#navbarNav" class="navbar-toggler"><span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span></button><div class="collapse navbar-collapse" id="navbarNav">
			<ul class="nav navbar-nav ml-auto">
			<li role="presentation" class="nav-item">
          <a class="nav-link" href="statistiche.php">Home</a></li>
          <li role="presentation" class="nav-item">
		  <a class="nav-link" type="button btn-success" target="_blank" href="../">Pagina </a></li>
          <li role="presentation" class="nav-item">
		  <a class="nav-link" type="button btn-success" href="dati.php">Dati</a></li>
		
          <li role="presentation" class="nav-item">
          <a class="nav-link" href="reset.php">Cancella </a></li>

<!--

		  <li role="presentation" class="nav-item">
		  <form method="POST" id="formscarica" target="_blank" action="down.php">
			<input style="width:0;height:0; opacity:0.01; position:absolute;"type="text" name="folder" value="../database" />
			<a class="nav-link scarica" type="button btn-success" href="#" onclick="jQuery('#formscarica').submit();return false;">Scarica</a>
	</form>
		  </li>
	-->
		  
		  <li role="presentation" class="nav-item">
          <a class="nav-link" href="cambianome.php"> Nome</a></li>

		  <li role="presentation" class="nav-item">
          <a class="nav-link" href="cambia.php"> Pass</a></li>
		  <li role="presentation" class="nav-item">
          <a class="nav-link" href="bloccaip.php"> Blocca IP</a></li>
          <li role="presentation" class="nav-item"><a class="nav-link" href="esci.php">Esci</a></li></ul></div></div></nav>
        
        
        <main class="page lanidng-page"><?php  ?>
        
        
        
        
        
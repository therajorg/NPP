<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="HIPAA - Notice of Privacy Practices">
	<meta name="author" content="The Raj Organization">
	<meta name="keywords" content="HIPAA, Privacy, Privacy Practices">
	<link rel="shortcut icon" href="images/favicon.png">
	<title>Notice of Privacy Practices</title>

	<!-- jq -->
	<script src="3rd/jq/jquery-2.0.0.min.js"></script>

	<!-- jqui -->
	<!--script src="js/3rd/jqui/js/jquery-ui-1.10.3.custom.min.js"></script-->
	<!--link href="js\3rd\jqui\css\ui-lightness/query-ui-1.10.3.custom.min.css" rel="stylesheet"-->

	<!-- bs -->	
	<link href="3rd/bs/css/bootstrap.min.css" rel="stylesheet">
	<!--link href="3rd/bs/css/bootstrap-theme.min.css" rel="stylesheet"-->	
	<script src="3rd/bs/js/bootstrap.min.js"></script>
		
	<!-- fa -->
	<link rel="stylesheet" href="3rd/fa/css/font-awesome.min.css">

	<!-- npp -->
	<script type="text/javascript">var lang = "es";</script>
	<script src="js/npp.js"></script>
	<link href="css/npp.css" rel="stylesheet">
	<link href="css/fonts/fonts.css" rel="stylesheet">

	<!-- purl -->
	<script src="3rd/purl/purl.js"></script>

	<!-- eqht -->
	<script src="3rd/eqht/grids.js"></script>
    
	<!-- sto -->
	<script src="3rd/sto/jquery.scrollTo.min.js"></script>
</head>

<body id="bodyID">

<!-- Fixed navbar -->
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="./"><i class="fa fa-home fa-fw"></i>&nbsp;&nbsp;<span id="companynameID"></span></a>
	</div>
	<div class="navbar-collapse collapse navbar-right" style="text-align:right;">
	  <ul class="nav navbar-nav">
		<li><a href="" onClick="gotopage('rights');return false;"><i class="fa fa-user fa-fw"></i>&nbsp;SUS DERECHOS</a></li>
		<li><a href="" onClick="gotopage('choices');return false;"><i class="fa fa-comments fa-fw"></i>&nbsp;SUS OPCIONES</a></li>
		<li><a href="" onClick="gotopage('uses');return false;"><i class="fa fa-eye fa-fw"></i>&nbsp;NUESTROS USOS</a></li>
		<li class="divider"></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tasks fa-fw"></i>&nbsp;MÁS... <b class="caret"></b></a>
		  <ul class="dropdown-menu">
			<li><a href="" onClick="gotopage('responsibilities');return false;"><i class="fa fa-shield fa-fw"></i>&nbsp;Nuestras responsabilidades</a></li>			
			<li><a href="" onClick="gotopage('changes');return false;"><i class="fa fa-edit fa-fw"></i>&nbsp;Cambios a los términos</a></li>			
		  </ul>
		</li>
	  </ul>
	</div>
  </div>
</div>

<div class="container" style="padding:70px 0px 0px 0px;text-align:center;">
	&nbsp;
</div>
<div id="enablejsID" class="container" style="background-color:yellow;color:red;padding:10px 0px;text-align:center;font-weight:bold;font-size:1.5em;">
	<span>Please enable JavaScript to use this site.</span>
</div>

<!--div class="container" style="padding:80px 0px 0px 0px;text-align:center;color:rgba(255,255,255,0.85);font-size:4em;text-shadow:-1px -1px 1px rgba(0,0,0,0.1);"-->
<div id="mpiconscontainerID" class="container" style="padding:0px 0px 0px 0px;text-align:center;color:rgba(255,255,255,0.8);font-size:3.5em;text-shadow:-1px -1px 2px rgba(0,0,0,0.1);">
	<div class="row hidden-xs" style="padding-bottom:30px;">
        <i class="fa fa-h-square fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-ambulance fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-medkit fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-user-md fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-hospital-o fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-stethoscope fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-wheelchair fa-fw"></i>&nbsp;&nbsp;
        <i class="fa fa-plus-square fa-fw"></i>
    </div>
</div>


<div class="container" id="mpsection1containderID">
	<div class="row" style="text-align:center;color:rgba(102,102,102,1);font-family:'oslt';">
    	<div style="font-size:1.75em;text-shadow:-1px -1px 2px rgba(0,0,0,0.1);padding-bottom:15px;">Notificación de Prácticas de Privacidad</div>
    
    	<div style="font-size:2em;text-shadow:-1px -1px 2px rgba(0,0,0,0.1);"><i class="fa fa-star-o fa-fw" style="font-size:0.6em;color:rgba(153,153,153,0.65);"></i> <span style="white-space:nowrap;">Su Información</span> <i class="fa fa-star-o fa-fw" style="font-size:0.6em;color:rgba(153,153,153,0.65);"></i> <span style="white-space:nowrap;">Sus Derechos</span> <i class="fa fa-star-o fa-fw" style="font-size:0.6em;color:rgba(153,153,153,0.65);"></i> <span style="white-space:nowrap;">Nuestras Responsabilidades</span> <i class="fa fa-star-o fa-fw" style="font-size:0.6em;color:rgba(153,153,153,0.65);"></i></div>
        <div style="color:rgba(0,0,0,1.0);font-family:'oslt';font-size:1.2em;padding:15px 0px 30px 0px;">Esta notificación describe cómo puede utilizarse y divulgarse su información médica, y cómo puede acceder usted a esta información. <span style="font-family:'osreg';">Revísela con cuidado.<span></div>
    </div>
</div>

<div class="container">
	<div class="row" style="text-align:center;">
		<div class="col-xs-6 col-sm-3" style="text-align:center;" onClick="gotopage('rights');return false;">
        	<div class="section scolor1">
                <div class="title tcolor1"><i class="fa fa-user fa-fw"></i>&nbsp;SUS DERECHOS</div>
                <div id="mpsubcontentdiv1ID" class="content ccolor1">Cuando se trata de su información médica, <span style="text-decoration:underline;font-family:'ossb';">usted tiene ciertos derechos</span>.</div>
            </div>
		</div>
		<div class="col-xs-6 col-sm-3" style="text-align:center;" onClick="gotopage('choices');return false;">
        	<div class="section scolor2">
                <div class="title tcolor2"><i class="fa fa-comments fa-fw"></i>&nbsp;SUS OPCIONES</div>
                <div  id="mpsubcontentdiv2ID" class="content ccolor2">Para determinada información médica, puede <span style="text-decoration:underline;font-family:'ossb';">decirnos sus decisiones</span> sobre qué compartimos.</div>
            </div>
		</div>
		<div class="col-xs-6 col-sm-3" style="text-align:center;" onClick="gotopage('uses');return false;">
        	<div class="section scolor3">
                <div class="title tcolor3"><i class="fa fa-eye fa-fw"></i>&nbsp;NUESTROS USOS</div>
                <div  id="mpsubcontentdiv3ID" class="content ccolor3"><span style="text-decoration:underline;font-family:'ossb';">Por lo general, ¿cómo utilizamos</span> o compartimos su información médica?</div>
            </div>
		</div>
		<div class="col-xs-6 col-sm-3" style="text-align:center;" onClick="gotopage('more');return false;">
        	<div class="section scolor4">
                <div class="title tcolor4"><i class="fa fa-tasks fa-fw"></i>&nbsp;MÁS...</div>
                <div  id="mpsubcontentdiv4ID" class="content ccolor4"><span style="text-decoration:underline;font-family:'ossb';">Nuestras Responsabilidades</span>, y <span style="text-decoration:underline;font-family:'ossb';">Cambios</span> a los Términos de esta Notificación.</div>
            </div>
		</div>
	</div>
</div>




<div class="container" id="rightscontainerID" style="display:none;margin-top:20px;">
	<div class="row">
    	<div class="col-xs-12">
            <div class="subsection scolor1">
                <div class="title tcolor1"><i class="fa fa-user fa-fw"></i>&nbsp;SUS DERECHOS<span style="float:right;font-size:0.5em;"><button type="button" class="btn btn-default btn-sm ccolor1" onClick="gotopage('main');return false;">cerrar <i class="fa fa-times fa-fw"></i></button></span></div>
                <div class="content ccolor1" id="title1ID"></div>
                <div class="subcontent ccolor1" id="description1ID"></div>
                <div id="rightsaccordionDivID"></div>    
            </div>
        </div>    
    </div>
</div>

<div class="container" id="choicescontainerID" style="display:none;margin-top:20px;">
	<div class="row">
    	<div class="col-xs-12">
            <div class="subsection scolor2">
                <div class="title tcolor2"><i class="fa fa-comments fa-fw"></i>&nbsp;SUS OPCIONES<span style="float:right;font-size:0.5em;"><button type="button" class="btn btn-default btn-sm ccolor2" onClick="gotopage('main');return false;">cerrar <i class="fa fa-times fa-fw"></i></button></span></div>
                <div class="content ccolor2" id="title2ID"></div>
                <div class="subcontent ccolor2" id="description2ID"></div>
                <div id="choicesaccordionDivID"></div>
            </div>
        </div>
    </div>
</div>


<div class="container" id="usescontainerID" style="display:none;margin-top:20px;">
	<div class="row">
    	<div class="col-xs-12">
    	<div class="subsection scolor3">
            <div class="title tcolor3"><i class="fa fa-eye fa-fw"></i>&nbsp;NUESTROS USOS Y DIVULGACIONES<span style="float:right;font-size:0.5em;"><button type="button" class="btn btn-default btn-sm ccolor3" onClick="gotopage('main');return false;">cerrar <i class="fa fa-times fa-fw"></i></button></span></div>
            <div class="content ccolor3" id="title3ID"></div>
            <div class="subcontent ccolor3" id="description3ID"></div>
		<div id="uses1accordionDivID"></div>
    	</div>
        </div>
    </div>

	<div class="row">
    	<div class="col-xs-12">
            <div class="subsection scolor3">
                <div class="title tcolor3"><i class="fa fa-eye fa-fw"></i>&nbsp;NUESTROS USOS Y DIVULGACIONES<span style="float:right;font-size:0.5em;"><button type="button" class="btn btn-default btn-sm ccolor3" onClick="gotopage('main');return false;">cerrar <i class="fa fa-times fa-fw"></i></button></span></div>
                <div class="content ccolor3" id="title4ID"></div>
                <div class="subcontent ccolor3" id="description4ID"></div>
            <div id="uses2accordionDivID"></div>
            </div>
        </div>
    </div>
</div>


<div class="container" id="morecontainerID" style="display:none;margin-top:20px;">
	<div class="row" id="responsibilitiesTopDivID">
    	<div class="col-xs-12">
            <div class="subsection scolor4">
                <div class="title tcolor4"><i class="fa fa-shield fa-fw"></i>&nbsp;NUESTRAS RESPONSABILIDADES<span style="float:right;font-size:0.5em;"><button type="button" class="btn btn-default btn-sm ccolor4" onClick="gotopage('main');return false;">cerrar <i class="fa fa-times fa-fw"></i></button></span></div>
                <div id="responsibilitiesDivID" class="sectionul"></div>
            </div>
        </div>
    </div>
	<div class="row" id="changesTopDivID">
    	<div class="col-xs-12">
            <div class="subsection scolor4">
                <div class="title tcolor4"><i class="fa fa-edit fa-fw"></i>&nbsp;CAMBIOS A LOS TÉRMINOS<span style="float:right;font-size:0.5em;"><button type="button" class="btn btn-default btn-sm ccolor4" onClick="gotopage('main');return false;">cerrar <i class="fa fa-times fa-fw"></i></button></span></div>
                <div id="changesDivID" class="sectionul"></div>
            </div>
        </div>
    </div>
</div>

<div id="stickyfooter">
	<div class="container">
		<hr style="height:2px;"/>
		<div class="row">
			<div class="col-sm-4" style="text-align:left;">
            	<span>
                <i class="fa fa-calendar-o fa-fw"></i> Fecha de Vigencia: <span id="effectivedateID"></span><br/>
            	<i class="fa fa-globe fa-fw"></i> Sitio Web: <span id="websiteID"></span></span>
			</div>
			<div class="col-sm-8" style="text-align:left;">
                <span style="font-family:'ossb'">Para preguntas, favor de ponerse en contacto con:</span><br/>
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-user fa-fw"> </i>&nbsp;&nbsp;<span id="officernameID"></span>, <span id="officertitleID"></span><br/>
                        <i class="fa fa-envelope-o fa-fw"></i> <span id="addressID"></span>
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone fa-fw"></i> <span id="phoneID"></span><br/>
                        <i class="fa fa-laptop fa-fw"></i> <span id="emailID"></span>
                    </div>
                </div>
			</div>
		</div>
	</div>
</div>
    
</body>
</html>
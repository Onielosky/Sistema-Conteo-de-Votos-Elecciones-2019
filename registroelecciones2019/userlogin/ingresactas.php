<?php
include_once('link.php');
?>

<div id="frmingresactas">
<form class="form-horizontal" action="ingresactas_code.php" method="POST">
	<h1>&nbsp;      </h1>&nbsp;
  
  <!DOCTYPE html>
<html lang="es">
<head>
  <title>Ingresar Actas</title>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  
  <link rel="icon" type="image/png" href="../img/favicon.ico" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
        <script type="text/javascript">
        var sdkInstance="appInsightsSDK";window[sdkInstance]="appInsights";var aiName=window[sdkInstance],aisdk=window[aiName]||function(e){
          function n(e){t[e]=function(){var n=arguments;t.queue.push(function(){t[e].apply(t,n)})}}var t={config:e};t.initialize=!0;var i=document,a=window;setTimeout(function(){var n=i.createElement("script");n.src=e.url||"https://az416426.vo.msecnd.net/next/ai.2.min.js",i.getElementsByTagName("script")[0].parentNode.appendChild(n)});try{t.cookie=i.cookie}catch(e){}t.queue=[],t.version=2;for(var r=["Event","PageView","Exception","Trace","DependencyData","Metric","PageViewPerformance"];r.length;)n("track"+r.pop());n("startTrackPage"),n("stopTrackPage");var s="Track"+r[0];if(n("start"+s),n("stop"+s),n("setAuthenticatedUserContext"),n("clearAuthenticatedUserContext"),n("flush"),!(!0===e.disableExceptionTracking||e.extensionConfig&&e.extensionConfig.ApplicationInsightsAnalytics&&!0===e.extensionConfig.ApplicationInsightsAnalytics.disableExceptionTracking)){n("_"+(r="onerror"));var o=a[r];a[r]=function(e,n,i,a,s){var c=o&&o(e,n,i,a,s);return!0!==c&&t["_"+r]({message:e,url:n,lineNumber:i,columnNumber:a,error:s}),c},e.autoExceptionInstrumented=!0}return t
        }({
          instrumentationKey:"27bba73a-f4cd-4695-a55a-2629d49d73fa"
        });
    
        window[aiName]=aisdk,aisdk.queue&&0===aisdk.queue.length&&aisdk.trackPageView({});
  </script>
         
		<div class="ui blue fixed inverted large menu">
			<div class="ui fluid container">
				</a>
				<a href="#" class="header item">
					<h5>INGRESO DE ACTAS<br>Segunda Elección Presidencial 2019</h5>
				</a>
				<div class="right menu">
				</div>
			</div>
	  	</div>

      <h1>      </h1>

  <div class="form-row">
	<div class="&nbsp;form-group col-md-3">
    <label for="inputmesa">Mesa Número:</label>
      <input type="text" name="mesa" class="form-control" id="mesa" placeholder="Ingresar">
    </div>
  </div>
  <div class="form-row">
	<div class="&nbsp;form-group col-md-3">
    <label for="inputPapeletasmunicipio">Municipio:</label>
      <input type="text" name="municipio" class="form-control" id="municipio" placeholder="Ingresar">
    </div>
  </div>
  <div class="form-row">
	<div class="&nbsp;form-group col-md-3">
    <label for="inputdepartamento">Departamento:</label>
      <input type="text" name="departamento" class="form-control" id="departamento" placeholder="Ingresar">
    </div>
  </div>

  <div class="&nbsp;form-group col-md-3">
      <label for="inputeleccion">Elección:</label>
      <select name="eleccion" id="inputeleccion" class="form-control">
        <option selected>PRESIDENTE Y VICEPRESIDENTE</option>
        <option>...</option>
      </select>
    </div>&nbsp;
    </div>&nbsp;


    <div class="form-row">
	<div class="form-group col-md-2">
    <label for="inputrecibidas">Papeletas Recibidas:</label>
      <input type="text" name="recibidas" class="form-control" id="recibidas" placeholder="Ingresar">
    </div>
  </div>
  <div class="form-row">
	<div class="form-group col-md-2">
    <label for="inputvamos">Partido VAMOS:</label>
      <input type="text" name="vamos" class="form-control" id="vamos" placeholder="Ingresar">
    </div>
  </div>
  <div class="form-row">
	<div class="form-group col-md-2">
    <label for="inputune">Partido UNE:</label>
      <input type="text" name="une" class="form-control" id="une" placeholder="Ingresar">
    </div>
  </div>
  <div class="form-row">
	<div class="form-group col-md-2">
    <label for="inputvalidos">Total Votos Válidos:</label>
      <input type="text" name="validos" class="form-control" id="validos" placeholder="Ingresar">
    </div>
  </div>
  <div class="form-row">
	<div class="form-group col-md-2">
    <label for="inputnulos">Votos Nulos:</label>
      <input type="text" name="nulos" class="form-control" id="nulos" placeholder="Ingresar">
    </div>
  </div>
  <div class="form-row">
	<div class="form-group col-md-2">
    <label for="inputblancos">Votos Blancos:</label>
      <input type="text" name="blancos" class="form-control" id="blancos" placeholder="Ingresar">
    </div>&nbsp;
  </div>&nbsp;
  <div class="form-row">
	<div class="form-group col-md-3">
    <label for="inputemitidos">Votos Válidamente Emitidos:</label>
      <input type="text" name="emitidos" class="form-control" id="emitidos" placeholder="Ingresar">
    </div>
  </div>
  <div class="form-row">
	<div class="form-group col-md-3">
    <label for="inputinvalidos">Votos Inválidos:</label>
      <input type="text" name="invalidos" class="form-control" id="invalidos" placeholder="Ingresar">
    </div>
  </div>
  <div class="form-row">
	<div class="form-group col-md-3">
    <label for="inputimpugnados">Votos Impugnados:</label>
      <input type="text" name="impugnados" class="form-control" id="impugnados" placeholder="Ingresar">
    </div>&nbsp;
  </div>
  
  <div class="form-row">
	<div class="form-group col-md-3">
        <button type="submit" class="btn btn-primary">GRABAR</button>
    </div>
  </div>
</form>

<button><b><a href="welcome.php">Página de Inicio</a></b></button>
&nbsp; &nbsp; 
<button><b><a href="logout.php">Salir</a></b></button>
      </ul>
		</div>
		
		
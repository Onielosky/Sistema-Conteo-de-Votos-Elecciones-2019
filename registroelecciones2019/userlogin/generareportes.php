<?php
      include "conexion.php";
                             
      //$resultadoVamos ="";
      //$resultadoUne = "";

      $sql = "SELECT SUM(Vamos) as TotalVamos, SUM(Une) as TotalUne, SUM(Nulos) as TotalNulos, SUM(Validos) as TotalValidos, SUM(Blancos) as TotalBlancos, SUM(Emitidos) as TotalEmitidos, SUM(Invalidos) as TotalInvalidos, SUM(Impugnados) as TotalImpugnados FROM ep2019";
      $sql = $mysqli->query($sql) or die (mysql_error($mysqli));
      // $fila=$sql->fetch_all();
      while ($row =  $sql->fetch_array()) {                            

      $resultadoVamos = $row["TotalVamos"];
      $resultadoUne = $row["TotalUne"];
      $TotalValidos = $row["TotalValidos"];
      $resultadoNulos = $row["TotalNulos"];
      $resultadoBlancos = $row["TotalBlancos"];
      $TotalEmitidos = $row["TotalEmitidos"];
      $resultadoInvalidos = $row["TotalInvalidos"];
      $resultadoImpugnados = $row["TotalImpugnados"];

      $porcentajeVamos = (100 * $resultadoVamos) / $TotalValidos;
      $porcentajeUne = (100 * $resultadoUne) / $TotalValidos;
      $porcentajeValidos = (100 * $TotalValidos) / $TotalEmitidos;
      $porcentajeNulos = (100 * $resultadoNulos) / $TotalEmitidos;
      $porcentajeBlancos = (100 * $resultadoBlancos) / $TotalEmitidos;
      $porcentajeEmitidos = (100 * $TotalEmitidos) / 8150221;
      $porcentajeInvalidos = (100 * $resultadoInvalidos) / $TotalEmitidos;
      $porcentajeImpugnados = (100 * $resultadoImpugnados) / $TotalEmitidos;

      }
                              

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <title>Resultados preliminares Segunda Elección Presidencial 2019</title>
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
                        
					<h5>GUATEMALA<br>Resultados Preliminares Segunda Elección Presidencial 2019</h5>
				</a>
				<div class="right menu">
				</div>
			</div>
	  	</div>&nbsp;
          <h1>      </h1>

          <div class="ui container">

<div id="openData" class="sixteen wide mobile sixteen wide tablet sixteen wide computer column">
    <div class="ui column" style="padding: 10px; 0px; 5px; 0px;">
         Datos abiertos: <a href="#" onClick="window.print();"><i class="print icon"></i> Imprimir</a>
    </div>
</div>

<div class="ui two column padded grid">

<div class="sixteen wide mobile eight wide tablet eight wide computer column">
    <div class="ui fluid raised card" style="height: 431px; overflow: auto;">
        <div class="content">
        
<h2 class="ui sub header center aligned">DETALLE DE VOTOS</h2>
</span>

<table id="idep2019" class="ui very compact selectable celled single line unstackable fixed table">
  <thead>
  <tr>
        <th class="left aligned eight wide"></th>
        <th class="center aligned four wide"><b>Votos</b></th>
        <th class="center aligned four wide"><b>%</b></th>
  </tr>
  </thead>
  <tbody>
  <tr>
        <td class="left aligned"><b>VAMOS:</b></td>
        <td class="right aligned"><b><?php echo $resultadoVamos?></b></td>
        <td class="right aligned"><b><?php echo round ($porcentajeVamos,2)?><?php echo "%"?></b></td>
  </tr>
  <tr>
        <td class="left aligned"><b>UNE:</b></td>
        <td class="right aligned"><b><?php echo $resultadoUne ?></b></td>
        <td class="right aligned"><b><?php echo round ($porcentajeUne,2)?><?php echo "%"?></b></td>
  </tr>

<table id="idep2019" class="ui very compact selectable celled single line unstackable fixed table">
  <thead>
  <tr>
        <th class="left aligned eight wide"></th>
        <th class="center aligned four wide"><b>Votos</b></th>
        <th class="center aligned four wide"><b>%</b></th>
  </tr>
  </thead>
  <tbody>
  <tr>
        <td class="left aligned">Total Votos Válidos:</td>
        <td class="right aligned"><b><?php echo $TotalValidos?></b></td>
        <td class="right aligned"><b><?php echo round ($porcentajeValidos,2)?><?php echo "%"?></b></td>
  </tr>
  <tr>
        <td class="left aligned">Votos Nulos:</td>
        <td class="right aligned"><?php echo $resultadoNulos?></td>
        <td class="right aligned"><?php echo round ($porcentajeNulos,2)?><?php echo "%"?></td>
  </tr>
  <tr>
        <td class="left aligned">Votos en Blanco:</td>
        <td class="right aligned"><?php echo $resultadoBlancos?></td>
        <td class="right aligned"><?php echo round ($porcentajeBlancos,2)?><?php echo "%"?></td>
  </tr>
  <tr>
        <td class="left aligned"><span title="Suma de los Votos Válidos, Votos Nulos y Votos en Blanco.">Total Votos Válidamente Emitidos: <i class="question circle icon"></i></span> </td>
        <td class="right aligned"><b><?php echo $TotalEmitidos?></b></td>
        <td class="right aligned"><b><?php echo round ($porcentajeEmitidos,2)?><?php echo "%"?></b></td>
  </tr>
  <tr>
        <td class="left aligned">Votos Inválidos:</td>
        <td class="right aligned"><?php echo $resultadoInvalidos?></td>
        <td class="right aligned"><?php echo round ($porcentajeInvalidos,2)?><?php echo "%"?></td>
  </tr>
  <tr>
        <td class="left aligned">Impugnaciones:</td>
        <td class="right aligned"><?php echo $resultadoImpugnados?></td>
        <td class="right aligned"><?php echo round ($porcentajeImpugnados,2)?><?php echo "%"?></td>
  </tr>
  </tbody>
</table>			
                </div>	
    </div>	
</div>

<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
        <br> <br> <br> <br> <br> <br> <br>
        <button><b><a href="welcome.php">Página de Inicio</a></b></button>
        <br> <br> <br>
		<button><b><a href="ingresactas.php">Ingreso de Actas</a></b></button>
        <br> <br> <br>
		<button><b><a href="vergrafica.php">Ver en Gráfica</a></b></button>
        <br> <br> <br>
        <button><b><a href="logout.php">Salir</a></b></button>
		</ul>
		</div>
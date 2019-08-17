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

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Resultados de Votos en Gráfica</title>

		<style type="text/css">
@import 'https://code.highcharts.com/css/highcharts.css';

#container {
	height: 400px;
	max-width: 800px;
	margin: 0 auto;
}

/* Link the series colors to axis colors */
.highcharts-color-0 {
	fill: #7cb5ec;
	stroke: #7cb5ec;
}
.highcharts-axis.highcharts-color-0 .highcharts-axis-line {
	stroke: #7cb5ec;
}
.highcharts-axis.highcharts-color-0 text {
	fill: #7cb5ec;
}
.highcharts-color-1 {
	fill: #90ed7d;
	stroke: #90ed7d;
}
.highcharts-axis.highcharts-color-1 .highcharts-axis-line {
	stroke: #90ed7d;
}
.highcharts-axis.highcharts-color-1 text {
	fill: #90ed7d;
}


.highcharts-yaxis .highcharts-axis-line {
	stroke-width: 2px;
}

		</style>
	</head>
	<body>
<script src="Highcharts-7.1.3/code/highcharts.js"></script>
<script src="Highcharts-7.1.3/code/modules/exporting.js"></script>

<div id="container"></div>


		<script type="text/javascript">
Highcharts.chart('container', {

    chart: {
        type: 'column',
        styledMode: true
    },

    title: {
        text: 'VOTOS VÁLIDOS POR ORGANIZACIÓN POLÍTICA'
    },

    yAxis: [{
        className: 'highcharts-color-0',
        title: {
            text: 'VAMOS'
        }
    }, {
        className: 'highcharts-color-1',
        opposite: true,
        title: {
            text: 'UNE'
        }
    }],

    plotOptions: {
        column: {
            borderRadius: 5
        }
    },

    series: [{
        name: 'VAMOS',
        data: [<?php echo $resultadoVamos?>]

    }, {
        name: 'UNE',
        data: [<?php echo $resultadoUne?>],
        yAxis: 1
    }]

});
		</script>
	</body>
    
</html>


<br>
<br>
<br>
<br>&nbsp;
        <button><b><a href="welcome.php">Página de Inicio</a></b></button>
        &nbsp;
		<button><b><a href="ingresactas.php">Ingreso de Actas</a></b></button>
        &nbsp;
        <button><b><a href="logout.php">Salir</a></b></button>
		</ul>
		</div>

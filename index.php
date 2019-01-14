<?php
	include_once('classes/getUrl.php');
	//include_once('classes/convert.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<!-- Style -->
		<link rel="stylesheet" href="style/style.css" type="text/css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-12" id="lista">
					<h3 class="sredina">Kursna lista na dan: <?php echo $ExRate['date']?> 
					<a href="konvektor.php"><button class="btn btn-primary" id="buttonConvector">Konvektor Valuta</button></a></h3>
					<table class="table table-hover">
						
						<tr>
							<th></th>
							<th><span><img src="images/srb.png" alt="Srbija"  class="icon"></span>1 RSD</th>
							<th><img src="images/usa.png" alt="USA"  class="icon"></span>1 USA</th>
							<th><img src="images/euro.png" alt="Euro"  class="icon"></span>1 EUR</th>
							<th><img src="images/chf.png" alt="Swiss"  class="icon"></span>1 CHF</th>
							<th><img src="images/gbp.png" alt="UK"  class="icon"></span>1 GBP</th>
							<th><img src="images/aus.png" alt="Australia"  class="icon"></span>1 AUS</th>
							<th><img src="images/can.png" alt="Canada"  class="icon"></span>1 CAN</th>
							<th><img src="images/jap.png" alt="Japan"  class="icon"></span>1 JPY</th>
							<th><img src="images/rus.png" alt="Russia"  class="icon"></span>1 RUB</th>
						</tr>
						
						<tr>
							
						</tr>
						<tr> <!--Serbian  -->
						<th><img src="images/srb.png" alt="Srbija"  class="icon"></span><em>RSD</em><br><em>&nbsp&nbspInverzno</em></th>
						<td>---------- <br><br>----------</td>
						<td><?php echo(round($ExRate['usaMiddle'],3)) ?> <br><br><?php echo(round(1/$ExRate['usaMiddle'],4)) ?></td>
						<td><?php echo(round($ExRate['euroMiddle'],3)) ?> <br><br> <?php echo(round(1/$ExRate['euroMiddle'],4)) ?></td>
						<td><?php echo(round($ExRate['chfMiddle'],3)) ?> <br><br><?php echo(round(1/$ExRate['chfMiddle'],4)) ?></td>
						<td><?php echo(round($ExRate['gbpMiddle'],3)) ?> <br><br><?php echo(round(1/$ExRate['gbpMiddle'],4)) ?> </td>
						<td><?php echo(round($ExRate['audMiddle'],3)) ?> <br><br><?php echo(round(1/$ExRate['audMiddle'],4)) ?></td>
						<td><?php echo(round($ExRate['cadMiddle'],3)) ?><br><br><?php echo(round(1/$ExRate['cadMiddle'],4)) ?></td>
						<td><?php echo(round($ExRate['jpyMiddle'],3)) ?> <br><br><?php echo(round(1/$ExRate['jpyMiddle'],4)) ?> </td>
						<td><?php echo(round($ExRate['rubMiddle'],3)) ?> <br><br><?php echo(round(1/$ExRate['rubMiddle'],4)) ?> </td>
					</tr>
					<tr><!--USA  -->
					<th><img src="images/usa.png" alt="USA"  class="icon"></span><em>USA</em><br><em>&nbsp&nbspInverzno</em></th>
					<td><?php echo(round(1/$ExRate['usaMiddle'],4)) ?> <br><br><?php echo(round($ExRate['usaMiddle'],3)) ?> </td>
					<td>----- <br><br>-----</td>
					<td><?php echo(round(($ExRate['euroMiddle'])/($ExRate['usaMiddle']),3)) ?><br><br><?php echo(round(($ExRate['usaMiddle'])/($ExRate['euroMiddle']),3))?></td>
					<td><?php echo(round(($ExRate['chfMiddle'])/($ExRate['usaMiddle']),3)) ?><br><br><?php echo(round(($ExRate['usaMiddle'])/($ExRate['chfMiddle']),3))?></td>
					<td><?php echo(round(($ExRate['gbpMiddle'])/($ExRate['usaMiddle']),3)) ?><br><br><?php echo(round(($ExRate['usaMiddle'])/($ExRate['gbpMiddle']),3))?></td>
					<td><?php echo(round(($ExRate['audMiddle'])/($ExRate['usaMiddle']),3)) ?><br><br><?php echo(round(($ExRate['usaMiddle'])/($ExRate['audMiddle']),3))?></td>
					<td><?php echo(round(($ExRate['cadMiddle'])/($ExRate['usaMiddle']),3)) ?><br><br> <?php echo(round(($ExRate['usaMiddle'])/($ExRate['cadMiddle']),3))?></td>
					<td><?php echo(round(($ExRate['jpyMiddle'])/($ExRate['usaMiddle']),3)) ?><br><br> <?php echo(round(($ExRate['usaMiddle'])/($ExRate['jpyMiddle']),3))?></td>
					<td><?php echo(round(($ExRate['rubMiddle'])/($ExRate['usaMiddle']),3)) ?><br><br> <?php echo(round(($ExRate['usaMiddle'])/($ExRate['rubMiddle']),3))?></td>
				</tr>
				<tr>
					<th><img src="images/euro.png" alt="Euro"  class="icon"></span><em>EUR</em><br><em>&nbsp&nbspInverzno</em></th>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>----- <br><br>-----</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
				</tr>
				<tr>
					<th><img src="images/chf.png" alt="Swiss"  class="icon"></span><em>CHF</em><br><em>&nbsp&nbspInverzno</em></th>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>----- <br><br>-----</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
				</tr>
				<tr>
					<th><img src="images/gbp.png" alt="UK"  class="icon"></span><em>GBP</em><br><em>&nbsp&nbspInverzno</em></th>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>----- <br><br>-----</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
				</tr>
				<tr>
					<th><img src="images/aus.png" alt="Australia"  class="icon"></span><em>AUS</em><br><em>&nbsp&nbspInverzno</em></th>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>----- <br><br>-----</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
				</tr>
				<tr>
					<th><img src="images/can.png" alt="Canada"  class="icon"></span><em>CAN</em><br><em>&nbsp&nbspInverzno</em></th>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>----- <br><br>-----</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
				</tr>
				<tr>
					<th><img src="images/jap.png" alt="Japan"  class="icon"></span><em>JPY</em><br><em>&nbsp&nbspInverzno</em></th>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>----- <br><br>-----</td>
					<td>1231 <br><br> 554466</td>
				</tr>
				<tr>
					<th><img src="images/rus.png" alt="Russia"  class="icon"></span><em>RUB</em><br><em>&nbsp&nbspInverzno</em></th>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>1231 <br><br> 554466</td>
					<td>----- <br><br>-----</td>
				</tr>
				
			</table>
		</div>
	</div>
  </body>
</html>
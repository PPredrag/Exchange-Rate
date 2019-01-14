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
	<body><!-- DIV to convert values  -->
	
	<div class="col-sm-12" id="konvertor">
		<form action="" method="" id="ajaxData">
			<h4 for="" class="sredina">Konvektor Valuta</h4><br>
			<div class="col-sm-3">
				<label for="">Unesite Vrednost</label>
				<input type="text" placeholder="Unesite Vrednost" class="form-control" name="inputValue" id="input">
			</div>
			<div class="col-sm-3">
				<label for="">Izaberite Valutu</label>
				<select name="select1" id="form-item-from" class="form-control">
					<option value="<?php echo(1) . ":SRB" ?>">SRB</option>
					<option value="<?php echo(round($ExRate['usaMiddle'],3)) . ":USA" ?>">USA</option>
					<option value="<?php echo(round($ExRate['euroMiddle'],3)) . ":EURO" ?>">EURO</option>
					<option value="<?php echo(round($ExRate['chfMiddle'],3)) . ":"?>:CHF">CHF</option>
					<option value="<?php echo(round($ExRate['gbpMiddle'],3)) . ":GBP"?>">GBP</option>
					<option value="<?php echo(round($ExRate['audMiddle'],3)) . ":AUS"?>">AUS</option>
					<option value="<?php echo(round($ExRate['cadMiddle'],3)) . ":CAN"?>">CAN</option>
					<option value="<?php echo(round($ExRate['jpyMiddle'],3)) . ":JAP"?>">JAP</option>
					<option value="<?php echo(round($ExRate['rubMiddle'],3)) . ":RUS"?>">RUS</option>
				</select>
			</div>
			<div class="col-sm-1">
				<label for="">&nbsp&nbsp&nbsp&nbsp&nbsp</label>
				<button  class="btn btn-primary" id="SwapButton">&nbsp&nbsp&nbsp&nbsp &#8644 &nbsp&nbsp&nbsp&nbsp&nbsp</button>
			</div>
			<div class="col-sm-3">
				<label for="">Izaberite Valutu</label>
				<select name="select2" id="form-item-to" class="form-control">
					<option value="<?php echo(1) . ":SRB" ?>">SRB</option>
					<option value="<?php echo(round($ExRate['usaMiddle'],3)) . ":USA" ?>">USA</option>
					<option value="<?php echo(round($ExRate['euroMiddle'],3)) . ":EURO" ?>">EURO</option>
					<option value="<?php echo(round($ExRate['chfMiddle'],3)) . ":"?>:CHF">CHF</option>
					<option value="<?php echo(round($ExRate['gbpMiddle'],3)) . ":GBP"?>">GBP</option>
					<option value="<?php echo(round($ExRate['audMiddle'],3)) . ":AUS"?>">AUS</option>
					<option value="<?php echo(round($ExRate['cadMiddle'],3)) . ":CAN"?>">CAN</option>
					<option value="<?php echo(round($ExRate['jpyMiddle'],3)) . ":JAP"?>">JAP</option>
					<option value="<?php echo(round($ExRate['rubMiddle'],3)) . ":RUS"?>">RUS</option>
				</select>
			</div>
			
			<div class="col-sm-1 col-md-offset-6">
				<button  type="submit" id="dugme" class="btn btn-danger" name="submitConvert">Izracunaj</button>
			</div>
		</form>
	</div>
	<div class="col-sm-12" id="result">
		<h3>Obračun je informativnog karaktera</h3>
		<p  id="conRsultat">Iznos od <?php echo $split['valueInput'] . "&nbsp&nbsp&nbsp" .  $split['currency1']?> je jednak <?php echo  $parseUrl->convert() . "&nbsp&nbsp&nbsp" . $split['currency2']?></p>
		
	</div> 
	<p class="pisi"></p>
</div>
</body>
<script>
	$(function(){
		var input = $('#input').val();
		var s1 = $('#form-item-from').val();
		var s2 = $('#form-item-to').val();
		//console.log(input);
		//console.log(s1);
		//console.log(s2);
		$('#input').on('change',function(){

			$.ajax({
				url:"classes/convert.php",
				type:"GET",
				data:$('#ajaxData').serialize(),
				/data:{
					input:$('input[name="inputValue"]').val(),
					s1:$('select[name="select1"]').val(),
					s2:$('select[name="select2"]').val()
				},*/
				success:function(response){
					$('.pisi').html(response);
				}
				});
		});
	});
</script>

<script src="js/swap.js"></script>
</html>
<?php
	class getUrl{
	public $api_id = "942611ab5dce6dd49b3e1f628ce03faf";
	// Get data from url
	public function url()
	{
		$url = "http://api.kursna-lista.info/{$this->api_id}/kursna_lista/json";
		$content = file_get_contents($url);
		$data = json_decode($content);
		//var_dump($data);
			if (empty($content))
			{
				die('Greška u preuzimanju podataka');
			}
		$kurs = array(
			"date"=>$data->result->date,
			"euroBuy"=>$data->result->eur->kup,
			"euroMiddle"=>$data->result->eur->sre,
			"euroSell"=>$data->result->eur->pro,
			"usdBuy"=>$data->result->usd->kup,
			"usaMiddle"=>$data->result->usd->sre,
			"usaSell"=>$data->result->usd->pro,
			"chfBuy"=>$data->result->chf->kup,
			"chfMiddle"=>$data->result->chf->sre,
			"chfSell"=>$data->result->chf->pro,
			"gbpBuy"=>$data->result->gbp->kup,
			"gbpMiddle"=>$data->result->gbp->sre,
			"gbpSell"=>$data->result->gbp->pro,
			"audBuy"=>$data->result->aud->kup,
			"audMiddle"=>$data->result->aud->sre,
			"audSell"=>$data->result->aud->kup,
			"cadBuy"=>$data->result->cad->kup,
			"cadMiddle"=>$data->result->cad->sre,
			"cadSell"=>$data->result->cad->kup,
			"jpyBuy"=>$data->result->jpy->kup,
			"jpyMiddle"=>$data->result->jpy->sre,
			"jpySell"=>$data->result->jpy->kup,
			"rubBuy"=>$data->result->rub->kup,
			"rubMiddle"=>$data->result->rub->sre,
			"rubSell"=>$data->result->rub->kup
						);
					return $kurs;
	}
	// convert one value to other
	public function convert(){
		if(isset($_GET['submitConvert'])){
			$valueInput = $_GET['inputValue'];
			$select1 = $_GET['select1'];
			$select2 = $_GET['select2'];
					echo round($covertRes = $valueInput * $select1/$select2,4);
		}
		
	}
	// to split Value in Option field
	public function splitSelect(){
	  $valueInput = !empty($_GET['inputValue']) ? $_GET['inputValue'] : "";
	  $select1 = !empty($_GET['select1']) ? $_GET['select1'] : ":";
	  $select2 = !empty($_GET['select2']) ? $_GET['select2'] : ":";
			$currency1 = explode(":", $select1);
			$currency2 = explode(":", $select2);
			//var_dump($currency2);
			$currency = array(
				"valueInput"=>$valueInput,
				"currency1"=>$currency1[1],
				"currency2"=>$currency2[1]
			);
			return $currency;	

	}
	// get middle rate for input curency 
	public function middleRate(){
		$valueInput = !empty($_GET['inputValue']) ? $_GET['inputValue'] : "";
		$middleRate1 = !empty($_GET['select1']) ? $_GET['select1'] : "";
	  	$middleRate2 = !empty($_GET['select2']) ? $_GET['select2'] : "";
	  		$middleRate1 = explode(":", $middleRate1);
	  		$middleRate2 = explode(":", $middleRate2);	
	  	    $middle = array(
	  	    	"valueInput"=>$valueInput,
	  	    	"middleRate1"=>$middleRate1[0],
	  	    	"middleRate2"=>$middleRate2[0]
	  	    );

	  	 return $middle;
	}	
}
$parseUrl = new getUrl;
$ExRate = $parseUrl->url();
$split = $parseUrl->splitSelect();
$middle = $parseUrl->middleRate();
//var_dump($middle);

?>
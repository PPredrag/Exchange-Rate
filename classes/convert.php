<?php 
	class Convert{
		public function pisi(){
			echo"radissss";
		}
		public function convert2(){
		if(isset($_GET['submitConvert'])){
			$valueInput = $_GET['inputValue'];
			$select1 = $_GET['select1'];
			$select2 = $_GET['select2'];
					return round($covertRes = $valueInput * $select1/$select2,4);
		}
		
	}

	 public function test(){
	 	if(isset($_GET['inputValue']) || (isset($_GET['select1'])) || (isset($_GET['select2']))){
	 		$input = $_GET['inputValue'];
	 		$s1 = $_GET['select1'];
			$s2 = $_GET['select2'];
			$sel1 = trim($s1,":");
			$sel2 = trim($s2,":");
				var_dump($sel2[0]);
			
			echo ($input . $s1 . $s2);
			//echo round($valueInput * $sel1/$sel2,4);
			
	 }
	}
	
	}

$instanca = new Convert();
//$instanca->pisi();	
//$instanca->convert2();	
$instanca->test();

?>
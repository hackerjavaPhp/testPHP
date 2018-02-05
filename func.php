<?php
   
	$arrayName = array('345345345' => array("+375-32-325-34-33", "Vlad"), '3453455445' => array("+375-32-345-54-55", "Elena"), "Vlad");
	$solt = '$1$rasmusle$';

	print_r(dataCrypt($arrayName, $solt));






	function dataCrypt($arr, $s){


		$resultArray = [];

		foreach ($arr as $key => $value) {

			if(is_array($value)) {

				foreach ($value as $key_2 => $value_2) {
					
					$resultArray[] = crypt($value_2, $s);

				}

			}else {
				$resultArray[] = crypt($value, $s);
			}

		}


		return $resultArray;


	}




?>
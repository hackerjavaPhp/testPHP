<?php
/*
 * Это массив с некоторыми данными, которые мы хотим изменить
 * при работе цикла.
 */

// 
$ArrPeople = array("Elena","Goha","Alena");
$solt = '$1$rasmusle$';

function dataCrypt($people, $s){

	$arrayName = array();

	for($i = 0 ; $i < count($people); $i++){
		
		
			$arrayName[] = crypt($people[$i], $s);
		

	}

	return $arrayName;

}

print_r(dataCrypt($ArrPeople, $solt));

// единственное не успел сделать для многомерных массивов цикл!!!




// не нужная функция

// function mdarr_parameter($needle, $job=false) {
//     if (is_array($needle)) {
//         foreach($needle as $name => $value) {
//             $needle[$name] = mdarr_parameter($value, $job);
//         }
//     } else {
//         // Now you do anything you want...
//         if ($job === true) {
//             $needle = stripslashes($needle);
//         } else {
//             $needle = addslashes($needle);
//         }
//     }
//     return $needle;
// }



?>
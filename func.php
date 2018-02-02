<?php
/*
 * Это массив с некоторыми данными, которые мы хотим изменить
 * при работе цикла.
 */

// 
$ArrPeople = array("Elena","Goha","Alena");

function dataMd5($people){

	$arrayName = array();

	for($i = 0 ; $i < count($people); $i++){
		
		
			$arrayName[] = md5($people[$i]);
		

	}

	return $arrayName;

}

print_r(dataMd5($ArrPeople));

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
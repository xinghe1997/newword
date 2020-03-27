<?php
	/**
	$min = '2018-3-9';
	$max = date('Y-m-d',time());
	$minList = explode("-",$min);
	$maxList = explode("-",$max);
	$gender = ($maxList[0] - $minList[0]) -1;
	//echo $minList[2] .'---'. $maxList[2];
	var_dump($minList[1]);
	var_dump($maxList[1]);
	if(($minList[1] == $maxList[1]) && ($maxList[2] >= $minList[2])){
		//echo 's';
		//$gender++;
	}else if($minList[1] > $maxList[1]){
		$gender++;
	}
	
	//echo $gender;
	$conn = mysqli_connect('127.0.0.6','root','123456','penson');
	$query = "insert into user values(null,'{$name}',{$gender},'{$birthday}','{$avatarFile}');";
		$result = mysqli_query($conn,$query);
		var_dump($result);
	**/
	//var_dump(empty(null));
	$a = 0;
	var_dump(isset($a));
	//echo isset(null);
	var_dump(empty($a));
	
?>
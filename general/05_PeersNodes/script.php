<?php

for($i = 0; $i < 5; $i ++){
	$one = $i + 1;
	$name = "";

	if($one < 10){
		$name = shell_exec("find . -type d -name '*0$one*' -print");
		$name = substr($name, 2);
	}
	else{
		$name = shell_exec("find . -type d -name '*$one*' -print");
		$name = substr($name, 2);
	}
	echo "\n $name is confirmed \n";
	$out = shell_exec("cp script.php $name/script.test");
	echo "\n $out \n";
	echo "passed $one \n";
	
}

echo "\nDone job\n";

?>

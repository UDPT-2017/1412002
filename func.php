  
<?php

function readView($filename){
	$fp = @fopen($filename, "r");
	$view;
	// Kiểm tra file mở thành công không
	if (!$fp) {
	    echo 'Mở file hông thành công';
	}
	else
	{
	    $view =  fgets($fp);
	    
	}
	fclose($fp);
	return $view;
}

function incView($filename){
	$view = readView($filename);
	$fp = @fopen($filename, "w+");
  
	// Kiểm tra file mở thành công không
	if (!$fp) {
    	echo 'Mở file không thành công';
	}
	else
	{
    	$view+=1;
   	 fwrite($fp, $view);
	}
}

?>
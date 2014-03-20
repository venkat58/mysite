<?php
 header("Content-Type: image/jpg");
	if (isset($_GET['imgid'])){
		$gdid = $_GET['imgid'];
		$gdurl = "https://docs.google.com/uc?id=$gdid&export=view";
		readfile($gdurl);
	}else{
	//
	}
?>
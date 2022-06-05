<?php
function add_featured_image_support_to_your_wordpress_theme() {
	add_theme_support( 'post-thumbnails' );
}

add_action( 'init', 'add_featured_image_support_to_your_wordpress_theme' );


if(isset($_POST['submitbtn'])){
	$data = array(
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'desc' => $_POST['desc'],
	);
	$table_name = 'contacts';
	$result = $wpdb -> insert($table_name, $data, $format=NULL);
	
	if($result == 1){
		echo "<script>window.location.replace('https://cadostore.ir/about');</script>";
	}else{
		echo "<script>alert('متاسفانه خطایی رخ داده است');</script>";
	}
}


if(isset($_POST['colSubmitbtn'])){
	$data = array(
		'colName' => $_POST['colName'],
		'colNumber' => $_POST['colNumber'],
		'colEmail' => $_POST['colEmail'],
		'colDesc' => $_POST['colDesc'],
		'fusk' => $_POST['fusk'],
	);
	$table_name = 'collabrate';
	$result = $wpdb -> insert($table_name, $data, $format=NULL);
	
	if($result == 1){
		echo "<script>window.location.replace('https://cadostore.ir/');</script>";
	}else{
		echo "<script>alert('متاسفانه خطایی رخ داده است');</script>";
	}
}
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test1";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
mysqli_set_charset($conn,"utf8mb4_unicode_ci");
header('Content-Type: text/html; charset=utf8mb4_unicode_ci');

 	  $file1 = "https://www.wsduniya.com/watch/tutti-yaari-download-whatsapp-status-inder-chahal-1699/";
	  	$doc1 = new DOMDocument();
		libxml_use_internal_errors(true);
		$doc1->loadHTMLFile($file1);
		$xpath1 = new DOMXpath($doc1);
		libxml_clear_errors();
  	    $title = $xpath1->query('//div[@class="post-title"]/h4')->item(0)->nodeValue;
	if($title){
	 	echo  $sql = "INSERT INTO `tt` (`id`, `name`) VALUES (NULL, '".$title."')"; 
		$conn->query($sql);
	 }

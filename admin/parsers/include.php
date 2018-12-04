<?php 
	require_once '../../php/connect.php';

	$data = $_POST;
	$data = json_decode(json_encode($data), true);

	if (isset($data) && !empty($data)) {
		$subject = $_POST['subject'];
		$topic = $_POST['topic'];
		$message = $_POST['message'];
		$studid = "ps/csc/14";
		$sql = "INSERT INTO chatdb (subject, studid, topic, message_sent, activity) VALUES ('$subject', '$studid', '$topic', '$message', CURRENT_TIMESTAMP)";
		echo $sql;
		//$query = $dbcon -> query($sql);
		//header('location:../helpdesk.php');

	}
 ?>
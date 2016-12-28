<?php //MONTA TABELA COM CADASTRADOS

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


	$DBServer = 'localhost'; // e.g 'localhost' or '192.168.1.100'
	$DBUser   = 'epb_senhor';
	$DBPass   = 'vaga#964';
	$DBName   = 'epb_srvg';

	$conn = new mysqli($DBServer, $DBUser, $DBPass, $DBName);
	 
	// check connection
	if ($conn->connect_error) {
	  trigger_error('Database connection failed: '  . $conn->connect_error, E_USER_ERROR);
	}
	if (!$conn->set_charset("utf8")) {
	    printf("Error loading character set utf8: %s\n", $conn->error);
	    exit();
	}


	$sql = 'SELECT * FROM sr_jobs ORDER BY title LIMIT 3;';
	$rs=$conn->query($sql);
	if($rs === false) {
			trigger_error('Wrong SQL: ' . $sql . ' Error: ' . $conn->error, E_USER_ERROR);
	}
	echo '<ol>';
	$rs->data_seek(0);
	$registros = $rs->num_rows;
	while($row = $rs->fetch_assoc()){
		echo '<li><a href="#">' . $row['title'] . '</a></li>';
	}
	echo '<ol>';
?>

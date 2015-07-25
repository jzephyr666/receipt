<?php

require_once '../config.php';
include 'csvExport.php';
include 'coursemap.php';
/*
	$coursemap = array (
		'60017211' => 'Cleaning',
		'5010441X' => 'Customer Service',
		'60013618' => 'WAREH001',
		'60002906' => 'Engineering',
		'60018549' => 'Healthcare',
		'50051866' => 'Hospitality',
		'50054764' => 'Hospitality',
		'50061860' => 'Hospitality',
		'60005543' => 'Hospitality',
		'50062049' => 'Hospitality',
		'50065087' => 'Hospitality',
		'50062657' => 'Hospitality',
		'50061471' => 'Engineering',
		'6002172X' => 'Engineering',
		'60021718' => 'Engineering',
		'60021706' => 'Engineering',
		'60019037' => 'Engineering',
		'6008456X' => 'Hospitality',
		'50035885' => 'ILM',
		'5005546X' => 'Miscellaneous',
		'50063327' => 'Hospitality',
		'00000001' => 'Miscellaneous',
		'00000000' => 'Miscellaneous',
		'10013210' => 'Basic Skills',
		'10013222' => 'Basic Skills',
		'1001357X' => 'Basic Skills',
		'10013581' => 'Basic Skills',
		'50116794' => 'Miscellaneous',
		'50114955' => 'Business Admin',
		'50017883' => 'Business Admin',
		'50017895' => 'Business Admin',
		'50056372' => 'CLEAN001',
		'50095225' => 'Cleaning',
		'60039012' => 'CLEAN001',
		'50081044' => 'CLEAN001',
		'60038299' => 'CLEAN002',
		'50062062' => 'Customer Service',
		'50063297' => 'Customer Service',
		'50104421' => 'Customer Service',
		'60060499' => 'ILM',
		'50054934' => 'ILM',
		'6005685X' => 'ILM00001',
		'60006055' => 'ILM00001',
		'60054761' => 'ILM00001',
		'60054773' => 'ILM00001',
		'60008489' => 'Hospitality',
		'50062633' => 'HOSPB001',
		'60008386' => 'HOSPB001',
		'60008416' => 'HOSPF001',
		'60008398' => 'Hospitality',
		'60008519' => 'HOSPB001',
		'60008520' => 'HOSPB001',
		'60008490' => 'Hospitality',
		'60008507' => 'Hospitality',
		'60008532' => 'HOSPB001',
		'60008544' => 'HOSPB001',
		'50062645' => 'HOSPB001',
		'60008325' => 'HOSPB001',
		'60008337' => 'HOSPB001',
		'60008623' => 'HOSPB001',
		'60008726' => 'HOSPB001',
		'60037416' => 'Business Admin',
		'60009391' => 'Miscellaneous',
		'50036506' => 'ILM',
		'50123762' => 'Warehousing',
		'60002918' => 'Engineering',
		'50100932' => 'Business Admin',
		'50101596' => 'Business Admin',
		'60036175' => 'Miscellaneous',
		'50073503' => 'Retail',
		'50073527' => 'Retail',
		'10035229' => 'Retail',
		'10035242' => 'Retail',
		'50035897' => 'ILM',
		'60059606' => 'ILM',
		'50116915' => 'Warehousing',
		'50057649' => 'Warehousing',
		'50110822' => 'WAREH001',
		'50060934' => 'Healthcare',
		'L5039466' => 'Engineering',
		'J5024898' => 'Hospitality',
		'60136078' => 'BUSAD001',
		'6013608X' => 'BUSAD001',
		'60066234' => 'BUSAD001',
		'60032546' => 'Engineering',
		'60135621' => 'CUSTS001',
		'60135645' => 'CUSTS001',
		'60001689' => 'Healthcare',
		'50080982' => 'Engineering',
		'50111309' => 'Engineering',
		'50114190' => 'Engineering',
		'5006096X' => 'Hospitality',
		'50111553' => 'Engineering',
		'50029101' => 'Retail',
		'60040646' => 'Retail',
		'60039607' => 'Retail',
		'ZESF0001' => 'Miscellaneous',
		'K5024957' => 'Hospitality',
		'50093186' => 'Functional Skills',
		'50093198' => 'Functional Skills',
		'50098330' => 'Functional Skills',
		'50098342' => 'Functional Skills',
		'50111383' => 'Functional Skills',
		'50096308' => 'Functional Skills',
		'50106399' => 'Functional Skills',
		'50109868' => 'Functional Skills',
		'5010987X' => 'Functional Skills',
		'50111875' => 'Functional Skills',
		'60132164' => 'ILM00001',
		'60132401' => 'ILM00001',
		'M5024894' => 'Hospitality',
		'10002352' => 'Key Skills',
		'10002716' => 'Key Skills',
		'10002856' => 'Key Skills',
		'1000810X' => 'Key Skills',
		'10002728' => 'Key Skills',
		'10002832' => 'Key Skills',
		'10008123' => 'Key Skills',
		'10002765' => 'Key Skills',
		'1000287X' => 'Key Skills',
		'10008147' => 'Key Skills',
		'10002753' => 'Key Skills',
		'10002881' => 'Key Skills',
		'10008159' => 'Key Skills',
		'10002777' => 'Key Skills',
		'10002789' => 'Key Skills',
		'10008196' => 'Key Skills',
		'10040365' => 'Key Skills',
		'50029988' => 'Retail',
		'F5039464' => 'Engineering',
		'50096771' => 'Business Admin',
		'50093411' => 'Customer Service',
		'6004018X' => 'Engineering',
		'50106247' => 'ILM',
		'50097234' => 'ILM',
		'50095468' => 'Hospitality',
		'60135979' => 'Business Admin',
		'50065907' => 'Business Admin',
		'50095481' => 'Business Admin',
		'50074738' => 'Business Admin',
		'5008818X' => 'Customer Service',
		'50095432' => 'Hospitality',
		'50095444' => 'Hospitality',
		'50094907' => 'Hospitality',
		'50099814' => 'Hospitality',
		'60008611' => 'Hospitality',
		'50094889' => 'Hospitality',
		'50095420' => 'HOSPB001',
		'50098366' => 'Engineering',
		'50109285' => 'Engineering',
		'50095201' => 'HOSPB001',
		'5009869X' => 'HOSPB001',
		'50093216' => 'HOSPB001',
		'50094397' => 'HOSPB001',
		'50099164' => 'HOSPB001',
		'50099796' => 'HOSPB001',
		'60017636' => 'Engineering',
		'60099318' => 'Engineering',
		'60020842' => 'Engineering',
		'60017004' => 'Engineering',
		'6001829X' => 'Engineering',
		'60016504' => 'Engineering',
		'60017016' => 'Engineering',
		'50040224' => 'Warehousing',
		'10052173' => 'Business Admin',
		'10052185' => 'Business Admin',
		'50043262' => 'Cleaning',
		'Q1053805' => 'Cleaning',
		'10060583' => 'Customer Service',
		'10060637' => 'Customer Service',
		'10021139' => 'Warehousing',
		'10021140' => 'Warehousing',
		'10053839' => 'HOSPB001',
		'10053864' => 'Hospitality',
		'10024293' => 'Hospitality',
		'10053815' => 'Hospitality',
		'50056967' => 'Warehousing',
		'10053001' => 'ILM',
		'10053827' => 'HOSPB001',
		'10053840' => 'HOSPB001',
		'10061885' => 'Retail',
		'10061873' => 'Retail',
		'50018462' => 'Sales',
		'50018954' => 'Sales',
		'10036635' => 'Healthcare',
		'10052999' => 'ILM',
		'Z0001873' => 'Hospitality',
		'Y5028311' => 'Hospitality',
		'R5039467' => 'Engineering',
		'R5036147' => 'Engineering',
		'A5025756' => 'Retail',
		'Z0007836' => 'Hospitality',
	);

	$mandatorycourse = array(
		'MISC0003',
		'MISC0002',
		'MISC0001',
	);
	
	$courseenrol = array (
		'HOSPF001',
		'HOSPB001',
		'BUSAD001',
		'CUSTS001',
		'ILM00001',
		'WAREH001',
		'CLEAN001',
		'CLEAN002',
	);
*/

class generateEnrolmentsCID {

	var $coursemap, $courseenrol, $mandatorycourse; var $enrolmentsPICS = array( );

	 function getEnrols( ) {

		$coursemap = $this->coursemap;
		$q = "
		SELECT pcULIN.ULIN, itp_vq.VQ_REF, Trainee.MAIN_OFF, Trainee.STATUS, Trainee.FUNDORG, Trainee.SCHEME, Trainee.IDENT, Trainee.TR_END, Trainee.NI_NO, Trainee.clientid
		FROM (pcULIN INNER JOIN Trainee ON pcULIN.ULINID = Trainee.ULINID) INNER JOIN itp_vq ON Trainee.IDENT = itp_vq.IDENT
		where Trainee.status <> 'd'
		";

		$rst = dbAccessADOConnect::executeQuery( $q ) ;
		$enrolmentsPrevious = array ( ) ; 
		#$enrolmentsPICS = array( ) ;
		if ( $rst ) {
			while ( odbc_fetch_row ( $rst ) ) {
				$userUlin		= odbc_result( $rst, 1 ) ;
				$courseRef		= odbc_result( $rst, 2 ) ;
				$trainerCode	= odbc_result( $rst, 3 ) ;
				$status 		= odbc_result( $rst, 4 ) ;
				$fundorg 		= odbc_result( $rst, 5 ) ;
				$scheme 		= odbc_result( $rst, 6 ) ;
				$ident 			= odbc_result( $rst, 7 ) ;
				$trend 			= odbc_result( $rst, 8 ) ;
				$nino 			= odbc_result( $rst, 9 ) ;
				$clientid		= odbc_result( $rst, 10 ) ;

				$enrolmentsPrevious [] = array (
					'userUlin' => $userUlin,
					'courseRef' => $courseRef,
					'trainerCode' => $trainerCode,
					'status' => $status,
					'fundorg' => $fundorg,
					'scheme' => $scheme,
					'ident' => $ident,
					'trend' => $trend,
					'q'
				);

				$newcourse = isset( $coursemap[$courseRef]) ? $coursemap[$courseRef] : null;

				if( ( in_array($newcourse, $this->courseenrol) ) ) {
					$this->enrolmentsPICS [] = array (
						'op' 	=> 'Add',
						'role' 	=> 'Student',
						/*'userUlin' => $userUlin,*/
						'nino'	=> $clientid,
						'courseRef' => $newcourse,
					);
				}
			}
		}

		$q = "
		SELECT distinct Trainee.clientid
		FROM Trainee
		where Trainee.status <> 'd'
		order by ident
		";
		$rst = dbAccessADOConnect::executeQuery( $q ) ;
		if ( $rst ) {
			while ( odbc_fetch_row ( $rst ) ) {
				$clientid	= odbc_result( $rst, 1 ) ;
		
				foreach ( $this->mandatorycourse as $mc ) {
					//echo $mc;
					$this->enrolmentsPICS [] = array (
						'op' 	=> 'Add',
						'role' 	=> 'Student',
						'nino'	=> $clientid,
						'courseRef' => $mc,
					);
				}
			}
		}
	}
}


/*
$enrolmentsExp = new csvExport ( ) ;
$enrolmentsExp->getList( $enrolmentsL ) ;
$enrolmentsExp->exportCSVenrolments( ) ;
*/

$cMap = new cmap();

$enrolsCID = new generateEnrolmentsCID( );
$enrolsCID->coursemap 		= $cMap->coursemap;
$enrolsCID->courseenrol 	= $cMap->courseenrol;
$enrolsCID->mandatorycourse = $cMap->mandatorycourse; 
$enrolsCID->getEnrols();

$enrolmentsMexp = new csvExport( ) ;
$enrolmentsMexp->getList( $enrolsCID->enrolmentsPICS ) ;
$enrolmentsMexp->exportCSVenrolments( 'not null' ) ;


?>
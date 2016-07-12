<?php
$queryg = "SELECT guest_seats FROM em_guests WHERE event_token='$token'";
$resultg = $db->query($queryg);
$total=0;
$total = array();
$i = 0;
$limit = $resultg->num_rows;
if($limit>0) {
while($seats=$resultg->fetch_assoc()) {
	$total[] = intval($seats['guest_seats']);
	
	$i++;
}
} 
$invite = $i;
$tseats=0;
for ($i=0;$i<count($total);$i++) {
	$tseats+=$total[$i];
}
?>
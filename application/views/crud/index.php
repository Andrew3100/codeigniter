

<?php

$i = 0;
while ($i < count($Crud_Model)) {
	echo $Crud_Model['firstname'];
	$i++;
}
/*
foreach ($Crud_Model as $user_list) {
	$user = $user_list['firstname'];
	echo "<h1>$user</h1>";
}*/

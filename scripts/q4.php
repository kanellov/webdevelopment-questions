<?php

$subject = 'There\'s a red apple on the table';
$pattern = '/a[a-z]+/i';
$matches = array();
$result  = preg_match($pattern, $subject, $matches);
echo json_encode($matches);
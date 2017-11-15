<?php
$pattern = '/[.]?(0+)$/';
$replacement = '';
$subject = ['55.100', '55.01', '50.001', '55.0010', '50.00'];

$result = preg_replace($pattern, $replacement, $subject);

print_r($result);
<?php
// This PHP script will save the user's IP address and the current date to ip.txt.

// Get the user's IP address
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}

// Get the current date and time
$date = date('Y-m-d H:i:s');

// Save the IP address and date to ip.txt
$file = 'ip.txt';
$current = file_get_contents($file);
$current .= "$ip - ($date)\n";
file_put_contents($file, $current);

// Return the IP address and date (optional)
echo "$ip - ($date)";
?>

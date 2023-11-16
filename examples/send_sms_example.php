<?php
require_once('../src/EquitelSMSC.php');
require_once('../config/config.php');

// Example code to demonstrate sending SMS using EquitelSMSC class
$isProduction = false; // Change to true for production

$smsc = new EquitelSMSC($isProduction);
$result = $smsc->sendSMS('SenderID', 'RecipientNumber', 'MessageContent', true, 'http://yourdeliveryreporturl.com');

if ($result) {
    echo "SMS sent successfully!";
} else {
    echo "Failed to send SMS.";
}
?>

<?php
 
$account_sid = 'ACcd4fd39d524a70f6db244dfb51adc318'; 
$auth_token = '26946965af09d519cc066753b5f89164';    

$url = "https://api.twilio.com/2010-04-01/Accounts/ACcd4fd39d524a70f6db244dfb51adc318/AvailablePhoneNumbers/US/Local.json";
$curl_channel = curl_init($url);
curl_setopt($curl_channel, CURLOPT_RETURNTRANSFER, true);

$result = json_decode(curl_exec($curl_channel));
$error = $result->message;

echo "\nThe error message you received was [$error]\n\n"; 

?>

<?php
require_once("PayPal-PHP-SDK/autoload.php");

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
    'AVy_DqOj17c06ZFVYxcT_eHTGN97IGmb-f9P44azsWRzsQUmhdGuwyTCUrYGjTCdx67kqJnVge4Givrt', // ClientID
    'EGSIGEj_I6uHTVHpugmxbCRoMM6yNqshjTosdpduK0zVj0OKGSuPGJqALY0gjG7BDnfzl0EXgNsrBjm2' // ClientSecret
    ));
?>
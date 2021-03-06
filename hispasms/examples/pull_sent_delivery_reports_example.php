<?php
/**
 * Created by PhpStorm.
 * User: nmenkovic
 * Date: 9/9/15
 * Time: 5:16 PM
 */
require_once __DIR__ . '/../../vendor/autoload.php';

use hispasms\api\client\GetSentSmsDeliveryReports;
use hispasms\api\configuration\BasicAuthConfiguration;
use hispasms\api\model\sms\mt\reports\GetSentSmsDeliveryReportsExecuteContext;

// Initializing GetSentSmsDeliveryReports client with appropriate configuration
$client = new GetSentSmsDeliveryReports(new BasicAuthConfiguration(USERNAME, PASSWORD));
// Creating execution context
$context = new GetSentSmsDeliveryReportsExecuteContext();
// Executing request
$response = $client->execute($context);

for ($i = 0; $i < count($response->getResults()); ++$i) {
    $result = $response->getResults()[$i];
    echo "Message ID: " . $result->getMessageId() . "\n";
    echo "Sent at: " . $result->getSentAt()->format('Y-m-d H:i:s P') . "\n";
    echo "Receiver: " . $result->getTo() . "\n";
    echo "Status: " . $result->getStatus()->getName() . "\n";
    echo "Price: " . $result->getPrice()->getPricePerMessage() . " " . $result->getPrice()->getCurrency() . "\n\n";
}
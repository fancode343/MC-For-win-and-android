<?php
function sendDiscordWebhook($webhookURL, $message) {
    $data = array('content' => $message);
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json",
            'method'  => 'POST',
            'content' => json_encode($data)
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($webhookURL, false, $context);

    // Optionally, you can check the result to see if the message was sent successfully.
    if ($result === false) {
        // Handle the error here.
        echo "Failed to send the message.";
    } else {
        echo "Message sent successfully.";
    }
}

// Usage example:
$webhookURL = "https://discord.com/api/webhooks/1131860334743924766/O4c-jeK12UWJk2Zg73q0sFve_RuOXk9R3EPt6zGZE_mFu1Du1lO61Z9ocuSlIkUEFXLL";
$message = "hi";
sendDiscordWebhook($webhookURL, $message);
?>
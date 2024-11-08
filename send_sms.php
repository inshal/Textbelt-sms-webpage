<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $phones = explode(',', $_POST['phone']);
    $message = $_POST['message'];
    $sender_id = isset($_POST['sender_id']) ? $_POST['sender_id'] : '';

    $responses = [];

    foreach ($phones as $phone) {
        $phone = trim($phone);
        if (empty($phone)) continue;

        $ch = curl_init('https://textbelt.com/text');
        $data = array(
            'phone' => $phone,
            'message' => $message,
            'key' => 'YOUR_API_KEY_HERE',
            'sender' => $sender_id,
        );

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        curl_close($ch);

        $responses[] = "Phone: $phone, Response: $response";
    }

    // Redirect back to the form with the responses
    header("Location: index.php?response=" . urlencode(implode("\n", $responses)));
    exit();
}
?>
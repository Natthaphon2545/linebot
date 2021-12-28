 <?php
  

function send_LINE($msg){
 $access_token = 'vn1RQKnQxDMnIiqiyVcGftoaRg1jtFMSLqpK9mgtgG57Il58X0Y3YXVKhjCrjiT4tWRfcfAYdKTfq1HAtUtVMyLId17lVzTz0QYTNehm6Il8SDaDdFCp/UQDwLvgm+WPf134Y1jHa/bSihT1JqogzQdB04t89/1O/w1cDnyilFU='; 

  $messages = [
        'type' => 'text',
        'text' => $msg
        //'text' => $text
      ];

      // Make a POST Request to Messaging API to reply to sender
      $url = 'https://api.line.me/v2/bot/message/push';
      $data = [

        'to' => 'Uf7bee6956810b7acd863a41c383b68e3',
        'messages' => [$messages],
      ];
      $post = json_encode($data);
      $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

      $ch = curl_init($url);
      curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
      curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
      $result = curl_exec($ch);
      curl_close($ch);

      echo $result . "\r\n"; 
}

?>

<?php
  
  // Bước 1 chạy dòng này sau đó thì xác thực my_verify_token trên app của bạn

  $my_verify_token = "my_first_chatbot";
  
  if(isset($_GET['hub_challenge'])){
    $challenge = $_GET['hub_challenge'];  
  }
  if(isset($_GET['hub_verify_token'])){
    $verify_token = $_GET['hub_verify_token'];
  }

  
  if(isset($verify_token) && ($my_verify_token === $verify_token)){
    echo $challenge;
    exit;
  }

  // Bước 2 chạy 3 dòng này để lấy recipient_id được ghi trong text.txt bằng cách nhắn một tin ở trên page rồi load lại trang 1 to 2 lần, sau đó máy sẽ tự động ghi file text.txt.

  $reponse = file_get_contents("php://input");

  file_put_contents("text.txt",$reponse);

  // Bước 3 chạy dòng này để chạy chatbot

  // access_token lấy trên Graph API Explorer 

  require_once('src/Facebook/autoload.php');

  // cái này lấy từ app của bạn

	$fb = new Facebook\Facebook([

		'app_id' => '306178000757282',

		'app_secret' => 'eb4ee14a595e7efb06cd949be0b7e124',

		'default_graph_version' => 'v2.10'

	]);

  try {
    // Returns a `FacebookFacebookResponse` object
    $response = $fb->post(
      '/me/messages',
      array (
        'access_token' => 'EAAEWd575IiIBAHgCUEeEZBq4cWxmk5gWB12uygOqFX78q4asZAEpwR7F0QVlNkAdKFgeX9KH6I2P2ZB3KfjXXHtpbAj6kMjIpgVSRCpzBY8OyEzbsXij1R7jLLNqQpuErjZCo7LDzrAsEnGwI11OLDdeMRxhRc1LuRp1IZCuqC5r4fhDQUDCy',
        'recipient' => '{
          "id": "3944854605606462"
        }',
        'message' => '{
          "text": "hello, world!"
        }'
      )
    );
  } catch(FacebookExceptionsFacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(FacebookExceptionsFacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
    exit;
  }
  $graphNode = $response->getGraphNode();

  // Bắt buộc phải có cái này ngay từ đầu
  http_response_code(200);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
  <link rel="stylesheet" href="style.css">
  <title>ChatCord App</title>
</head>
<body>
  <div class="chat-container">
    <header class="chat-header">
      <h1><i class="fas fa-smile"></i> ChatCord</h1>
      <a href="index.html" class="btn">Leave Room</a>
    </header>
    <main class="chat-main">
      <div class="chat-sidebar">
        <h1>FACEBOOK API</h1>
        <H2>made in long dep trai</H2>
      </div>
      <div class="chat-messages">
        <div class="message">
            <p class="meta">Brad <span>9:12pm</span></p>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                repudiandae.
            </p>
        </div>
        <div class="message">
            <p class="meta">Mary <span>9:15pm</span></p>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                repudiandae.
            </p>
        </div>
        <div class="message">
            <p class="meta">Mary <span>9:15pm</span></p>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                repudiandae.
            </p>
        </div>
        <div class="message">
            <p class="meta">Mary <span>9:15pm</span></p>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                repudiandae.
            </p>
        </div>
        <div class="message">
            <p class="meta">Mary <span>9:15pm</span></p>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi,
                repudiandae.
            </p>
        </div>
        <?php
        require "vendor/autoload.php";

        use BotMan\BotMan\BotMan;
        use BotMan\BotMan\BotManFactory;
        use BotMan\BotMan\Drivers\DriverManager;
        use BotMan\Drivers\Facebook\Extensions\ButtonTemplate;
        use BotMan\Drivers\Facebook\Extensions\ElementButton;

        $config = [
            'facebook' => [
                'token' => 'EAAEWd575IiIBANH7HwAbOWk39uRmmzDMWOkuEkhcn4ZCaouZBMESX3Musjqk6JtfH0t1ZBQmcVyJsfesL5Hl1caNpxWT5KDZA0ho64pZAZBO2rzHSS1KNJoVoCrzIVrqoLmOI4uD5Edf9M7AUReelc1j8gPkpbO3VJs9CUWoAz7gZDZD',
                'app_secret' => 'eb4ee14a595e7efb06cd949be0b7e124',
                'verification'=>'my_first_chatbot',
            ]
        ];

        // Load the driver(s) you want to use
        DriverManager::loadDriver(\BotMan\Drivers\Facebook\FacebookDriver::class);

        // Create an instance
        $botman = BotManFactory::create($config);

        $botman->hears('hello', function (BotMan $bot) {
            $bot->reply('hi');
        });
            
            //     // Start listening
            //     $botman->listen();

            // if(isset($_POST['send'])){ 

            //     $config = [
            //         'facebook' => [
            //             'token' => 'EAAEWd575IiIBANH7HwAbOWk39uRmmzDMWOkuEkhcn4ZCaouZBMESX3Musjqk6JtfH0t1ZBQmcVyJsfesL5Hl1caNpxWT5KDZA0ho64pZAZBO2rzHSS1KNJoVoCrzIVrqoLmOI4uD5Edf9M7AUReelc1j8gPkpbO3VJs9CUWoAz7gZDZD',
            //             'app_secret' => 'eb4ee14a595e7efb06cd949be0b7e124',
            //             'verification'=>'my_first_chatbot',
            //         ]
            //     ];
        
            //     // Load the driver(s) you want to use
            //     DriverManager::loadDriver(\BotMan\Drivers\Facebook\FacebookDriver::class);
        
            //     // Create an instance
            //     $botman = BotManFactory::create($config);
            //     // Give the bot something to listen for.
            //     $botman->hears($_POST['message'], function (BotMan $bot) {
            //         $bot->reply('hi');
            //     });
            
            //     // Start listening
            //     $botman->listen();
            //     echo "<div class='message'>
            //         <p class='meta'>Mary <span>".date('H:i')."</span></p>
            //         <p class='text'>
            //             ".$_POST['message']."
            //         </p>
            //     </div>";
            // }
        ?>
      </div>
    </main>
    <div class="chat-form-container">
      <form id="chat-form" method="post" action="">
        <input
          id="msg"
          type="text"
          placeholder="Enter Message"
          required
          autocomplete="off"
          name="message"
        />
        <button type="submit" name="send" class="btn"><i class="fas fa-paper-plane"></i> Send</button>
      </form>
    </div>
  </div>
</body>
</html>
<?php
    // $my_verify_token = "my_first_chatbot";  

    // $challenge = $_GET['hub_challenge'];
    // $verify_token = $_GET['hub_verify_token'];

    // if($my_verify_token === $verify_token){
    //     echo $challenge;
    //     exit;
    // }

    // $access_token = "EAAEWd575IiIBAO1KcJMu8Fs1RNzvZANbT6zPupkG6rHjxaabB5x9rpLEdzbMJ7NKMZBv6OMLWOWJepHLGqGGZAFEwbbaiE0afiSQdPDfpKJUEg8OdZCxHbnGQZBK8BtOWBzUSo2f58Nfc2diAqIjGNOrkUADv52BZCmUZAMF50jsVJZCn9cHRfrf";

?>
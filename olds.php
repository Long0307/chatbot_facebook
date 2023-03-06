<?php
    
    // $my_verify_token = "my_first_chatbot";  

    // $challenge = $_GET['hub_challenge'];
    // $verify_token = $_GET['hub_verify_token'];

    // if($my_verify_token === $verify_token){
    //     echo $challenge;
    //     exit;
    // }

    // $access_token = "EAAEWd575IiIBAJesZAvPJHKHr8QJULfthglmJFLpZAgmgNgw1HHB5R1qPhxxdRugxvK0hGMKtZC87O2erH4bbrKdw7plMb8bivZBvv6W0M5gHgbYsBxcsVAWjSet4fLEGdwmesuiYFb5NIe6FVnTljlkngNEq44BuYZAobV3qiSo5CYeUHRPx";


    require "vendor/autoload.php";

    use BotMan\BotMan\BotMan;
    use BotMan\BotMan\BotManFactory;
    use BotMan\BotMan\Drivers\DriverManager;

    $config = [
        'facebook' => [
            'token' => 'EAAEWd575IiIBAMULvM3n07DyJC7tBnrvUdZCt7TRbvObWuPuPASBK6CBzRzPKyDYw81qPOJEsmbuuAWMiZAuqZAkt58KY9tKAaW2sdxetpGSH3Alztyiji0eLiSUPYxBnGLlZC3HAzbz68Ja7GP65gzhYncvrQJRufd06eZAQHnX7kGImoIV3',
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

    $botman->listen();
    
?>
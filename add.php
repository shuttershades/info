<?php

require("./vendor/autoload.php");
$instagram = new \Instagram\Instagram();

$dataposted = $_POST['usr'];

$emailForErrors = 'marian007p@gmail.com'; //ADD AN EMAIL HERE TO BE NOTIFIED IF ANY ACCOUNT BELOW RUN INTO ANY PROBLEM. BE AWARE THESE EMAILS CAN GO TO SPAM FOLDER.

  try {

    //DO NOT PUT YOUR PERSONAL ACCOUNT OR SOME ACCOUNT YOU`RE MAKING MONEY ALREADY... CREATE A NEW ACCOUNT.
    //SINCE THIS ACC WILL BE FOLLOWING USERS, THIS ACCOUNT SHOULD BE VERIFIED.




          ////////////////////////////////////
          //////FOLLOW ACCOUNT DEFAULT////////
          ///////////////////////////////////

          //IF YOUR PAGE GETS LOTS OF VISITORS PER DAY, YOU SHOULD USE PROXIES FOR THIS ACC. TO USE PROXY UNCOMMENT THE LINE BELOW AND PUT YOUR PROXY INFO. YOU CAN USE 1 PROXY PER ACC OR REPEAT THE PROXY IF YOU LIKE

           //$instagram->setProxy("127.0.0.1:8888", "proxyUsername", "proxyPassword");

           //PUT THE SAME ACC USED AT THE OTHER PAGES HERE IN THE 1ST ACC
           $instagramUsername = "sm.geek"; //USERNAME
           $instagramPassword = "bordeianu"; //PASSWORD
           $filename = './info/ig_data.json';
           if(!file_exists($filename)){
             $instagram->login($instagramUsername, $instagramPassword);
             $savedSession = $instagram->saveSession();
             file_put_contents('./info/ig_data.json', $savedSession);
           }else{
              $savedSession = file_get_contents('./info/ig_data.json');
              $instagram->initFromSavedSession($savedSession);
           }
           $user = $instagram->getUserByUsername($dataposted);
           $instagram->followUser($user);
           $instagram->logout();
           sleep(3);

           }
           catch (Exception $e) {
$to      = $emailForErrors;
$subject = 'InstaLand Error - Account '.$instagramUsername;
$message = 'The account '.$instagramUsername.' returned an error: '.$e->getMessage();
$headers = 'From: info@instaland.com' . "\r\n" .
    'Reply-To: info@instaland.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
  }

try{
   //////////////////////////////
   //////FOLLOW ACCOUNT 1////////
   /////////////////////////////

   //IF YOUR PAGE GETS LOTS OF VISITORS PER DAY, YOU SHOULD USE PROXIES FOR THIS ACC. TO USE PROXY UNCOMMENT THE LINE BELOW AND PUT YOUR PROXY INFO. YOU CAN USE 1 PROXY PER ACC OR REPEAT THE PROXY IF YOU LIKE

    //$instagram->setProxy("127.0.0.1:8888", "proxyUsername", "proxyPassword");
    $instagramUsername = "sm.geek"; //USERNAME
    $instagramPassword = "bordeianu"; //PASSWORD
    $filename = './info/ig_data_acc1.json';
    if(!file_exists($filename)){
      $instagram->login($instagramUsername, $instagramPassword);
      $savedSession = $instagram->saveSession();
      file_put_contents('./info/ig_data_acc1.json', $savedSession);
    }else{
       $savedSession = file_get_contents('./info/ig_data_acc1.json');
       $instagram->initFromSavedSession($savedSession);
    }
    $user = $instagram->getUserByUsername($dataposted);
    $instagram->followUser($user);
    $instagram->logout();
    sleep(3);

    }
           catch (Exception $e1) {
$to      = $emailForErrors;
$subject = 'InstaLand Error - Account '.$instagramUsername;
$message = 'The account '.$instagramUsername.' returned an error: '.$e1->getMessage();
$headers = 'From: info@instaland.com' . "\r\n" .
    'Reply-To: info@instaland.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
  }

try{
    //////////////////////////////
    //////FOLLOW ACCOUNT 2////////
    /////////////////////////////

    //IF YOUR PAGE GETS LOTS OF VISITORS PER DAY, YOU SHOULD USE PROXIES FOR THIS ACC. TO USE PROXY UNCOMMENT THE LINE BELOW AND PUT YOUR PROXY INFO. YOU CAN USE 1 PROXY PER ACC OR REPEAT THE PROXY IF YOU LIKE

     //$instagram->setProxy("127.0.0.1:8888", "proxyUsername", "proxyPassword");
     $instagramUsername = "sm.geek"; //USERNAME
     $instagramPassword = "bordeianu"; //PASSWORD
     $filename = './info/ig_data_acc2.json';
     if(!file_exists($filename)){
       $instagram->login($instagramUsername, $instagramPassword);
       $savedSession = $instagram->saveSession();
       file_put_contents('./info/ig_data_acc2.json', $savedSession);
     }else{
        $savedSession = file_get_contents('./info/ig_data_acc2.json');
        $instagram->initFromSavedSession($savedSession);
     }
     $user = $instagram->getUserByUsername($dataposted);
     $instagram->followUser($user);
     $instagram->logout();
     sleep(3);

     }
           catch (Exception $e2) {
$to      = $emailForErrors;
$subject = 'InstaLand Error - Account '.$instagramUsername;
$message = 'The account '.$instagramUsername.' returned an error: '.$e2->getMessage();
$headers = 'From: info@instaland.com' . "\r\n" .
    'Reply-To: info@instaland.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
  }

try{
     //////////////////////////////
     //////FOLLOW ACCOUNT 3////////
     /////////////////////////////

     //IF YOUR PAGE GETS LOTS OF VISITORS PER DAY, YOU SHOULD USE PROXIES FOR THIS ACC. TO USE PROXY UNCOMMENT THE LINE BELOW AND PUT YOUR PROXY INFO. YOU CAN USE 1 PROXY PER ACC OR REPEAT THE PROXY IF YOU LIKE

      //$instagram->setProxy("127.0.0.1:8888", "proxyUsername", "proxyPassword");
      $instagramUsername = "sm.geek"; //USERNAME
      $instagramPassword = "bordeianu"; //PASSWORD
      $filename = './info/ig_data_acc3.json';
      if(!file_exists($filename)){
        $instagram->login($instagramUsername, $instagramPassword);
        $savedSession = $instagram->saveSession();
        file_put_contents('./info/ig_data_acc3.json', $savedSession);
      }else{
         $savedSession = file_get_contents('./info/ig_data_acc3.json');
         $instagram->initFromSavedSession($savedSession);
      }
      $user = $instagram->getUserByUsername($dataposted);
      $instagram->followUser($user);
      $instagram->logout();


      //THIS IS THE AJAX RESPONSE ... ONLY CHANGE IT IF YOU KNOW WHAT YOU`RE DOING
      echo "ok";

     }
           catch (Exception $e3) {
$to      = $emailForErrors;
$subject = 'InstaLand Error - Account '.$instagramUsername;
$message = 'The account '.$instagramUsername.' returned an error: '.$e3->getMessage();
$headers = 'From: info@instaland.com' . "\r\n" .
    'Reply-To: info@instaland.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
  }


 ?>

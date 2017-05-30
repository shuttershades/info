<?php

require("./vendor/autoload.php");
$instagram = new \Instagram\Instagram();

//ADD AN INSTAGRAM ACCOUNT HERE
//DO NOT PUT YOUR PERSONAL ACCOUNT OR SOME ACCOUNT YOU`RE MAKING MONEY ALREADY... CREATE A NEW ACCOUNT.
// THIS ACCOUNT DOES NOT NEED TO BE VERIFIED
$instagramUsername = "sm.geek"; //USERNAME
$instagramPassword = "bordeianu"; //PASSWORD

  try {

    $filename = './info/ig_data.json';
    if(!file_exists($filename)){
      $instagram->login($instagramUsername, $instagramPassword);
      $savedSession = $instagram->saveSession();
      file_put_contents('./info/ig_data.json', $savedSession);
    }else{
       $savedSession = file_get_contents('./info/ig_data.json');
       $instagram->initFromSavedSession($savedSession);
    }

    $dataposted = $_POST['usr'];

    $user = $instagram->getUserByUsername($dataposted);

    $pic = $user->getProfilePicUrl();
    $name = $user->getFullName();
    $followers = $user->getFollowerCount();
    $posts = $user->getMediaCount();



      //THIS IS THE AJAX RESPONSE ... ONLY CHANGE IT IF YOU KNOW WHAT YOU`RE DOING
      echo "<div id='ins1' class='col-md-3'>
            </div>
            <div id='ins2' style='box-shadow: inset 0px 0px 0 2000px rgba(0,0,0,0.5); padding-top:20px; padding-bottom:20px;' class='col-md-6 text-center'><img style='margin-left:auto; margin-right:auto;' class='img-responsive img-circle' src='".$pic."'/>
              <br/>
            <p><span style='font-size:large'>".$name."
            <br/>
            ".$followers." Followers</span> </p>
            <button id='confirm' type='button' class='btn btn-success'>Confirm User</button>
            </div>
            <div id='ins3' class='col-md-3'>
            </div>";
      }
      catch (Exception $e) {
        echo "
        <div id='ins3' class='col-md-3'>
        </div>
        <div id='ins2' style='box-shadow: inset 0px 0px 0 2000px rgba(0,0,0,0.5); padding-top:20px; padding-bottom:20px;' class='col-md-6 text-center'>".$e->getMessage()."
        <br/>
        <a href='./'>Back</a>
        </div>
        <div id='ins3' class='col-md-3'>
        </div>";

  }

 ?>

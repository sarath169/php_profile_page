<?php include 'validate.php'; ?>

    <?php
    if(isset($_REQUEST["submit"]))
    {
        $name = $_REQUEST["name"];
        $gmail = $_REQUEST["email"];
        $dob = $_REQUEST["dob"];
        $gender = $_REQUEST["gender"];
        $contact_number = $_REQUEST["mobile"];
        $skill = $_REQUEST["skill"];
        $about = $_REQUEST["about"];
        $address = $_REQUEST['address'];
        $education = $_REQUEST["education"];
        $interest = $_REQUEST["interest"];
        $professional_links=$_REQUEST["professional_links"];
        // echo "<pre>";
        // print_r($_REQUEST);
        // echo "</pre>";
        // echo "<pre>";
        // print_r($_POST);
        // echo "</pre>";
        // echo "<pre>";
        // print_r($_FILES);
        // echo "</pre>";
        // echo "<pre>";
        // print_r($_GET);
        // echo "</pre>";
        // echo "Name: " . $name . "<br />";
        // echo "DOB: " . $dob. "<br />";
        // echo "Gender: " . $gender. "<br />";
        // echo "Contact: " . $contact_number. "<br />";
        // echo "Skills: ";
        // echo $array[0];
        // echo $interest[0];
        // echo $gender;
        // for ($i=1; $i <count($array) ; $i++) {
        //   echo ", ".$array[$i] ;
        //   // code...
        // }
        // // $source = "/home/sarath/Desktop/php/file/upload/"
        // // $path = "20210312102841.png"
        // // // echo "<img src="/home/sarath/Desktop/php/file/upload/'.$image_src.' .png" alt="sarath">";
        // //  echo "<img src="$source.$path" />";
        // //   // <img src="/home/sarath/Desktop/php/file/upload/<?php echo $new_name;
        // echo "<br />";
        // echo $about;
        // echo "<br />";
        // echo $address;
        // echo "<br />";
        // echo $education;
        // echo "<br />";
        // echo $interest;
        // echo "<br />";
        // echo $professional_links;
        // echo "<img class='image' src='http://localhost:8000/upload/$new_name' />";
     }
    ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kalam:wght@300&family=Nunito:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Ballet&display=swap" rel="stylesheet">
    <title><?php echo $name?>'s Profile</title>
    <h1 class="heading"> <?php echo $name?> </h1>
  </head>
  <body>
    <div class="row row-cols-5 border">
      <div class="item1 col-6 col-md-4">
        <div >
          <img class='profile-picture' src='http://localhost:8000/upload/<?php echo $new_name?>' />
        </div>
        <div class="about-me">
          <em><h2>About Me</h2></em>
          <p>
            <?php echo $about; ?>
          </p>
          <p>
            Gender: <?php echo $gender; ?>
          </p>
        </div>

        <div class="contact-details">
          <em><h2>Contact Details</h2></em>
          <p>
            Mail-id: <?php echo $gmail?><br />
            Mobile: <?php echo $contact_number?>
            <br>
              <a class="linkedin fa fa-linkedin" href="<?php echo $professional_links; ?>"></a>
          </p>
        </div>

      </div>
      <div class="item2 col-6 col-md-8">

        <div class="skills">
          <em><h2>Skills:</h2></em>
          <ul>
            <?php for($i=0;$i<count($skill);$i++){
              echo "<li> $skill[$i]</li>";
            } ?>
            </ul>
        </div>
        <div class="education">
          <em><h2>Educational Qualification:</h2></em>
          <ul>
            <?php
            echo "<li> $education</li>";
            ?>
            </ul>

        </div>
        <div class="hobbies">
          <em><h2>Interests:</h2></em>
          <ul>
            <?php for($i=0;$i<count($interest);$i++){
              echo "<li> $interest[$i]</li>";
            } ?>
            </ul>
        </div>
      </div>
    </div>

  </body>
</html>

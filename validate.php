<?php
$GLOBALS['new_name'] = 'a';
if(isset($_REQUEST["submit"]))
{
  if(!empty($_FILES["image"]["name"]))
  {

      //user has browsed a file to upload
      if($_FILES["image"]["error"] == 0)
      {
          //no errors with the file

          //alloweed file type array
          $allowed_types = array("image/jpeg", "image/jpg", "image/png", "image/gif");

          if((in_array($_FILES["image"]["type"], $allowed_types)))
          {
              //correct file type

              //get the dot position
              $dot_pos = strrpos($_FILES["image"]["name"], ".");
              // echo '<br />';
              //from dot position to the end is the extension
              $extension = substr($_FILES["image"]["name"], $dot_pos);
              // echo '<br />';
              //use date function to get random number
              $random_name = $_REQUEST["email"];
              // echo '<br />';
              //add date function value with extension to get unique new file name
              $GLOBALS['new_name']  = $random_name . $extension;
              // echo '<br />';

              if($_FILES["image"]["size"] < 1519200)

                {  $uploaded = move_uploaded_file($_FILES["image"]["tmp_name"],
                                             "upload/" .$new_name);

                  if($uploaded)
                  {
                      // echo "File uploaded sucessfully";
                  }
                  else
                  {
                      echo "File could not be uploaded";
                  }
              }
              else
              {
                  echo "File should be less than 1.5MB " . $_FILES["image"]["size"];
              }
          }
          else
          {
              //invalid file type
              echo "Please upload JPG or PNG files";
          }
      }
      else
      {
          //error with the file uploading
          echo "There are some errors with the file";
      }
  }
  else
  {
      //error message for not selecting any file
      echo "Please browse a file to upload";
  }
}
 ?>

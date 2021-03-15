
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Registration</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script type="text/javascript" src="client_validation.js"></script>

  </head>
  <body >
    <div class="">

      <div class="whole_container">
      <form action="img_upload.php" method="post" enctype="multipart/form-data" onsubmit="return validate()">

        <div class="form_container">
          <div class="label">
            <label  for="name">Name</label>
          </div>
        <div class="value">
          <input class="value" type="text" name="name" value="" id="name">
          <span id="alert-name" class=""> </span>
        </div>
        <div class="label">
          <label  for="email">Email</label>
        </div>
        <div class="value">
          <input class="value" type="email" name="email" value="" id="email">
          <span id="alert-email" class=""> </span>
        </div>
        <div class="label">
          <label for="dob">Date of Birth</label>
        </div>
        <div class="value">
          <input class="value" type="date" name="dob" value="" id="dob" onchange="validate_dob()">
          <span id="alert-dob" class=""> </span>
        </div>
        <div class="label">
          <label for="image">Profile Picture</label>
        </div>
        <div class="value">
          <input class="value" type="file" name="image" id="image" />
          <span id="alert-image" class=""> </span>
        </div>
        <div class="label">
          <label for="Gender">Gender</label>
        </div>
        <div>
          <input type="radio" name="gender" value="Male" required>
          <label for="male">Male</label>
          <input type="radio" name="gender" value="Female">
          <label for="female">Female</label>
          <input type="radio" name="gender" value="Other">
          <label for="other">Other</label>
          <span id="alert-gender" class=""> </span>
        </div>
        <div class="label">
          <label for="mobile">Contact Number</label>
        </div>
        <div class="value">
          <input class="value" type="number" name="mobile" value="" id="contact_number">
          <span id="alert-contact_number" class=""> </span>
        </div>
        <div class="label">
          <label for="skill">Skills</label>
        </div>
        <div class="value">
          <input id="skill1" type="checkbox" name="skill[]" value="HTML" required>
          <label for="skill1">HTML</label>
          <input id="skill2" type="checkbox" name="skill[]" value="CSS">
          <label for="skill2">CSS</label>
          <input id="skill3" type="checkbox" name="skill[]" value="JavaScript">
          <label for="skill3">JavaScript</label>
          <!-- <br> -->
          <input id="skill4" type="checkbox" name="skill[]" value="Bootstrap">
          <label for="skill4">Bootstrap</label>
          <input id="skill5" type="checkbox" name="skill[]" value="MySQL">
          <label for="skill5">MySQL</label>
          <input id="skill6" type="checkbox" name="skill[]" value="Python">
          <label for="skill6">Python</label>
          <input id="skill7" type="checkbox" name="skill[]" value="PHP">
          <label for="skill7">PHP</label>
          <span id="alert-skill" class=""> </span>
        </div>
        <div class="label">
          <label for="about">About</label>
        </div>
        <div class="value">
          <textarea class="value" name="about" rows="8" cols="30" id="about"></textarea>
          <span id="alert-about" class=""> </span>
        </div>
        <div class="label">
          <label for="address">Address</label>
        </div>
        <div class="value">
          <textarea class="value" name="address" rows="8" cols="30" id="address"></textarea>
          <span id="alert-address" class=""> </span>
        </div>
        <div class="label">
          <label for="education">Educational Qualification</label>
        </div>
        <div class="value">
          <select class="value" name="education" id="education">
            <option value="B-Tech">B-Tech</option>
            <option value="M-Tech">M-Tech</option>
            <option value="BSc">BSc</option>
            <option value="MSc">MSc</option>
            <option value="MBA">MBA</option>
          </select>
          <span id="alert-education" class=""> </span>
        </div>
        <div class="label">
          <label for="interests">Interests</label>
        </div>
        <div class="">
          <select class="value" name="interest[]" multiple id="interests" >
            <option value="Artificial Intelligence" id="interest1" value="Artificial Intelligence">Artificial Intelligence</option>
            <option value="Android Development" id="interest2" value="Android Development" >Android Development</option>
            <option value="Analysis" id="interest3" value="Analysis">Analysis</option>
            <option value="Machine Learning" id="interest4" value="Machine Learning">Machine Learning</option>
            <option value="Software Development" id="interest5" value="Software Development">Software Development</option>
          </select>
          <span id="alert-interests" class=""> </span>
        </div>
        <div class="label">
          <label for="professional_links">Professional Links</label>
        </div>
        <div class="value">
          <input class="value" type="text" name="professional_links" value="" id="professional_links">
          <span id="alert-professional_links" class=""> </span>
        </div>

          </div>
          <div class="">
            <button type="submit" name="submit" value="process">Submit</button>
          </div>
      </form>
      </div>
      </div>

  </body>
</html>

function validate(){
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var dob = document.getElementById('dob').value;
  var image = document.getElementById('image').value;
  var gender = document.getElementsByName('gender');
  var contact_number = document.getElementById('contact_number').value;
  var skill=[-1];
  for (var i=1;i<8;i++){
    if(document.getElementById('skill'+i).value == ""){
      continue;
    }
    else{
      skill.push(document.getElementById('skill'+i).value);
    }

  }
  var about = document.getElementById('about').value;
  var address = document.getElementById('address').value;
  var education = document.getElementById('education').value;
  var interests = document.getElementById('interests').value;
  var professional_links = document.getElementById('professional_links').value;
          console.log(gender);
  if(name ==''){
    document.getElementById('alert-name').style.color="red";
    document.getElementById('alert-name').innerHTML ="Name can't be empty";
    return false;
  }
  else{
    document.getElementById('alert-name').innerHTML ="";
  }
  if(email ==''){
    document.getElementById('alert-email').style.color="red";
    document.getElementById('alert-email').innerHTML ="Email can't be empty";
    return false;
  }
  else{
    document.getElementById('alert-email').innerHTML ="";
  }
  if(dob ==''){
    document.getElementById('alert-dob').style.color="red";
    document.getElementById('alert-dob').innerHTML ="DOB can't be empty";
    return false;
  }
  else{
      document.getElementById('alert-dob').innerHTML ="";
    }

  if(image ==''){
    document.getElementById('alert-image').style.color="red";
    document.getElementById('alert-image').innerHTML ="Please select an image to upload";
    return false;
  }
  else{
    document.getElementById('alert-image').innerHTML ="";
  }
  if(gender == null){
    document.getElementById('alert-gender').style.color="red";
    document.getElementById('alert-gender').innerHTML ="Please specify your Gender";
    return false;
  }
  else{
    document.getElementById('alert-gender').innerHTML ="";
  }
  if(contact_number ==''){
    document.getElementById('alert-contact_number').style.color="red";
    document.getElementById('alert-contact_number').innerHTML ="Contact can't be empty";
    return false;
  }
  else{
    document.getElementById('alert-contact_number').innerHTML ="";
  }
  if(skill.length ==0){
    document.getElementById('alert-skill').style.color="red";
    document.getElementById('alert-skill').innerHTML ="Please add atlest one Skill";
    return false;
  }
  else{
    document.getElementById('alert-skill').innerHTML ="";
  }
  if(about ==''){
    document.getElementById('alert-about').style.color="red";
    document.getElementById('alert-about').innerHTML ="About can't be empty";
    return false;
  }
  else{
    document.getElementById('alert-about').innerHTML ="";
  }
  if(address ==''){
    document.getElementById('alert-address').style.color="red";
    document.getElementById('alert-address').innerHTML ="Address can't be empty";
    return false;
  }
  else{
    document.getElementById('alert-address').innerHTML ="";
  }
  if(education ==''){
    document.getElementById('alert-education').style.color="red";
    document.getElementById('alert-education').innerHTML ="Please Specify your Educational Qualification";
    return false;
  }
  else{
    document.getElementById('alert-education').innerHTML ="";
  }
  if(interests ==''){
    document.getElementById('alert-interests').style.color="red";
    document.getElementById('alert-interests').innerHTML ="Please Select your interest area";
    return false;
  }
  else{
    document.getElementById('alert-interests').innerHTML ="";
  }
  if(professional_links ==''){
    document.getElementById('alert-professional_links').style.color="red";
    document.getElementById('alert-professional_links').innerHTML ="Please provide your linkdin profile link";
    return false;
  }
  else{
    document.getElementById('alert-professional_links').innerHTML ="";
  }
}

function validate_dob(){
  var current_date= new Date();
  var dob = document.getElementById('dob').value;
  if (new Date(dob)>current_date){
    document.getElementById('alert-dob').style.color="red";
    document.getElementById('alert-dob').innerHTML ="Please select a valid date";
    return false;
  }
  else{
    document.getElementById('alert-dob').innerHTML ="";
  }
}

<?php
  $name = $_POST['name'];
  $gender = $_POST['gender']
  $address = $_POST['address'];
  $phone_number = $_POST['phone-number'];
  $whatsapp_number = $_POST['whatsapp-number'];
  $visitors_email = $_POST['email'];
  
  $birthday = $_POST['bday'];
  $academics = $_POST['academics'];
  $language = $_POST['language'];
  
  $acting_training = $_POST['acting-training'];
  $awards = $_POST['awards'];
  $experience = $_POST['experience'];
  $hobbies = $_POST['hobbies'];
  $skills = $_POST['skills'];
  $passport = $_POST['passport'];
  $passport_number = $_POST['passport-number'];
  $height = $_POST['height'];
  $weight = $_POST['weight'];
  $vitals = $_POST['vitals'];
  $skin_tone = $_POST['skin-tone'];
  $color_of_hair = $_POST['color-of-hair'];
  $hair_length = $_POST['hair-length'];
  $eye_color = $_POST['eye-color'];
  $numbered_eye = $_POST['numbered-eye'];
  $color_of_eye = $_POST['color-of-eye'];
  $maritial_status = $_POST['maritial-status'];
  $name = $_POST['children'];
  $name = $_POST[''];
  $name = $_POST[''];
  $prefered_audition_time = $_POST['prefered-audition-time'];
  $upload_photo = $_POST['upload-photo'];
  $submit = $_POST['submit'];
  $register = $_POST['register'];
  $name = $_POST[''];
  
  
  
  
  $email_from = 'roushansingh0099pc@gmail.com';
  
  $email_subject = "registration-form-details";

  $email_body = "NAME: $name.\n".
  "GENDER: $gender.\n".
    "ADDRESS: $address.\n".
      "PHONE_NUMBER: $phone_number.\n".
      "WHATSAPP: $whatsapp_number.\n".
        "VISITORS_EMAIL: $visitors_email.\n".
          "BIRTHDAY: $birthday.\n".
            "ACADEMICS: $academics.\n".
              "ACTING_TRAINING: $acting_training.\n";
              "AWARDS: $awards.\n".
        "EXPERIENCE: $experience.\n".
          "HOBBIES: $hobbies.\n".
            "SKILLS: $skills.\n".
              "PASSPORT: $passport.\n";
              "PASSPORT_NUMBER: $passport_number.\n".
        "HEIGHT: $height.\n".
          "WEIGHT: $weight.\n".
            "VITALS: $vitals.\n".
              "SKIN_TONE: $skin_tone.\n";
              "COLOR_OF_HAIR: $color_of_hair.\n".
              "LENGTH_OF_HAIR: $hair_length.\n".
                "COLOR_OF_EYE: $eye_color.\n".
                  "NUMBERED_EYE: $numbered_eye.\n".
                    "COLOR_OF_EYE: $color_of_eye.\n";
                    "MARITIAL_STATUS: $maritial_status.\n".
              ": .\n".
                ": .\n".
                  "PREFERED_TIME_FOR_AUDITION: $prefered_audition_time.\n".
                    "PORTFOLIO_PHOTO: $upload_photo.\n";
                    "PORTFOLIO_PHOTO: $submit.\n";
                    "REGISTERED: $register.\n";
                    ": $.\n";
  
                 
  $to = "roushansingh0099pc@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply to: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("Location: form,index.html");
?>
  
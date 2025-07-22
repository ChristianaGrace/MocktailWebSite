<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Form</title>
<link href="register.css" rel="stylesheet">
<style>


/* div.form
{
    display: block;
    text-align: center;
    height :50%;
    width : 400%;

} */



   .form-control {
     width: 100%;
     padding: 0.75rem;
     margin-bottom: 1rem;
     border: 1px solid #ced4da;
     border-radius: 0.25rem;
   }

 .registration-form
{
    /* display:center; */
    text-align: center;
     margin: auto;
     justify-content: center;
     height:auto;
     box-shadow: 0 0 10px rgba(158, 71, 71, 0.1);
     background: rgba(255, 255, 255, 0.8);
    padding: 20%;
    width: 400%;
    /* position:center; */

}

body, html {

margin: 0;
padding: 0;
font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
font-size: 16px;
height:100%;
width:100%;
display:flex;
justify-content: center;
align-items: center;
background-image: url('images/4.jpg');
background-repeat: no-repeat; /* prevents the image from repeating */
background-size: cover; /* ensures the image covers the entire background */
background-position: center; /* centers the image */

}

/*.form-container {
background: rgba(255, 255, 255, 0.8);
padding: 20%;
width: 100%;
border-radius: 10px;
box-shadow: 0 0 10px rgba(158, 71, 71, 0.1);
display: flex;
justify-content: center;
align-items: center;
height: 50%;
}
*/


 .registration-form {
background: rgba(255, 255, 255, 0.8);
padding: 20px;
border: solid thin white;
border-radius: 10px;
box-shadow: 0 0 10px rgba(158, 71, 71, 0.1);
width: 60%;
} 

/* body {
    justify-content: center;
    align-items: center;
    margin: auto;
    padding: 20;
    background-image: url('images/4.jpg');
    background-repeat: no-repeat; /* prevents the image from repeating */
    background-size: cover; /* ensures the image covers the entire background */
    background-position: center; /* centers the image */
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    /*   font-size: 16px;
    background: url('https://source.unsplash.com/random/?mocktail') no-repeat center center fixed;
       background-size: cover;
     justify-content: center;
     height:50%;
     background: rgba(255, 255, 255, 0.8);
    padding: 20px;
    border: solid thin white;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(158, 71, 71, 0.1);
    width: 90%;
    position:center
   }*/
 .registration-form input[type="text"] {

  }
  .registration-form input[type="text"],
  .registration-form textarea {
      width: 90%;
      padding: 10px;
      margin: auto;
      border: 2px solid #ccc;
      border-radius: 5px;
      position : center;
      justify-content: center;
     text-align: center;

  }
  .registration-form input[type="date"],
  .registration-form textarea {
    width: 90%;
      padding: 10px;
      margin: auto;
      border: 5px solid #ccc;
      border-radius: 5px;
      position : center;
      justify-content: center;
     text-align: center;
  }

  .registration-form input[type="password"],
  .registration-form textarea {
    width: 90%;
      padding: 10px;
      margin: auto;
      border: 5px solid #ccc;
      border-radius: 5px;
      position : center;
      justify-content: center;
     text-align: center;
  }


  button {
     width: 50%;
     padding: 10px;
     background-color: #2e3c4b;
     color: #fff;
     border: none;
     border-radius: 5px;
     cursor: pointer;
     justify-content: center;
    align-items: center;

  }
  button:hover {
     background-color: #2e3c4b;
     width: 50%;
      padding: 10px;
      background-color: #28a745;
      border-radius: 5px;
      color: white;
      cursor: pointer;

  }

  .registration-form div{
    margin-bottom: 20px;
  }
  .registration-form button:hover {
  background-color: #218838;
  }

   .form-control:focus {
     border-color: #80bdff;
     outline: 0;
     box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
  }

</style>
</head>
<body>
<form method ="post" action="register.php" class="registration-form">
<h2 class="mb-3">Registration Form</h2>
<div>
<label for="username" class="form-label">Username</label><br>
<input type="text" class="form-control" name="username" id="username" required>
</div> 

<div class="mb-3">
<label for="firstName" class="form-label">First Name</label><br>
<input type="text" class="form-control" name="firstName" id="firstName" required>
</div>

<div class="mb-3">
<label for="surname" class="form-label">Surname</label> <br>
<input type="text" class="form-control" name="surname" id="surname" required>
</div>


<div class="mb-3">
<label for="email" class="form-label">Email</label><br>
<input type="text" class="form-control"  name="email" id="email" required>
</div> 

<div class="mb-3">
<label for="dob" class="form-label">Date of Birth</label><br>
<input type="date" class="form-control" name="dob" id="dob" required>
</div>

<div class="mb-3">
<label for="password" class="form-label">Password</label> <br>
<input type="password" class="form-control" name="password" id="password"id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required required>
</div>


<button type="submit" class="btn btn-primary">Register</button>
</form>

<?php
if (isset($_SESSION['status'])) {
  $statusMessage = $_SESSION['status'];
  unset($_SESSION['status']);
  echo "<script>
        window.onload = function() {
            alert('$statusMessage');
        }
    </script>";
}

?>


<script>
document.addEventListener("DOMContentLoaded", function() {
    var popupMessage = document.getElementById('popupMessage');
    if (popupMessage) {
        alert(popupMessage.textContent);
        window.onload = function() {
          alert('$statusMessage');
    }
  }
});

</script>

</body>
</html>

<form id="myForm">
  <label>Name:</label>
  <input type="text" id="name" required><br><br>

  <label>Email:</label>
  <input type="email" id="email" required><br><br>

  <label>Password:</label>
  <input type="password" id="password" required><br><br>

  <input type="submit" value="Submit">
</form>

<script>
$(document).ready(function() {
  $("#myForm").submit(function(event) {
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();

    if (name == "" || email == "" || password == "") {
      alert("Please fill out all fields.");
      event.preventDefault();
    }
  });
});
</script>



<style>
  .valid {
    border: 2px solid green;
  }
  .invalid {
    border: 2px solid red;
  }
</style>

<form id="myForm">
  <label>Name:</label>
  <input type="text" id="name" required><br><br>

  <label>Email:</label>
  <input type="email" id="email" required><br><br>

  <label>Password:</label>
  <input type="password" id="password" required><br><br>

  <input type="submit" value="Submit">
</form>

<script>
$(document).ready(function() {
  $("#name, #email, #password").keyup(function() {
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();

    if (name != "" && email != "" && password != "") {
      $("#name, #email, #password").removeClass("invalid").addClass("valid");
    } else {
      $("#name, #email, #password").removeClass("valid").addClass("invalid");
    }
  });
});
</script>


// mobile otp verification in php

<?php

// Your SMS gateway API key
$apiKey = "YOUR_API_KEY";

// The mobile number to which the OTP will be sent
$mobileNumber = "+1234567890";

// Generate a random OTP
$otp = rand(1000, 9999);

// The message that will be sent with the OTP
$message = "Your OTP is " . $otp;

// Use the API key and mobile number to send the OTP
$url = "https://api.smsgateway.com/send?api_key=" . urlencode($apiKey) . "&number=" . urlencode($mobileNumber) . "&message=" . urlencode($message);

// Send the OTP
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Store the OTP in the session for later use
session_start();
$_SESSION['otp'] = $otp;

?>


<?php

session_start();

// Get the OTP entered by the user
$enteredOtp = $_POST['otp'];

// Check if the entered OTP matches the one stored in the session
if ($enteredOtp == $_SESSION['otp']) {
    echo "OTP verified successfully";
} else {
    echo "OTP verification failed";
}

?>


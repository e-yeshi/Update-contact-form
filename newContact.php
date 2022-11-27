<?php include '../menu.php';?>
<div class= "col-md-12 col-lg-12" style="min-height: 25.5em; ">
<html xmlns="http://www.w3.org/1999/xhtml">
		<title>New Contacts</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
	</head>
	
	<body>
    <?php
      $firstName = $_POST['fname'];
      $lastName  = $_POST['lname'];
      $email     = $_POST['email'];
      $phone     = $_POST['phone'];
      $address   = $_POST['address'];
      $city      = $_POST['city'];
      $zip       = $_POST['zip'];
      $state     = $_POST['state'];
      if(empty( $firstName) || empty( $lastName) || empty( $email) || empty( $phone) || empty( $address) || empty( $city) || empty( $zip) || empty( $state))
      {
        echo "<p>You must enter value in each field. Click your browser's back button to the form</p>";
      }
      else{
        $updatedContact = $firstName.','.$lastName.','.$email.','.$phone.','.$address.','.$city.','.$state.','.$zip."\n";
        $handle = fopen("contacts.txt", "at");
          if(flock($handle, LOCK_EX)){
            $bytes = fwrite($handle, $updatedContact);
            flock($handle, LOCK_UN);
            fclose($handle);
            if($bytes>0){
              echo "<p>Contact Created Successfully</p>";
            }

          }else{
            echo "<p>Could Not Write file Try again later</p>";
          }
          
        
        
        
      }


    ?>
      <div>
        <br/>
        <a href='./index.php'>Return To Directory</a>
      </div>
    <button type="button" class="home-button btn btn-success" onclick="window.location.href = '../index.php';">Home</button>
  </body>
<html>
</div>
<?php include '../footer.php';?>

updateContact.php
<?php include '../menu.php';?>
<div class= "col-md-12 col-lg-12" style="min-height: 25.5em; ">
<html xmlns="http://www.w3.org/1999/xhtml">
		<title>Update Contact</title>
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
        echo "<div>
                <br/>
                <a href='./index.php'>Return To Directory</a>
              </div>
              ";
      }
      elseif($_POST['myforms'] == 'edit'){
        //perform update file
        $unChangedContacts='';
        $updatedContact = $firstName.','.$lastName.','.$email.','.$phone.','.$address.','.$city.','.$state.','.$zip."\n";
        if (($handle = fopen("contacts.txt", "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if($data[0] != $firstName && $data[1] != $lastName) 
                $unChangedContacts= $unChangedContacts. $data[0].','.$data[1].','.$data[2].','.$data[3].','.$data[4].','.$data[5].','.$data[6].','.$data[7]."\n";
          }
          $handle = fopen("contacts.txt", "wt");
          if(flock($handle, LOCK_EX)){
              $bytes = fwrite($handle, $updatedContact);
              $bytes2 = fwrite($handle, $unChangedContacts);
              flock($handle, LOCK_UN);
              fclose($handle);
              if($bytes>0){
                echo "<p>Contact Updated Successfully</p>
                <div>
                  <br/>
                  <a href='./index.php'>Return To Directory</a>
                </div>
                ";
              }
              else{
                echo "<p>File not written</p>
                <div>
                  <br/>
                  <a href='./index.php'>Return To Directory</a>
                </div>
                ";
              }
          }
          else{
            fclose($handle);
            echo "<p>Could Not Write file Try again later</p>
            <div>
              <br/>
              <a href='./index.php'>Return To Directory</a>
            </div>
            ";
          }
        }

      }
      elseif($_POST['myforms'] == 'search'){?>
        <form action='updateContact.php' method='post'>
          <?php echo "<input type='hidden' name='myforms' value='edit'/>"?>
          <div class='head row'>
            <div class='contacts-container col-md-12 col-lg-12'>
              <h2 class='buttons'>Update contact</h2>
              <br />
              <div class='row'>
                <div class='col-md-5 col-lg-5'>
                  First Name : 
                  <?php echo "<input type='text' name='fname' value='{$firstName}'/>"?>
                </div>
                <div class='col-md-5 col-lg-5'>
                  Last Name : 
                  <?php echo "<input type='text' name='lname' value='{$lastName}'/>"?>
                </div>
                <br/><br/>
              </div>
              <div class='row'>
                <div class='col-md-12 col-lg-12'>
                  Email Address : 
                  <?php echo "<input class='email-field' type='email' name='email' value='{$email}'/>"?>
                  <br/><br/>
                </div>
                <div class='col-md-5 col-lg-5'>
                  Phone No : 
                  <?php echo "<input type='text' name='phone' value='{$phone}'/>"?>
                  <br/><br/>
                </div>
              </div>
              <div class='row'>
                <div class='col-md-5 col-lg-5'>
                  Address : 
                  <?php echo "<input class='address-field' type='text' name='address' value='{$address}'/>"?>
                </div>
                <div class='col-md-5 col-lg-5'>
                  City : 
                  <?php echo "<input type='text' name='city' value='{$city}'/>"?>
                </div>
                <br/><br/>
              </div>
              <div class='row'>
                <div class='col-md-5 col-lg-5'>
                  State : 
                  <select name='state'>
                      <option value='Alabama' <?php echo $state=='Alabama'? "selected": '';?>>Alabama</option>
                      <option value='Alaska' <?php echo $state=='Alaska'? "selected": '';?>>Alaska</option>
                      <option value='Arizona' <?php echo $state=='Arizona'? "selected": '';?>>Arizona</option>
                      <option value='Arkansas' <?php echo $state=='Arkansas'? "selected": '';?>>Arkansas</option>
                      <option value='California' <?php echo $state=='California'? "selected": '';?>>California</option>
                      <option value='Colorado' <?php echo $state=='Colorado'? "selected": '';?>>Colorado</option>
                      <option value='Connecticut' <?php echo $state=='Connecticut'? "selected": '';?>>Connecticut</option>
                      <option value='Delaware' <?php echo $state=='Delaware'? "selected": '';?>>Delaware</option>
                      <option value='District Of Columbia' <?php echo $state=='District Of Columbia'? "selected": '';?>>District Of Columbia</option>
                      <option value='Florida' <?php echo $state=='Florida'? "selected": '';?>>Florida</option>
                      <option value='Georgia' <?php echo $state=='Georgia'? "selected": '';?>>Georgia</option>
                      <option value='Hawaii' <?php echo $state=='Hawaii'? "selected": '';?>>Hawaii</option>
                      <option value='Idaho' <?php echo $state=='Idaho'? "selected": '';?>>Idaho</option>
                      <option value='Illinois' <?php echo $state=='Illinois'? "selected": '';?>>Illinois</option>
                      <option value='Indiana' <?php echo $state=='Indiana'? "selected": '';?>>Indiana</option>
                      <option value='Iowa' <?php echo $state=='Iowa'? "selected": '';?>>Iowa</option>
                      <option value='Kansas' <?php echo $state=='Kansas'? "selected": '';?>>Kansas</option>
                      <option value='Kentucky' <?php echo $state=='Kentucky'? "selected": '';?>>Kentucky</option>
                      <option value='Louisiana' <?php echo $state=='Louisiana'? "selected": '';?>>Louisiana</option>
                      <option value='Maine' <?php echo $state=='Maine'? "selected": '';?>>Maine</option>
                      <option value='Maryland' <?php echo $state=='Maryland'? "selected": '';?>>Maryland</option>
                      <option value='Massachusetts' <?php echo $state=='Massachusetts'? "selected": '';?>>Massachusetts</option>
                      <option value='Minnesota' <?php echo $state=='Minnesota'? "selected": '';?>>Minnesota</option>
                      <option value='Mississippi' <?php echo $state=='Mississippi'? "selected": '';?>>Mississippi</option>
                      <option value='Missouri' <?php echo $state=='Missouri'? "selected": '';?>>Missouri</option>
                      <option value='Montana' <?php echo $state=='Montana'? "selected": '';?>>Montana</option>
                      <option value='Nebraska' <?php echo $state=='Nebraska'? "selected": '';?>>Nebraska</option>
                      <option value='Nevada' <?php echo $state=='Nevada'? "selected": '';?>>Nevada</option>
                      <option value='New Hampshire' <?php echo $state=='New Hampshire'? "selected": '';?>>New Hampshire</option>
                      <option value='New Jersey' <?php echo $state=='New Jersey'? "selected": '';?>>New Jersey</option>
                      <option value='New Mexico' <?php echo $state=='New Mexico'? "selected": '';?>>New Mexico</option>
                      <option value='New York' <?php echo $state=='New York'? "selected": '';?>>New York</option>
                      <option value='North Carolina' <?php echo $state=='North Carolina'? "selected": '';?>>North Carolina</option>
                      <option value='North Dakota' <?php echo $state=='North Dakota'? "selected": '';?>>North Dakota</option>
                      <option value='Ohio' <?php echo $state=='Ohio'? "selected": '';?>>Ohio</option>
                      <option value='Oklahoma' <?php echo $state=='Oklahoma'? "selected": '';?>>Oklahoma</option>
                      <option value='Oregon' <?php echo $state=='Oregon'? "selected": '';?>>Oregon</option>
                      <option value='Pennsylvania' <?php echo $state=='Pennsylvania'? "selected": '';?>>Pennsylvania</option>
                      <option value='Rhode Island' <?php echo $state=='Rhode Island'? "selected": '';?>>Rhode Island</option>
                      <option value='South Carolina' <?php echo $state=='Rhode Island'? "selected": '';?>>South Carolina</option>
                      <option value='South Dakota' <?php echo $state=='South Dakota'? "selected": '';?>>South Dakota</option>
                      <option value='Tennessee' <?php echo $state=='Tennessee'? "selected": '';?>>Tennessee</option>
                      <option value='Texas' <?php echo $state=='Texas'? "selected": '';?>>Texas</option>
                      <option value='Utah' <?php echo $state=='Utah'? "selected": '';?>>Utah</option>
                      <option value='Vermont' <?php echo $state=='Vermont'? "selected": '';?>>Vermont</option>
                      <option value='Virginia' <?php echo $state=='Virginia'? "selected": '';?>>Virginia</option>
                      <option value='Washington' <?php echo $state=='Washington'? "selected": '';?>>Washington</option>
                      <option value='West Virginia' <?php echo $state=='West Virginia'? "selected": '';?>>West Virginia</option>
                      <option value='Wisconsin' <?php echo $state=='Wisconsin'? "selected": '';?>>Wisconsin</option>
                      <option value='Wyoming' <?php echo $state=='Wyoming'? "selected": '';?>>Wyoming</option>
                  </select>
                </div>
                <div class='col-md-5 col-lg-5'>
                Zip : 
                <?php echo "<input type='text' name='zip' value='{$zip}'/>"?>
                </div>
                <br/><br/>
              </div>
            </div>
          </div>
          <div class='buttons col-md-12 col-lg-12'>
          <button type='submit' class='btn btn-warning'>Update Entry</button>
          </div>
          <div>
            <br/>
            <a href='./index.php'>Return To Directory</a>
          </div>  
        </form>
        <?php
        }
        ?>
  </body>
</html>
<button type='button' class='home-button btn btn-success' onclick='window.location.href = '../index.php';'>Home</button>
</div>
<?php include '../footer.php';?>

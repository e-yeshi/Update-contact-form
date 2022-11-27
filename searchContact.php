searchContact.php
<?php include '../menu.php';?>
<div class= "col-md-12 col-lg-12" style="min-height: 25.5em; ">
<html xmlns="http://www.w3.org/1999/xhtml">
		<title>Online Contacts Directory</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
	</head>
	
	<body>
    <h2 class="buttons">Searched Contact</h2>
    <?php
      $firstName = $_POST['fname'];
      $lastName = $_POST['lname'];
      /*$handle = fopen("contacts.txt", 'r');
        $value = fgets($handle);
        echo $value;
      fclose($handle);*/
      $result  = [];
      if(empty($firstName) || empty($lastName)){
        echo "<p>You must enter value in each field. Click your browser's back button to the form</p>";
      }
      else{
        if (($handle = fopen("contacts.txt", "r")) !== FALSE) {
          while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if($data[0] == $firstName && $data[1] == $lastName) 
                array_push($result, $data );

          }
          fclose($handle);
          if($result != NULL){
            echo "<form action='updateContact.php' method='post'>
                  <input type='hidden' name='myforms' value='search'/>
                  <div class='contacts-container'>
                  <div class='row'>
                    <div class='col-md-5 col-lg-5'>
                      <b>First Name : </b>
                      <input type='text' name='fname' value = '{$result[0][0]}' readonly='readonly'/>
                    </div>
                    <div class='col-md-5 col-lg-5'>
                      <b>Last Name : </b>
                      <input type='text' name='lname' value = '{$result[0][1]}' readonly='readonly'/>
                    </div>
                    <br/><br/>
                  </div>
                  <div class='row'>
                    <div class='col-md-12 col-lg-12'>
                     <b>Email Address : </b>
                     <input type='text' class='email-field' name='email' value = '{$result[0][2]}' readonly='readonly'/>
                      <br/><br/>
                    </div>
                    <div class='col-md-5 col-lg-5'>
                      <b>Phone No : </b>
                      <input type='text' name='phone' value = '{$result[0][3]}' readonly='readonly'/>
                      <br/><br/>
                    </div>
                  </div>
                  <div class='row'>
                    <div class='col-md-5 col-lg-5'>
                      <b>Address : </b>
                      <input type='text' class='address-field' name='address' value = '{$result[0][4]}' readonly='readonly'/>
                    </div>
                    <div class='col-md-5 col-lg-5'>
                      <b>City : </b>
                      <input type='text' name='city' value = '{$result[0][5]}' readonly='readonly'/>
                    </div>
                    <br/><br/>
                  </div>
                  <div class='row'>
                    <div class='col-md-5 col-lg-5'>
                      <b>State : </b>
                      <select name='state' value = '{$result[0][6]}' readonly='readonly'>
                        <option value='{$result[0][6]}'>{$result[0][6]}</option>
                      </select>
                    </div>
                    <div class='col-md-5 col-lg-5'>
                      <b>Zip : </b>
                      <input type='text' name='zip' value = '{$result[0][7]}' readonly='readonly'/>
                    </div>
                    <br/><br/>
                  </div>
                  </div>
                  <div class='buttons col-md-12 col-lg-12'>
                  <button type='submit' class='btn btn-warning'>Edit Entry</button>
                  </div>
                  </form>
                  ";
          }
          elseif ($result == NULL){
            echo "The contact you searched for is not in the Directory Try Again";
          }
        }
      }
    ?>
    <br />
    <br />
    <br />
    <a href='./index.php'>Contacts Directory</a>
  </body>
</html>

<button type="button" class="home-button btn btn-success" onclick="window.location.href = '../index.php';">Home</button>
</div>
<?php include '../footer.php';?>

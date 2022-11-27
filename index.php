<?php include '../menu.php';?>
<div class= "col-md-12 col-lg-12" style="min-height: 25.5em; ">
<html xmlns="http://www.w3.org/1999/xhtml">
		<title>Online Contacts Directory</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
	</head>
	
	<body>
    <h2 class="buttons">Online Contacts Directory</h2>

    <form action="searchContact.php" method="post">
      <div class="head row">
        <div class="contacts-container">
          <h2 class="buttons">Search for a contact</h2>
          <br />
          First Name : 
          <input type="text" name="fname"/>
          <br />
          <br />
          Last Name : 
          <input type="text" name="lname"/>
        </div>

      </div>
      <div class="buttons col-md-12 col-lg-12">
        <input type="submit" value="Search">
        <input type="reset" value="Clear"
      </div>
      <div>
        <br/>
        <a href='./newContact.shtml'>Add New Contact</a>
      </div>

      
    </form>
  </body>
</html>
<button type="button" class="home-button btn btn-success" onclick="window.location.href = '../index.php';">Home</button>
</div>
<?php include '../footer.php';?>

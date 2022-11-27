newContact.shtml
﻿<html xmlns="http://www.w3.org/1999/xhtml">
		<title>Add New Contact</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
	
	<body>
		<!--#include virtual="../menu.php"-->
		<div class= "col-md-12 col-lg-12" style="min-height: 25.5em; ">
			<form action="newContact.php" method="post">
				<div class="head row">
					<div class="contacts-container col-md-12 col-lg-12">
						<h2 class="buttons">Create New contact</h2>
						<br />
						<div class="row">
							<div class="col-md-5 col-lg-5">
								First Name : 
								<input type="text" name="fname"/>
							</div>
							<div class="col-md-5 col-lg-5">
								Last Name : 
								<input type="text" name="lname"/>
							</div>
							<br/><br/>
						</div>
						<div class="row">
							<div class="col-md-12 col-lg-12">
								Email Address : 
								<input class='email-field' type="email" name="email"/>
								<br/><br/>
							</div>
							<div class="col-md-5 col-lg-5">
								Phone No : 
								<input type="text" name="phone"/>
								<br/><br/>
							</div>
						</div>
						<div class="row">
							<div class="col-md-5 col-lg-5">
								Address : 
								<input class='address-field' type="text" name="address"/>
							</div>
							<div class="col-md-5 col-lg-5">
								City : 
								<input type="text" name="city"/>
							</div>
							<br/><br/>
						</div>
						<div class="row">
							<div class="col-md-5 col-lg-5">
								State : 
								<select name="state">
									<option value="Alabama">Alabama</option>
									<option value="Alaska">Alaska</option>
									<option value="Arizona">Arizona</option>
									<option value="Arkansas">Arkansas</option>
									<option value="California">California</option>
									<option value="Colorado">Colorado</option>
									<option value="Connecticut">Connecticut</option>
									<option value="Delaware">Delaware</option>
									<option value="District Of Columbia">District Of Columbia</option>
									<option value="Florida">Florida</option>
									<option value="Georgia">Georgia</option>
									<option value="Hawaii">Hawaii</option>
									<option value="Idaho">Idaho</option>
									<option value="Illinois">Illinois</option>
									<option value="Indiana">Indiana</option>
									<option value="Iowa">Iowa</option>
									<option value="Kansas">Kansas</option>
									<option value="Kentucky">Kentucky</option>
									<option value="Louisiana">Louisiana</option>
									<option value="Maine">Maine</option>
									<option value="Maryland">Maryland</option>
									<option value="Massachusetts">Massachusetts</option>
									<option value="Michigan">Michigan</option>
									<option value="Minnesota">Minnesota</option>
									<option value="Mississippi">Mississippi</option>
									<option value="Missouri">Missouri</option>
									<option value="Montana">Montana</option>
									<option value="Nebraska">Nebraska</option>
									<option value="Nevada">Nevada</option>
									<option value="New Hampshire">New Hampshire</option>
									<option value="New Jersey">New Jersey</option>
									<option value="New Mexico">New Mexico</option>
									<option value="New York">New York</option>
									<option value="North Carolina">North Carolina</option>
									<option value="North Dakota">North Dakota</option>
									<option value="Ohio">Ohio</option>
									<option value="Oklahoma">Oklahoma</option>
									<option value="Oregon">Oregon</option>
									<option value="Pennsylvania">Pennsylvania</option>
									<option value="Rhode Island">Rhode Island</option>
									<option value="South Carolina">South Carolina</option>
									<option value="South Dakota">South Dakota</option>
									<option value="Tennessee">Tennessee</option>
									<option value="Texas">Texas</option>
									<option value="Utah">Utah</option>
									<option value="Vermont">Vermont</option>
									<option value="Virginia">Virginia</option>
									<option value="Washington">Washington</option>
									<option value="West Virginia">West Virginia</option>
									<option value="Wisconsin">Wisconsin</option>
									<option value="Wyoming">Wyoming</option>
								</select>
							</div>
							<div class="col-md-5 col-lg-5">
							Zip : 
								<input type="text" name="zip"/>
							</div>
							<br/><br/>
						</div>
						
						
					</div>

				</div>
				<div class="buttons col-md-12 col-lg-12">
					<input type="submit" value="Add Entry">
					<input type="reset" value="Clear">
				</div>

				<div>
					<br/>
					<a href='./index.php'>Return To Directory</a>
				</div>
			</form>
			
			<button type="button" class="home-button btn btn-success" onclick="window.location.href = '../index.php';">Home</button>
		</div>
		<!--#include virtual="../footer.php"-->
	</body>
</html>

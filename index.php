<!-- Created by Ben Starr, Date Feb 7 2017, Loop through array and display data in a table with a clickable button that alerts the user of the name and email address for the row clicked -->
 <?php 
 
 //array of data
 $people = array(
   array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
   array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
   array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
   array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
   array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

//create table for display with headers
$table = '<table><tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Email</th><th>Secret Button</th></tr>';

//add array data into table
foreach($people as $row) {
    $table .= "<tr><td class='id'>" . $row['id'] . "</td><td class='first_name'>" . $row['first_name'] . "</td><td class='last_name'>" . $row['last_name'] . "</td><td class='email'>" . $row['email'] . "</td><td><button class='tableBtn'>Secret Message</td></tr>" ;
}

//close table tag
$table .= '</table>';
	
 
 ?>  
 
 
 <!-- HTML CODE-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    		<title>Ben Starr Test</title>
			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
 	 </head>
 
 <body>
	 <!-- Show table created-->
	<?php echo $table;?>
 </body>
 
 <script>
	//wait for docuemnt
	$(function(){
		
		//When button clicked build name and email string to alert user
		$('.tableBtn').click(function(){
			
			//declare variables and get data
			var firstName = $(this).closest('td').siblings('.first_name').text();
			var lastName = $(this).closest('td').siblings('.last_name').text();
			var email = $(this).closest('td').siblings('.email').text();
			
			// build message and alert user
			var message = firstName + ' ' + lastName + ' ' + email;
			alert(message);
		});
	});
 </script>
 
 
 </html>

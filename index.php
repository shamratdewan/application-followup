<?php
/*
Position: Web Developer
MD. Salahuddin Dewan                                                               
20 Moorecroft Crescent,
Scarborough, ON M1K 3V1
Email: shamratdewan@yahoo.com
Mobile: +1 6479044522
*/
class Interview
{
	public $title = 'Interview test';
}
$lipsum = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus incidunt, quasi aliquid, quod officia commodi magni eum? Provident, sed necessitatibus perferendis nisi illum quos, incidunt sit tempora quasi, pariatur natus.';
$people = array(
	array('id'=>1, 'first_name'=>'John', 'last_name'=>'Smith', 'email'=>'john.smith@hotmail.com'),
	array('id'=>2, 'first_name'=>'Paul', 'last_name'=>'Allen', 'email'=>'paul.allen@microsoft.com'),
	array('id'=>3, 'first_name'=>'James', 'last_name'=>'Johnston', 'email'=>'james.johnston@gmail.com'),
	array('id'=>4, 'first_name'=>'Steve', 'last_name'=>'Buscemi', 'email'=>'steve.buscemi@yahoo.com'),
	array('id'=>5, 'first_name'=>'Doug', 'last_name'=>'Simons', 'email'=>'doug.simons@hotmail.com')
);

// form variable should be checked to see if the form has been submitted otherwise $person will have empty data. if(isset($_POST)$$!empty($_POST)){}
$person = $_POST['person'];  // form method was GET it should be $person = $_GET['person']; however best practice is to keep the form method to POST
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Interview test</title>
	<style>
		body {font: normal 14px/1.5 sans-serif;}
	</style>
</head>
<body>

	<h1><?=Interview::$title;?></h1>
	<?php /*
			The :: is used to access static, constant possible solutions is:
			$obj_Interview= new Interview(); 
			$newtitle='title';
			<h1><?=$obj_Interview->$newtitle;?></h1>
			*/
	?>
	
	<?php
	// Print 10 times
	for ($i=10; $i<0; $i++) {   // $i was set to 10 then run till $i less then zero which makes the loop not work at all. correct expression: for ($i=0; $i<10; $i++){}
		echo '<p>'+$lipsum+'</p>';
	}
	?>


	<hr> <!-- not valid on XHTML 1.0 should be <hr /> valid everywhere --> 


	<form method="get" action="<?=$_SERVER['REQUEST_URI'];?>"> <!-- form data was accessed using post to keep the person variable as it is, it should be method="post" --> 
		<p><label for="firstName">First name</label> <input type="text" name="person[first_name]" id="firstName"></p> 
		<p><label for="lastName">Last name</label> <input type="text" name="person[last_name]" id="lastName"></p> 
		<p><label for="email">Email</label> <input type="text" name="person[email]" id="email"></p> 
		<p><input type="submit" value="Submit" /></p>
	</form>

	<?php if ($person):  // This will give a notice if person is empty, which is true before the form has been submitted correctly. if(isset($person)||!empty($person)):?>
		<p><strong>Person</strong> <?=$person['first_name']; // Notice! as above $person['first_name'] has not been checked if it has a value, before print ?>, <?=$person['last_name']; // as above $person['first_name'] has not been checked if it has a value, before print ?>, <?=$person['email']; // as above $person['first_name'] has not been checked if it has a value, before print ?></p>
	<?php endif; ?>


	<hr> <!-- not valid on XHTML 1.0 should be <hr /> valid everywhere --> 


	<table>
		<thead>
			<tr>
				<th>First name</th>
				<th>Last name</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($people as $person): ?>
				<tr>
					<td><?=$person->first_name; //Notice! $person->first_name needs to be check if it has value if(isset($person->first_name)||!empty($person->first_name)): ?></td>
					<td><?=$person->last_name; //Notice! as above $person->last_name has not been check before print correct expression similar to above  ?></td>
					<td><?=$person->email; //Notice! as above $person->last_name has not been check before print correct expression similar to above ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>
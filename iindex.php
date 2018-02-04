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

	<?php
	// Print 10 times
	for ($i=10; $i<0; $i++) {   // $i was set to 10 then run till $i less then zero which makes the loop not work at all. correct expression: for ($i=0; $i<10; $i++){}
		echo '<p>'+$lipsum+'</p>';
	}
	?>


	<hr> <!-- not valid on XHTML 1.0 should be <hr /> valid everywhere --> 


	<form method="get" action="<?=$_SERVER['REQUEST_URI'];?>">
		<p><label for="firstName">First name</label> <input type="text" name="person[first_name]" id="firstName"></p> 
		<p><label for="lastName">Last name</label> <input type="text" name="person[last_name]" id="lastName"></p> 
		<p><label for="email">Email</label> <input type="text" name="person[email]" id="email"></p> 
		<p><input type="submit" value="Submit" /></p>
	</form>

	<?php if ($person): ?>
		<p><strong>Person</strong> <?=$person['first_name'];?>, <?=$person['last_name'];?>, <?=$person['email'];?></p>
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
					<td><?=$person->first_name;?></td>
					<td><?=$person->last_name;?></td>
					<td><?=$person->email;?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>

</body>
</html>
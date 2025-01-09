<?php # index.php
$page_title = 'Welcome to this Site!';
include ('includes/header.html');

function create_menu() {
	echo '<h1>Welcome to My PHP Labwork Collections</h1>

	<p>Here are the pages that I\'ve created: </p>
	<p>1. Program Registration</p>
	<p>2. Menu 1</p>
	<p>3. Menu 2</p>
	<p>4. Menu 3</p>';
} // End of the function definition.

// Call the function:
create_menu();


include ('includes/footer.html');
?>
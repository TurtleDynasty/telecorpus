<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Telecorpus Conlang</title>
</head>

<body role="document">

	<h1>Telecorpus Conlang</h1>
	<pre>
	<?php
		echo file_get_contents( "introduction.txt" );
		echo file_get_contents( "inventory.txt" );
		echo file_get_contents( "grammar.txt" );
		echo file_get_contents( "orthography.txt" );
		echo file_get_contents( "romanization.txt" );
	?>
	</pre>
</body>
</html>

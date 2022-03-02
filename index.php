<?php
class Movie
{
	public $title;
	public $year;
	public $director;
	// public $critics_rating;
	// public $public_rating;
	public $average_rating;

	function __construct($title, $year, $director/* , $critics_rating, $public_rating */)
	{
		$this->title = $title;
		$this->year = $year;
		$this->director = $director;
		/* 		$this->critics_rating = $critics_rating;
		$this->public_rating = $public_rating; */
	}

	public function setAverageRating($critics_rating, $public_rating)
	{
		$average_rating = ($critics_rating + $public_rating) / 2;
		$this->average_rating = $average_rating;
	}

	public function getAverageRating()
	{
		return $this->average_rating;
	}
}

$django_unchained = new Movie('Django Unchained', '2013', 'Quentin Tarantino'/* , 86, 93 */);
$django_unchained->setAverageRating(86, 93);
$green_mile = new Movie('The Green Mile', '1999', 'Frank Darabont'/* , 79, 94 */);
$green_mile->setAverageRating(79, 94);
$titanic = new Movie('Titanic', '1998', 'James Cameron'/* , 89, 94 */);
$titanic->setAverageRating(89, 94);
$shutter_island = new Movie('Shutter Island', '2010', 'Martin Scorsese'/*, 68, 93 */);
$shutter_island->setAverageRating(68, 93);
/* 
var_dump($django_unchained);
echo "<br />";
var_dump($green_mile);
echo "<br />";
var_dump($titanic);
echo "<br />";
var_dump($shutter_island);
echo "<br />";
*/

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./style.css">
	<title>php oop</title>
</head>

<body>
	<h1>Movies</h1>
	<h3>Code Name: django_unchained</h3>
	<ul>
		<li>
			<h4>Title:</h4>
			<p><?= $django_unchained->title ?></p>
		</li>
		<li>
			<h4>Year:</h4>
			<p><?= $django_unchained->year ?></p>
		</li>
		<li>
			<h4>Director:</h4>
			<p><?= $django_unchained->director ?></p>
		</li>
		<li>
			<h4>Average rating:</h4>
			<p><?= $django_unchained->average_rating ?></p>
		</li>
	</ul>
	<h3>Code Name: green_mile</h3>
	<ul>
		<li>
			<h4>Title:</h4>
			<p><?= $green_mile->title ?></p>
		</li>
		<li>
			<h4>Year:</h4>
			<p><?= $green_mile->year ?></p>
		</li>
		<li>
			<h4>Director:</h4>
			<p><?= $green_mile->director ?></p>
		</li>
		<li>
			<h4>Average rating:</h4>
			<p><?= $green_mile->average_rating ?></p>
		</li>
	</ul>
	<h3>Code Name: titanic</h3>
	<ul>
		<li>
			<h4>Title:</h4>
			<p><?= $titanic->title ?></p>
		</li>
		<li>
			<h4>Year:</h4>
			<p><?= $titanic->year ?></p>
		</li>
		<li>
			<h4>Director:</h4>
			<p><?= $titanic->director ?></p>
		</li>
		<li>
			<h4>Average rating:</h4>
			<p><?= $titanic->average_rating ?></p>
		</li>
	</ul>
	<h3>Code Name: shutter_island</h3>
	<ul>
		<li>
			<h4>Title:</h4>
			<p><?= $shutter_island->title ?></p>
		</li>
		<li>
			<h4>Year:</h4>
			<p><?= $shutter_island->year ?></p>
		</li>
		<li>
			<h4>Director:</h4>
			<p><?= $shutter_island->director ?></p>
		</li>
		<li>
			<h4>Average rating:</h4>
			<p><?= $shutter_island->average_rating ?></p>
		</li>
	</ul>
</body>

</html>
<?php
class Movie
{
	public $title;
	public $year;
	public $director;

	function __construct($title, $year, $director)
	{
		$this->title = $title;
		$this->year = $year;
		$this->director = $director;
	}
}

$django_unchained = new Movie('Django Unchained', '2013', 'Quentin Tarantino');
$green_mile = new Movie('The Green Mile', '1999', 'Frank Darabont');
$titanic = new Movie('Titanic', '1998', 'James Cameron');
$shutter_island = new Movie('Shutter Island', '2010', 'Martin Scorsese');

var_dump($django_unchained);
var_dump($green_mile);
var_dump($titanic);
var_dump($shutter_island);

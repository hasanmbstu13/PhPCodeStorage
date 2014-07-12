<?php
$products = array(
	'paper' => array(
		'copier' => "Copier & Multipurpose",
		'inkjet' => "Inkjet Printer",
		'laser'  => "Laser Printer",
		'photo'  => "Photographic Paper"),

	'pens' => array(
		'ball'   => "Ball Point",
		'hilite' => "Highlighters",
		'marker' => "Markers",
		'sex' => array (
				'condom' => "Protection")),

	'misc' => array(
		'tape'   => "Sticky Tape",
		'glue'   => "Adhesives",
		'clips'  => "Paperclips") );

echo "<pre>";
foreach ($products as $section => $items )

	foreach ($items as $key => $value)
		echo "$section:\t$key\t($value)<br>";

echo "</pre>";


foreach ($products as $section => $items)
{
	foreach ($items as $key => $value)
	{
		echo "$section:\t$key\t($value)<br>";

		// check whether the current item is an array!
		if(is_array($value))
		{
			echo "$key is sub array:<br />";
			foreach($value as $subKey => $subValue)
				echo "$subKey:\t$subValue<br />";
		}
	}

}

?>
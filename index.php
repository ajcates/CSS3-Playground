<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>ajcates's CSS3 playground.</title>
	<link rel="stylesheet" href="main.css" type="text/css" media="screen" title="test" />
</head>
<body>
	<header>
		<h1><a href="">ajcates</a>'s CSS3 Playground</h1>
		<h2>&amp; some php5.3</h2>
	</header>
	<article>
		
		<h2>CSS3 Wrapping Drop Shadows</h2>
		<a href="#" class="button">Button</a>
		<a href="#" class="button">Button with slightly longer text.</a>
		<pre>
<?
		
		
		function f_map($func, $val) {
			return array_map($func, $val);
		}
		echo join(f_map(
			function($v) {
				return $v . 'lol, ';
			},
			range(0, 150)
		));
		
		echo "\n\n";
	
		$test = array();
		$test2 = array(null);

		if(empty($test)) {
			echo 'test is empty';
		}
		echo "\n\n";
		if(empty($test2)) {
			echo 'test2 is empty';
		}

		
			
		$array1 = array(0 => 'zero_a', 2 => 'two_a', 3 => 'three_a');
		$array2 = array(1 => 'one_b', 3 => 'three_b', 4 => 'four_b');
		
		$result = $array1 + $array2;
		var_dump($result);
		
		$result2 = array_merge($array1, $array2);
		var_dump($result2);
		
		?>
		</pre>
		<label for="testbox">Checkbox1</label>
		<input type="checkbox" name="checkboxtest" value="test" id="testbox" />
		<label for="testbox2">Checkbox2</label>
		<input type="checkbox" name="checkboxtest" value="other" id="testbox2" />
		
	</article>
</body>
</html>
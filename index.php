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
		<aside>
			<h2>What?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</aside>
		<h2>CSS3 Wrapping Drop Shadows</h2>
		<a href="#" class="button">@Bennie's</a>
		<a href="#" class="button">Buttons</a>
		<pre><?
			
		//	print_r(range('a', 'z'));
			
			$alphabet = range('a', 'z');
			$backwardsAlphabet = array_reverse($alphabet);
			print_r(array_map(
				function($a) use($backwardsAlphabet) {
					static $count = 0;
					return join(range($a, $backwardsAlphabet[$count++]));
				},
				$alphabet
			));
			

		?></pre>
		<label for="testbox">Checkbox1</label>
		<input type="checkbox" name="checkboxtest" value="test" id="testbox" />
		<label for="testbox2">Checkbox2</label>
		<input type="checkbox" name="checkboxtest" value="other" id="testbox2" />
		
	</article>
	<footer>
		<p>Created by ajcates - New BSD License</p>
	</footer>
</body>
</html>
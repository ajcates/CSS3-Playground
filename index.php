<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta charset="UTF-8" />
	<title>ajcates's CSS3 playground.</title>
	<link rel="stylesheet" href="main.css" type="text/css" media="screen" title="test" />
	<script type="text/javascript" src="http://include.reinvigorate.net/re_.js"></script>
	<script type="text/javascript">try {reinvigorate.track("n103t-vgni938aya");} catch(err) {}</script>
</head>
<body>
	<header>
		<h1><a href="">ajcates</a>'s CSS3 Playground</h1>
		<h2>&amp; some php5.3</h2>
	</header>
	<article>
		<aside>
			<h2>What?</h2>
			<p>This is just a place where I can play around with CSS3.</p>
			<p>This is a playground for me to play around with CSS3 and have fun. Right now this page most likely only works in Webkit based browsers.</p>
		</aside>
		<h2>First off this page only works in webkit based browsers.</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		
		<div id="gradient-triangle"></div>
		
		<form id="alex" action="#" method="post">
			<h4><a href="http://forrst.com/people/alexbrooke">@Alexbrooke</a>'s letter press email form thingy in CSS3:</h4>
			<input type="email" name="email" placeholder="Your e-mail address…" />
			<input type="submit" value="Submit" />
			<!-- @alexbrooke I think your totally cute and admire a 16 year old girl doing web development. I would so ask you out had I lived in the uk. :) -->
		</form>
		
		<a href="#" class="button purple">@Bennie's</a>
		<a href="#" class="button purple">Buttons</a>
		<ul id="centerList">
			<li>Item 1</li>
			<li>Item 2</li>
			<li>Item 3</li>
			<li>Item 4</li>
			<li>Item 5</li>
			<li>Item 6</li>
		</ul>	
		<h3>Things I want add:</h3>
		<ul>
			<li>Fancy lists styles</li>
			<li>Different color buttons</li>
			<li>Sidebar popout thingy</li>
			<li>Something fancy with media queries</li>
		</ul>
		
		
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
		<h2>CSS3 Wrapping Drop Shadows</h2>
	</article>
	<footer>
		<p>Created by <a href="http://ajcates.com">ajcates</a> - New BSD License</p>
	</footer>
</body>
</html>

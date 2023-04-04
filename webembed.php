---
title: The Green Ring Embed. If you are seeing this title something may have gone wrong.
---
<!DOCTYPE html>
<body>
{% raw %}
	<?php
		$filelocation = "/assets/ringmembers.json"
		$file = fopen($filelocation, "r")
		$json = fread($file, filesize($filelocation))
		echo $json
		$data = json_decode($json);
		echo $data
	?>
	{% endraw %}
	<noscript>As of now, this widget relies on javascript. Please enable it for proper function.</noscript>

	<div id="navigation">
		The Green Ring
		<a href="">Previous</a>
		<a href="">Random</a>
		<a href="">Next</a>
	</div>
	Um, excuse but what are you doing here at all
</body>
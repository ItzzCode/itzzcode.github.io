<!DOCTYPE html>
<html>
	<head>
		<title>itzz-me.xyz</title>
		<link rel="icon" type="image/png" href="images/icon.ico" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<meta charset="UTF-16" />
	</head>
	<body>
		<!-- Navbar -->
		<?php require('navbar.php');?>

		<!-- Copying -->
		<div style="background-color:lime;height:70px;margin:30px;padding:30px;border-radius:40px;font-family:Comic Sans MS;">
			<p style="font-size:30px; color:black;" align="center">
				I like esolangs
			</p><!--What are you doing here? Copying from you ;)--><!--b52cb885@181.44.184.133-->
			<p style="font-size:10px; color:lime;" align="center">
				Thanks for https://esolangs.org/wiki/User:DmilkaSTD and https://esolangs.org/wiki/User:Emerald (me), where I store this from
			</p>
		</div>

		<!-- johnvertisement -->
		<iframe src="https://john.mondecitronne.com/embed?ref=http://truttle1.xyz/truttlecities/~Itzzy/MainStreet/index.html" style="margin-left:auto;display:block;margin-right:auto;max-width:732px;width:100%;height:94px;border:none;"></iframe>

		<!--------------------------------------------------------------------------------------------------------->

		<p>
			Welcome to my website!

			You can check out some things I've done at the <a href="links.php">Links</a> page, but here's some of the cooler things:
			<ul>
				<li>This website</li>
				<li>Voicing Skrapps in <a href="https://youtube.com/playlist?list=PLO-PlVJRfGIUQMCNAMzSVCSk5RrKk4YSj">Time Will Tell</a></li>
				<li></li>
			</ul>	
		</p>

		<p>
			Also, check out this epic button right here!
			<!--https://stackoverflow.com/a/51006691 tux spite script-->
			<div id="btn"></div> 
			<script>
				function main() {
					window.location.replace("rehehe.html");   
				}

				document.addEventListener("DOMContentLoaded", function() {
					var element = document.createElement("button");
					element.appendChild(document.createTextNode("Tux1 Spite Button"));
					var page = document.getElementById("btn");
					page.appendChild(element);
					console.log(element);
					// https://stackoverflow.com/a/27466982
					document.getElementById("btn").setAttribute("onclick","main()");
				});
			</script>
			<noscript>
				Enable Javascript for this epic button that you are missing out on
			</noscript>
		</p>
		<p>
			georgius
			the infamous webringoid

			<iframe height="50" src="https://george.gh0.pw/embed.cgi?itzz%20me" style="border:none;width:100%;"></iframe>
		</p>

		<p>
			out of all GEORGE members who have listed cool people, i am in:
			0
		</p>

		<!-- Snowboy -->
		<!--joinked from ehird-->
		<!--<b style="position:absolute;width:100%;font-size:1000%;text-align:center;z-index:10000">☃</b>-->

		<!-- Footer -->
		<?php require('footer.php');?>
	</body>
</html>
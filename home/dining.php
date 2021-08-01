<?php 
session_start();
if (!isset($_SESSION['emal'])) {
	header("location:login.html");
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dining Room</title>
	
</head>
<body>
	<?php 
		include "home.php";

		 ?>
<section>
	<div id="image">
	<div><h2>Dining with a lake view</h2><img src="pics/dining/1.png"><p>
The dining room of this Minnesota lake home tilts traditional, but shiplap walls and cane armchairs painted blue loosen up the formality. A hanging branch pendant looks like driftwood, adding beachy flair and a focal point without obstructing the view.

</p></div>
	<div><h2>Eat light</h2><img src="pics/dining/2.png"><p>
Contemporary lighting and art energize the dining room in this 1913 Craftsman home in Saint Paul. The homeowners removed plate rail and vertical molding from the walls to make the room feel more modern and fresh.

</p></div>
	<div><h2>Vintage chic
</h2><img src="pics/dining/3.png"><p>
Scandinavian style inspired gray-painted wood floors in this Chicago-area house. The homeowner upholstered a mix of chairs with vintage grain sacks-easy to do with a staple gun. A vintage shutter leans against the wall.

</p></div>
<div><h2>Dark-hued beauty</h2><img src="pics/dining/4.png"><p>

Deep, luxurious hues evoke high-impact drama without a hint of gloom. Gwen Hefner of The Makerista blog reworked the dining room of her 1980s suburban Kansas City home with a bluish-black customized paint. "Everybody has something to say about it, and that's what I like," she says. "It evokes feeling."

</p></div>
	<div><h2>Antiques show</h2><img src="pics/dining/5.png"><p>

Statement pieces, such as a wine-barrel-stave chandelier and a 19th-century clock, add drama in the dining room of this Ohio home.

</p></div>
	<div><h2>Durable details</h2><img src="pics/dining/6.png"><p>

In this Chicago-area home, durable details let the homeowners rest easy. A distressed poplar table welcomes nicks. The oak flooring forgives scuffs.


</p></div>
	<div><h2>Rustic elegance</h2><img src="pics/dining/7.png"><p>

A welcoming warm palette of taupes and grays steers dinner parties in a relaxed direction in the dining room of this Michigan home. A twig chandelier adds rustic elegance above a farm table dressed up with side chairs in a whitewash finish. Grass-cloth wallpaper brings texture.
</p></div>
	<div><h2>Show an store</h2><img src="pics/dining/8.png"><p>

Elegant white ironstone and other vintage dishes act like art in the dining room of this Nebraska farmhouse. Modern dining chairs contrast a salvaged bench and a farm table made by the homeowner. A tight color palette pulls the styles together.



</p></div>
	<div><h2>Flea-market find</h2><img src="pics/dining/9.png"><p>
Lake houses and Old Glory go together like kids and vacation. The flag in the dining room of this Michigan lake home was a $10 flea-market find. The homeowner framed it with stained 1x4s held together with corner brackets-a vintage-style touch to relax a new home's perfect sheen.


</p></div>
	<div><h2>Making a slpash</h2><img src="pics/dining/10.png"><p>
This dining table's driftwood-like finish and a shell chandelier reference the nearby Lake Michigan shore.
</p></div>
	</div>
</section>
</body>
</html>
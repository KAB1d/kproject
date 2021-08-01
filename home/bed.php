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
	<title>Bed Room</title>
	
</head>
<body>
	<?php 
		include "home.php";

		 ?>
<section>
	<div id="image">
	<div><h2>Basket Beauties Bedroom</h2><img src="pics/bed/1.jpeg"><p>Over the headboard in this contemporary bedroom, a trio of baskets shows up handsomely against the white blank canvas of a wall.
</p></div>
	<div><h2>Mounted Antlers Bedroom</h2><img src="pics/bed/2.jpeg"><p>
Rustic antlers are the perfect complement to a chunky wooden bench and faux fur pillows in this rugged space.
</p></div>
	<div><h2>Dazzling Chandelier Bedroom
</h2><img src="pics/deal/3.jpeg"><p>
A beautiful blue chandelier adds a dose of elegance to this room's bold teal color palette

</p></div>
	<div><h2>Serene Canvas Art Bedroom</h2><img src="pics/bed/4.jpeg"><p>
Gold, white and soft pink hues create a dreamy, airy aesthetic

</p></div>
	<div><h2>Thrifted Silver Plates Bedroom</h2><img src="pics/bed/5.jpeg"><p> 
Just above the tufted headboard, antique silver plates are eloquently placed to bring a classic feel to a more contemporary design.

</p></div>
	<div><h2>Moody Florals Bedroom</h2><img src="pics/bed/6.jpeg"><p>
Give your headboard wall a boost by covering it in sultry, floral wallpaper.

</p></div>
	<div><h2>Floating Plant Shelf Bedroom</h2><img src="pics/bed/7.jpeg"><p>
Fixer Upper's Joanna Gaines gave this light-filled space a green boost by installing a floating shelf for plants and other collected items above the bed

</p></div>
	<div><h2>Colorful Gallery Wall Bedroom</h2><img src="pics/bed/8.jpeg"><p>
Spruce up your space with vibrant color. Create an interesting gallery wall that incorporates a multitude of shades and patterns in a chic, cohesive way.

</p></div>
	<div><h2>Geometric Mirror Bedroom</h2><img src="pics/bed/9.jpeg"><p>
Glam up your space and make an all-white bedroom feel even more radiant with an over-sized, dimensional mirror

</p></div>
	<div><h2>Boho Bliss Bedroom</h2><img src="pics/bed/10.jpeg"><p>
A handmade macrame wall hanging adds a touch of casual texture to this laid back Boho haven.


</p></div>
	</div>
</section>
</body>
</html>
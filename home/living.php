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
	<title>Living Room</title>
	
</head>
<body>
	<?php 
		include "home.php";

		 ?>
<section>
	<div id="image">
	<div><h2>Art Deco livingroom</h2><img src="pics/deal/1.jpeg"><p>Art deco came about in the 1920s and features geometric shapes and bright colors. Here, the style can be seen throughout the light fixtures, gold accents and Hollywood-glam artwork. Lime green and turquoise are a dynamic duo that invigorate the space with color and energy, another art deco style trait
</p></div>
	<div><h2>Asian livingroom</h2><img src="pics/deal/2.jpeg"><p>Clean lines, color and ornate details make up the Asian design style. This living room features an elaborate floral wallpaper, simple furnishings and abundance of color, bringing an Asian-flair to the space.</p></div>
	<div><h2>Coastal livingroom
</h2><img src="pics/deal/3.jpeg"><p>A coastal design style features light, bright colors that mimic the outdoor surroundings. Often seen in coastal-style designs, natural and woven materials add texture. This open-concept coastal living room features bright pops of blues and greens and beachy art, paired with neutral furnishings
</p></div>
	<div><h2>Contemporary livingroom</h2><img src="pics/deal/4.jpeg"><p>Contemporary style focuses on clean lines mixed with cohesive colors and patterns. The contemporary living room seen here, features streamlined furniture and oversized colorful artwork. The light, neutral colors seen throughout the living room, allow the dark, beamed ceiling to shine.
</p></div>
	<div><h2>Country livingroom</h2><img src="pics/deal/5.jpeg"><p>Country designs use natural elements paired with a pastel color palette. This living room features a natural wood ceiling, rustic exposed beams, and an unpainted brick fireplace. These natural tones are paired with blue and white furnishings, evoking a charming country look.
</p></div>
	<div><h2>Eclectic livingroom</h2><img src="pics/deal/6.jpeg"><p>Eclectic designs marry varying textures and styles together into one. This white living room combines furnishings and fixtures across different styles, creating a uniquely beautiful space.
</p></div>
	<div><h2>Hollywood Glam livingroom</h2><img src="pics/deal/7.jpeg"><p>Hollywood glam is synonymous with adjectives such as decadent and fabulous. This design style often features gold accents, bold artwork and luxe furnishings, all of which can be seen in this living space.
</p></div>
	<div><h2>Industrial livingroom</h2><img src="pics/deal/8.jpeg"><p>An industrial design style mixes metal and a darker palette to evoke a rugged appearance. To achieve the urban look in this apartment, mixed metals are paired with exposed beams and dark colors. Custom sliding doors with smoked glass conceal the lower level office and guest room. The upper level master bedroom features panels designed to look like industrial windows. Exposed ductwork, a modern light fixture and spiral staircase add to the industrial feel.
</p></div>
	<div><h2>Midcentury Modern livingroom</h2><img src="pics/deal/9.jpeg"><p>Midcentury modern style surfaced during the middle of the 20th century and is still a popular design style today. This mid-mod living space features colorful furniture accented by wooden details, clean lines and plenty of pattern.
</p></div>
	<div><h2>Minimalist livingroom</h2><img src="pics/deal/10.jpeg"><p>Minimalism embraces clean and simple design, eliminating any trace of clutter. This living room hosts only the most essential elements, creating a crisp, straightforward space.

</p></div>
	</div>
</section>
</body>
</html>
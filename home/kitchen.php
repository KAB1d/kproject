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
	<div><h2>Classic Kitchen</h2><img src="pics/kitchen/1.jpg"><p>Classic kitchen style is defined by white or cream kitchen cabinets, simple architectural details and black accents. It’s a simple and clean look that offers homeowners a blank slate that they can personalize with decorative elements such as lighting, furniture and traditional and eclectic touches as they see fit to express personality and style.
</p></div>
	<div><h2>Coastal Kitchen</h2><img src="pics/kitchen/2.jpeg"><p>
A key element of the coastal kitchen style is soothing colors like cool shades of blue, sea foam green, light beige and soft pinks to create a coastal vacation mood. Whites and creams are predominant base colors, contributing to a color scheme both bright and lively while relaxing at the same time. You will see wicker seating and casual elements such as fabrics and flooring that can stand up to wet clothing. Window treatments should be light to allow for maximum sunlight. Accessories and backsplashes tiles will feature beach themes or sea life features.
</p></div>
	<div><h2>Cottage Kitchen
</h2><img src="pics/kitchen/3.jpg"><p>
Cottage kitchens are inspired by smaller kitchens of the past and designed to feel cozy and unpretentious. Beadboard, soft colors, vintage hardware, wood floors, colorful accents and curtains will infuse your kitchen with cottage comfort. It allows for eclectic collectibles and antiques as design accents. Appliances can be in white or retro colors.

</p></div>
	<div><h2>Contemporary Kitchen</h2><img src="pics/kitchen/4.jpg"><p>
The contemporary kitchen style has come to reflect a mix of new and old, casual and polished. It will feature modern gourmet cooking equipment, comfortable seating and open space guests to interact with cooks during entertaining. It may have frameless cabinets, sleek and simple hardware, strong horizontal lines but still leave room for some playful finishes and decor

</p></div>
	<div><h2>Craftsman Kitchen</h2><img src="pics/kitchen/5.jpg"><p>
Craftsman style still harkens back to its origins as a reaction to the popularity of mass-produced consumer products. It places an emphasis on natural materials, rich woods, handcrafted tiles, old-fashioned faucets, fine craftsmanship, sturdy proportions, built-ins and well-made materials with classic simplicity.

</p></div>
	<div><h2>Eclectic Kitchen</h2><img src="pics/kitchen/6.jpg"><p>
The eclectic style is defined as ideas and objects taken from a broad and diverse range of sources. This is the perfect style for homeowners that are also eclectic. Why commit to a singular style if you don’t want to? You can mix and match for your own kitchen style in any way that suits you. Take your ideas for your kitchen, and combine touches of modern and rustic styles, and add finishing touches that you love, from artwork to patterns and colors.

</p></div>
	<div><h2>Farmhouse Kitchen</h2><img src="pics/kitchen/7.jpg"><p>
Farmhouse kitchens are warm and inviting, offering functionality and comforting traditional style. Features will include open shelving, wide sinks, and wood flooring. A big kitchen table is another traditional feature. Country colors range from primary red, yellow and blue to aged tones of cream and pale yellow. Mixing and matching of more than one color is common. Lighting will usually be simple and vintage inspired.

</p></div>
	<div><h2>French Country Kitchen</h2><img src="pics/kitchen/8.jpg"><p>
French country kitchens will have a balance between, earthy, traditional and chic. Signs of wear or patina on surfaces are acceptable. The colors are warm, fabrics will feature rich tones of russet, cobalt, and ochre, cabinets can be warm toned wood or sleek white and ceramic accessories will be right at home. Mustard yellow and warm reds are characteristic, as are farm animals mixed in with the decor.  Rough-hewn textures, copper pots, and rush seats add the final touches.

</p></div>
	<div><h2>Industrial Kitchen</h2><img src="pics/kitchen/9.jpg"><p>
Industrial kitchens feature raw textural materials, including metal, concrete, steel, and wood. Brick walls are totally in style and exposed steel surfaces are welcome. A little bit of wear or clunkiness in furnishings, and oversized pieces will work. It’s a style with its history rooted in practicality and affordability that has grown to be found in even modern lofts and condos. This style allows you to mix the unfinished with chic to create a stylish look.

</p></div>
	<div><h2>Mediterranean Kitchen</h2><img src="pics/kitchen/10.jpg"><p>
Flared hoods, hand-painted tile, warm wood cabinets, beamed ceilings and arched cooking alcoves are just some of the features that will turn a kitchen into Mediterranean style. Lively colors such as blues and greens are common for walls, with other colors used as accents. Artistic tile work is common and a terracotta or mosaic backsplash is a feature.
Floors may be hardwood and walls often feature soothing, natural colors. Cabinets are often constructed from high-quality woods like cherry; they can be left in their natural state or stained or painted to add a colorful element to the design


</p></div>
	</div>
</section>
</body>
</html>
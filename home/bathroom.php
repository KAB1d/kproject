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
	<title>Bath Room</title>
	
</head>
<body>
	<?php 
		include "home.php";

		 ?>
<section>
	<div id="image">
	<div><h2>Contemporary Style Bathroom</h2><img src="pics/bath/1.jpg"><p>Clean lines, clutter-free expanses of open space, and minimalist adornment are all hallmarks of contemporary style bathrooms. Expect to see plenty of polished hardwood, metal accents, and a clean and simple color palette in this type of décor.
Light and dark elements are often used together to create visual contrast. Simplicity is at the heart of contemporary styling, and the focus is on the details. Look closely for high-quality door pulls and knobs made from muted brushed metals in addition to countertops and flooring constructed from durable stone, wood, or tile.
</p></div>
	<div><h2>Eclectic Style Bathroom</h2><img src="pics/bath/2.jpg"><p>Eclectic styling is inclusive of a little bit of everything. A carefully curated collection of design elements comprises the décor of the eclectic bathroom. Expect the unexpected in these types of settings.
A fleur-de-lis pattern in an unexpected yellow or perhaps a sparkling crystal chandelier with gold patina accenting. Unusual color choices and a mix of textures, materials, and finishes are common in this style.</p></div>
	<div><h2>Modern Style Bathroom</h2><img src="pics/bath/3.jpg"><p>Modern style bathrooms are bold, strong, and simple with clean and straight lines and an absence of clutter. Straight lines are a defining feature of modern styling bathrooms and are exhibited in countertops, sinks, and even artwork.
Top quality materials such as stone, porcelain, teak, and marble are common elements of modern design, in addition to small pops of color from art or fresh greenery.
</p></div>
	<div><h2>Traditional Style Bathroom</h2><img src="pics/bath/4.jpg"><p>Traditional style bathrooms emphasize comfort, functionality, and practicality.
Classic colors punctuate this design setting. Polished wood, complementary colors, and the usage of glass, tile, and marble are all integral parts of traditional bathrooms.
Typically neutral in tone, traditional bathrooms are comfortable, relaxing, and inviting.
</p></div>
	<div><h2> Asian Style Bathroom</h2><img src="pics/bath/5.jpg"><p>Asian style bathrooms are sparingly adorned and maximize open space, air, and light. Fresh green plants accentuate the bathroom space and provide gentle bursts of color and contrast.
Asian style bathrooms typically utilize an array of soft browns, beiges, and cream colors, and may feature polished wood flooring and accents, marble, or tile.
</p></div>
	<div><h2>Craftsman-Style Bathroom</h2><img src="pics/bath/6.jpg"><p>Craftsman styling places a significant emphasis on artisanal and handcrafted wood period pieces with high levels of details and accents.
Craftsman style cabinetry is a great example of the kind of intricate detailing that is so readily abundant in this style. Quality and durability are the aims of a Craftsman bathroom.
Design components tend to be of exceptional quality and may include granite, glass, and metal detailing.
</p></div>
	<div><h2>Mediterranean Bathroom</h2><img src="pics/bath/7.jpg"><p>Mediterranean style primary bathrooms are brimming with opulent details. Woven rugs in rich colors adorn the floors or walls. Natural colored tile is accented by rich, dark brown wood, and luxurious metal detailing.
Textures, lighting, and generous amounts of bold contrasting colors define the Mediterranean styled bathroom in a signature fashion.
The overall look and feel of the setting are distinct with Greek and European undertones throughout the space.
</p></div>
	<div><h2>Midcentury Bathroom</h2><img src="pics/bath/8.jpg"><p>Midcentury style bathrooms utilize vintage furniture in the Eames style and adorn it with beautiful ornamentation like brushed gold metals and large mirrors in unique shapes.
Kitschy Vintage details in fun colors are integral parts of the Midcentury look and vibe. The midcentury style used color as a punchy accent to add contrast and visual appeal. Swaths of fresh and crisp white are used to give this environment a serene feel.
</p></div>
	<div><h2>Tropical Style Bathroom</h2><img src="pics/bath/9.jpg"><p>Tropical style bathrooms usually feature a simple design aesthetic with a focus on lush green foliage and the top quality craftsmanship of the materials used throughout the bathroom.
Expect to see an exotic stone or polished wood floors, open ceiling beams, plenty of greenery, and raw detailing with a natural flair. Open layouts offering copious amounts of light and space are typical of these bathroom styles.
</p></div>
	<div><h2>Victorian Style Bathroom</h2><img src="pics/bath/10.jpg"><p>The Victorian style bathroom features design elements such as jewel-tone tiling, gold trim accenting, floral prints, claw-foot bathtubs, and pedestal sinks.
Common decorative touches include painted knobs and handles, intricate rugs, and a mixture of various colored woods and finishes.
The color white is prominent in a Victorian bathroom and is strongly represented through porcelain furnishings.

</p></div>
	</div>
</section>
</body>
</html>
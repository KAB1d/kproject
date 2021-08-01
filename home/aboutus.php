<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: right;
  width: 40%;
  margin-bottom: 16px;
  padding-right: 50px;
  padding-left: -30px;
  margin-left: 100px;
  display: inline-flex;
  justify-content: space-between;

}
.row{
  float: left;
  margin-left: 60px;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: indigo;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 1000px) {
  .column {
    width: 100%;
    display: block;

  }
}
</style>
<script type="text/javascript">
  function cont(){
    location.href="ContactUs.php";
  }
</script>
</head>
<body>

<div class="about-section">
  <h1>About Us </h1>
  <p>At K&K Design, we document inspiration. Our aim is to bring to our readers a steady set of resources that would help them visualize, create and maintain beautiful homes.</p><p> Our emphasis is on visuals that motivate you. We cover architectural innovations, cool homes, ideas for specific rooms, new design trends, products and occasionally decor tips.</p> <p>We hope to become your one stop source for home design inspiration!.</p></div>

<div class="about-section">
  <p>Our mission is to help people visualize, create & maintain beautiful homes.</p><p> We bring to you inspiring visuals of cool homes, specific spaces, architectural marvels and new design trends.</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="kana.jpg" alt="Glary" width="100px" height="100px" style="border-radius: 50px;">
      <div class="container">
        <h2>KANANI Fulgence</h2>
        <p class="title">Design Director</p>
        <p>Design is so simple. That's why it's so complicated.</p>
        <p>kananifulgence44@gmail.com</p>
        <p><button class="button" onclick="cont()">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="derrr.jpg" alt="Ande" width="100px" height="100px" style="border-radius: 50px;">
      <div class="container">
        <h2>KABANDA Derrick</h2>
        <p class="title">CEO & Founder</p>
        <p>Everything is designed. Few things are designed well.</p>
        <p>derrickkabanda70@gmail.com</p>
        <p><button class="button" onclick="cont()">Contact</button></p>
      </div>
    </div>
  </body>
  </html>
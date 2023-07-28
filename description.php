<!DOCTYPE html>
<html lang="en">

<head>


  <meta charset="utf-8">
 
  <title>INDIAN TOURISM</title>
  <link rel="stylesheet" href="project.css">
  <link rel="icon" href="images/title-icon.jpg" type="image/jpg">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
  <!-- <div class="container"> -->
	<header class="header">

		<img src="images/logo.jpg">

		<b>Incredible <span>!</span>ndia </b>
</header>
<nav class="nav">
    <label for="toggle">&#9776;</label>
    <input type="checkbox" id="toggle">
    <div class="menu">
            <a href="index.php" class="active">Home</a>
            <a href="destination.php">Destinations</a>
            <!-- <a href="index.php">Experiences</a> -->
            <a href="javascript:void(0)"  class="dropbtn">Experiences</a>
            <div class="dropdown-content">
                    <a href="heritage.php">Heritage</a>
                    <a href="spritual.php">Spiritual</a>
                    <a href="wildlife.php">Wildlife</a>
                    <a href="nature.php">Nature</a>
            </div>
            <a href="BOOKING.php">Book Trip</a>
            
    </div>

</nav>

<main class="exprins-main" style="border-top:2px solid darkblue">

    <div class="description-container">
        <div class="row">
            <div class="column">
                    <img src="images/taj2.jpg" alt="Taj Mahal" Title="Taj Mahal-Agra" >
            </div>
          </div>

        <div class="row">
            <div class="column">
                    <span style="font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">Taj Mahal</span>
                    <p>Mughal emperor Shah Jahan, the creator of the Taj Mahal, said that the beauty of the monument made “the sun and the moon shed tears from their eyes”. It has also been described as a “teardrop on the cheek of eternity” by Nobel laureate Rabindranath Tagore. Every year, thousands of tourists from around the world make a beeline for this breathtakingly ethereal marble monument, considerd by many as the most beautiful building constructed by man. The monument was built as a memorial by Mughal emperor Shah Jahan for his deceased wife, Mumtaz Mahal. It is one of the seven wonders of the world and is a monument of pride for not just Agra but also India.</p>
                    <p>A UNESCO World Heritage Site, it is featured in almost all literature about India and is one of the most enduring images of the country. Its name is believed to have been drawn from the Persian language: ‘taj’ means crown and ‘mahal’ means palace, thus making this the palace of the crown. Interestingly, the queen it was built in memory of, originally named Arjumand Begum, held the name Mumtaz Mahal, which meant the crown of the palace. Although it is best known as a symbol of love, a grieving emperor’s ode to his deceased queen, another legend sees the Taj Mahal as an embodiment of Shah Jahan’s vision of kingship. The story goes that he sought to build something akin to heaven on earth, a spectacular, unbelievably beautiful monument that reinforced the power as well as the perceived divinity of the monarch as next only to the Almighty.</p>

            </div>
        </div>    

        <div class="row">
            <div class="column">
              <button type="button" id="more-details" value="Read More"  onclick="toggle_visibility('details');" >Read More</button>
            </div>
        </div>

        <div class="row">
          <div class="column">
                  <p id="details">The Taj Mahal is considered to be the greatest architectural achievement in the whole range of Indo-Islamic architecture. Its recognised architectonic beauty has a rhythmic combination of solids and voids, concave and convex and light shadow; such as arches and domes further increases the aesthetic aspect. The colour combination of lush green scape reddish pathway and blue sky over it show cases the monument in ever changing tints and moods. The relief work in marble and inlay with precious and semi precious stones make it a monument apart. </p>
                  
          </div>
      </div> 

    </div>

</main>

<!-- JavaScript For the Read More Button ------------------------------------------------->
<script type="text/javascript">
 
      function toggle_visibility(id) {
         var e = document.getElementById(id);
         var a= document.getElementById("more-details");
         if(e.style.display == 'block'){
          e.style.display="none";
            a.style.display = 'block';
         }
        
         else{
          e.style.display = 'block';
          a.style.display = 'none';
         }
           
      }

  </script>
<footer class="footer">
  <p>  &copy; Handle by Rishabh Rudrawal</p>
<div class="social-img">  
      
  <img class="img1" src="images/fb.png" alt="Facebook Logo">
  <img class="img2" src="images/insta.png" alt="Instagram Logo">
  <img class="img3" src="images/twiter.png" alt="Twitter Logo">
  <img class="img3" src="images/gmail.png" alt="Gmail Logo">
</div>          
</footer>
</body>

</html>

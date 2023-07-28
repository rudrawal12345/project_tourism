<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ᗰEᖇᗩ ᗷᕼᗩᖇᗩT</title>
    <link rel="stylesheet" href="style1.css"/>
</head>
<body>

    <footer class="contact">
        <div class="contact-heading">
        <h1><a href="index.php">CONTACT US</a></h1>
            <p>PLEASE FILL THE DETAILS</p>
        </div>
        <form action="userinformation1.php" method="post">
            <input type="text" name="user" placeholder="Your Full Name"/>
            <input type="email" name="email" placeholder="Your E-Mail"/>
            <input type="number" name="number" placeholder="Your Number"/>
            <input type="Arrival" class="textbox-n" type="text" onfocus="(this.type='date')" name="arrival_date" placeholder="arrival">
            <input type="Departure" class="textbox-n" type="text" onfocus="(this.type='date')" name="departure_date" placeholder="departure">

            <input list="country" placeholder="Select country" required>
            <datalist name="country">
              <option value="USA">
              <option value="Canada">
              <option value="Africa">
              <option value="France">
              <option value="China">
                <option value="India">
              
            </datalist>
          </div>
            <textarea name="message" placeholder="Type Your Message Here.........."></textarea>
            <button class="main-btn contact-btn" type="submit">Continue</button>
            
        </form>
        </main>
        <div class="form_row" style="margin-left: 0%; margin-top: 2%;">
            <div class="mapouter">
                    <div class="gmap_canvas"><iframe width="1000" height="500" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=isi%20coll&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"></iframe></div>
                    <style>
                            .mapouter {
                                    position: relative;
                                    text-align: right;

                            }

                            .gmap_canvas {
                                    overflow: hidden;
                                    background: none !important;

                            }
                    </style>
            </div>
    </div>
  <footer class="footer">
    <p> &copy; Handle by Rishabh Rudrawal</p>
    
    <div class="social-img">

           <a href="https://www.facebook.com/rishabh.rudrawal.5"target="_blank"> <img class="img1" src="images/fb.png" width="123"></a>
            <img class="img3" src="images/twiter.png">
            <img class="img4" src="images/gmail.png">
    </div>
  </footer>

</body>

</html>
    </footer>
</body>
</html>
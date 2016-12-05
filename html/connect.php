<?php include 'validation.php';?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Connect</title>
<link href="../css/gallery.css" rel="stylesheet" type="text/css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><script src="http://use.edgefonts.net/alex-brush:n4:default;devonshire:n4:default.js" type="text/javascript"></script>
</head>

<body>
<div class="container">
<div id="logo"><img src="../images/logo.jpg" width="1650" height="300" alt=""/></div>
<nav>
<ul>
<div class="outline"><li><a href="http://thegallery-houston.com">about</a></li></div>
<span><li>//</li></span>
<div class="outline"><li><a href="prices.html">pricing</a></li></div>
<span><li>//</li></span>
<div class="outline"><li><a href="ceremony-&-reception.html">details</a></li></div>
<span><li>//</li></span>
<div class="outline"><li><a href="images.html">images</a></li></div>
<span><li>//</li></span>
<div class="outline"><li><a href="http://thegallery-houston.com/calendar.html">calendar</a></li></div>
<span><li>//</li></span>
<div class="outline"><li><a href="connect.html">connect</a><hr></li></div>
</ul>
</nav>
<div id="moretext">
<div id="talk">
<h2>Let's Connect.</h2>
</div>
            
        <form action="" method="post" name="connnect.php" id="contactform">
              <div class="contactbox">
            <input name="name" type="text" id="namebox" class="textbox" placeholder="Name"><span class="err">* <?php echo $nameERR;?></span>
          </div>
              <div class="contactbox">
              <input name="number" type="tel" required id="tel" class="textbox" placeholder="Telephone">
              <span class="err">* <?php echo $phoneERR;?></span>
          </div>
          <div class="contactbox">
          <input name="email" type="email" required id="emailbox" class="textbox" placeholder="Email">
          <span class="err">* <?php echo $emailERR;?></span>
          </div>
          <div class="contactbox">
          <input name="date" type="text" class="textbox" id="datebox" placeholder="Event Date">
          <span class="err">* <?php echo $dateERR;?></span>
          </div>
          <div id="contactbox5">
            <textarea name="message" required id="messagebox" placeholder="Tell us about your event!"></textarea>
          </div>
              <div id="sendbutton">
            <input type="submit" class="imgClass1" value="">
          </div>
    </form>
      </div>
<div class="wrapper2">
<div class="social">
<div class="facebook"><a href="https://www.facebook.com/pages/The-Gallery-Houston-Wedding-Event-Venue/147620825258579" target="_blank">facebook</a>
</div>
<div class="instagram"><a href="http://instagram.com/thegalleryhouston" target="_blank">instagram</a>
</div>
<div class="wedwire"><a href="http://www.weddingwire.com/biz/the-gallery-houston/2c2703fd8d9286a6.html" target="_blank">wedding wire</a>
</div>
</div>
<div class="outside">
<div class="info"><p>6303 Beverly Hill St. Houston, TX 77057</p><p>713.255.2889</p>
</div>
</div>
<div id="copy">
<p>Website Designed by <a href="http://littlehouse-design.com" target="_blank">LittleHouse-Design.com</a></p>
<span><p>Copyright &copy; The Gallery 2015</p></span>
</div>
</div>
</div>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-2466391-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>

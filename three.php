 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="tarot, ask tarot, tarot reading, three cards reading, online reading, fortune viewer, psychic reading, oranum,e-mail readings" />
  <meta name="author" content="Sergey" />
  <meta name="description" content="Tarot Three Cards Reading" />
  <title>Free tarot three cards reading</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/css41.css">
<script type='text/javascript' src='js/jquery-1.6.4.js'></script>
<script>
var gen;
var past;
var present;
var future;
var yesno;
var sarray;
var addd;
var Ppast;
var Ppresent;
var Pfurure;
</script>
<script type='text/javascript' src='js/run.js'></script>
<script type='text/javascript' src='js/Past.js'></script>
<script type='text/javascript' src='js/Present.js'></script>
<script type='text/javascript' src='js/Future.js'></script>
<script>

/* DOM Utility Functions from PastryKit */
Element.prototype.hasClassName = function (a) {
    return new RegExp("(?:^|\\s+)" + a + "(?:\\s+|$)").test(this.className);
};

Element.prototype.addClassName = function (a) {
    if (!this.hasClassName(a)) {
        this.className = [this.className, a].join(" ");
    }
};

Element.prototype.removeClassName = function (b) {
    if (this.hasClassName(b)) {
        var a = this.className;
        this.className = a.replace(new RegExp("(?:^|\\s+)" + b + "(?:\\s+|$)", "g"), " ");
    }
};

Element.prototype.toggleClassName = function (a) {
  this[this.hasClassName(a) ? "removeClassName" : "addClassName"](a);
};
/* /DOM Utility Functions from PastryKit */

var init = function() {
<?php 
$numbers = range(0, 77);
shuffle($numbers);
$k=0;
foreach ($numbers as $number) {
    if ($k == 0)  $i = $number;
    if ($k == 1)  $ii = $number;
    if ($k == 2)  $iii = $number;
    $k++;
}




?>
var a = "<?php echo $i ?>";
var aa = "<?php echo $ii ?>";
var aaa = "<?php echo $iii ?>";


	document.getElementById('button').addEventListener( 'click', function(){
    
		document.getElementById('card').toggleClassName('flip');
		document.getElementById('card1').toggleClassName('flip');
		document.getElementById('card2').toggleClassName('flip');
	jQuery("#zzz").html("<h4>Past:</h4><p>"+Ppast[a]+"<hr><p>");
	jQuery("#zzzz").html("<h4>Present:</h4><p>"+Ppast[aa]+"<hr><p>");
	jQuery("#zzzzz").html("<h4>Future:</h4><p>"+Pfuture[aaa]+"<hr><p>");
  }, false);
}

window.addEventListener( 'DOMContentLoaded', init, false);
$(document).ready(function(){
  $("#ref-butn").click(function(){
 //document.getElementById("frm").reset(); 
 location.reload();
  });
});
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-61944660-1', 'auto');
  ga('send', 'pageview');

</script>
</head>


<body>


<div class="container">
  
  <!--  Header Section-->
  <div class="row">
    <div class="col-md-8">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tarot728 -->
     <ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-9236344000383274"
     data-ad-slot="4491102341"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    <div class="col-md-4">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tarot320x90 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:90px"
     data-ad-client="ca-pub-9236344000383274"
     data-ad-slot="5012479542"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
  </div>
  <div class="row header">
    <div class="col-xs-12 text-center">
      <h1>Three Cards Tarot Readings</h1>
      <h3>Soon - Card of a Day on Android</h3>
    </div>
  </div>
  <div class="row navigation-bar">
  <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#demo-navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Home</a>
          </div>
          <div class="collapse navbar-collapse" id="demo-navbar-collapse">
            <ul class="nav navbar-nav">
              <li><a href="index.php">Ask Tarot</a></li>
              <li><a href="day.php">Card of a Day</a></li>
              <li class="active"><a href="three.php">Three cards Tarot Reading</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="#"></a></li>
              
            </ul>
            
          </div>
        </div>
      </nav>
      <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </div>
  
  <!--  Content Area-->
  <div class="row content">
    <div class="col-md-4 col-sm-6">
      <p><h4>Our free online Tarot card readings are to be considered as a guide only. Interpreting the Tarot takes many years of practice; depending upon the way in which the cards fall or are laid out in a spread has great bearing on their individual meaning.  The readings and meanings given are for entertainment purposes only.</h4></p>
      <h3>Three cards reading</h3>
<p>With our free Three Cards online Tarot Reading you can explore a single issue in your life by privately consulting the Tarot cards yourself! With explanations of past, present, and future, the Three Card Reading can help you choose the best action to take in your situation, and give you a glimpse of what is to come. Years of intuitive experience with the cards have made this the most accurate free Tarot card reading on the Web! Following the laws of synchronicity, your computer acts as a direct line to your "Higher Self", tapping into the wisdom of the universe. Be sure to concentrate on your question/problem before you click for your reading.</p>
<p>Now, think of a question and then, click the button below cards for your reading.</p>

<br>
<center>
<button class="btn btn-default" id="ref-butn">New reading!</button>
</center>
</div>

    <div class="col-md-4 col-sm-6 text-center ">
      <p><div class="container1" id="container1">
        <div id="card">
	    <figure class="back"></figure>
	    
	    <figure class="front-<?php echo $i?>"></figure> 

        </div>
  </div>
  
  <!---  -->
  <p><hr><p><div class="container1" id="container1">
        <div id="card1">
	    <figure class="back"></figure>
	    
	    <figure class="front-<?php echo $ii?>"></figure> 

        </div>
  </div>
  <!--   -->
  <!---  -->
  <p><hr><p><div class="container1" id="container1">
        <div id="card2">
	    <figure class="back"></figure>
	    
	    <figure class="front-<?php echo $iii?>"></figure> 

        </div>
  </div>
  <!--   -->
<div class="container1" id="container1">
         <p><input type="button" value="Look your reading" id="button" />
</div>
    </div>

    <div class="col-md-4 col-sm-6">
      <h3>Cards meanings</h3>
      
<div id="zzz"> </div>
<div id="zzzz"> </div>
<div id="zzzzz"> </div>
    </div>
  </div>
  
 <div class="row footer">
    <div class="col-md-8">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tarotbig -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:250px"
     data-ad-client="ca-pub-9236344000383274"
     data-ad-slot="6399984346"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
    <div class="col-md-4">
      <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tarot300x250 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:300px;height:250px"
     data-ad-client="ca-pub-9236344000383274"
     data-ad-slot="7304967945"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
    </div>
  </div> <!--  Footer Area-->
  <div class="row footer">
    <div class="col-xs-12 text-center">
      <p>&copy; <a href="http://www.workprogramming.com">2015 Workprogramming.com</a></p>
    </div>
  </div>
  
</div>

<p class="p">.</p>
</body>
</html>
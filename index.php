 <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="tarot, ask tarot, tarot reading, card, cards,meaning,meanings,online,reading,readings,taro,tarot,tarro,tarrot, psychic reading, oranum,e-mail readings, online psychics,love and romance" />
  <meta name="author" content="Sergey" />
  <meta name="description" content="The new Tarot site, offering FREE readings!Absolutely FREE Tarot!">
  <title>Free tarot reading</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/css31.css"> 
  <link href="css/dopstyle.css" rel="stylesheet" media="screen">
<script type='text/javascript' src='js/jquery-1.11.3.js'></script>
<script>
var gen;
var past;
var present;
var future;
var yesno;
var sarray;
var addd;
</script>
<script type='text/javascript' src='js/run.js'></script>
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
<?php $i = rand(0,21);?>
var a = "<?php echo $i ?>";


	document.getElementById('button').addEventListener( 'click', function(){
   document.getElementById('card').toggleClassName('flip');
	jQuery("#zzz").html("<h4>Your answer is:</h4><b>"+sarray[a]+"</b><hr><p>"+yesno[a]+"<hr><p>"+gen[a]);
  }, false);
  
}

window.addEventListener( 'DOMContentLoaded', init, false);
$(document).ready(function(){
  $("#ref-butn").click(function(){
 document.getElementById("frm").reset(); 
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
      <h1>Free Tarot Reading</h1>
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
              <li class="active"><a href="index.php">Ask Tarot</a></li>
              <li><a href="day.php">Card of a Day</a></li>
              <li><a href="three.php">Three cards Tarot Reading</a></li>
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
      <p><h4>This spread is for those times when you have a specific question that has to be addressed immediately - burning question.</h4></p>
      <h3>Ask the Tarot!</h3>
<p>Have a question about life, love, family, home, business — or just about anything? Ask the tarot! Just type your question in the box below and click the "Ask the Tarot!" button, and a reading just for you will be provided, featuring one of the beautiful cards from Raider Wait Tarot Deck.</p>

<form role="form" id='frm' ">
<div class="form-group">
<label for="exampleInputEmail1">Question</label>
<p align="center"><textarea class="form-control" rows="3""></textarea></p>
</div>
<center>
<button type="reset" class="btn btn-default">Clear question</button>
</center>
</form>
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
		<div>
         <input type="button" value="Ask the Tarot" id="button" />
		</div>
    </div>

    <div class="col-md-4 col-sm-6">
      <h3>Answer meaning</h3>
      
<div id="zzz"> </div>

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
<!-- Author : Krishna Teja G S -->
<!-- Email: shaadomanthra@yahoo.com-->
<!-- Website: www.jbox.co.in-->

<!DOCTYPE html>
<html lang="en">
  <head>
    
	<!-- Meta info -->
	<meta charset="utf-8">
    <title>Jquery Feed wall</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="An Example for Facebook Like Jquery Feed wallI used bootstrap css and jqeury as core plugins.The Feed from textarea is posted back on page using jquery prepend method.">
    <meta name="author" content="Krishna Teja G S">
	<link rel="icon" type="image/png" href="http://jbox.co.in/templates/facebox/favicon.ico">
	
	<!-- Javascript -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script> 
	<script src="js/script.js"></script> 

    <!-- CSS styles -->
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <link href="css/grid.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
   <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.2.1/css/bootstrap-responsive.min.css" rel="stylesheet">

  </head>

  <body>
    <div class="container">
	  
     <div class="core">
	 <br>
	 <div class="well well-small">
		<h3 > Jquery Feed Wall</h3 >
		<p>An Example for Facebook Like Jquery Feed wall.I used bootstrap css and jqeury as core plugins.The Feed from textarea is posted back on page using jquery prepend method.</p>
	  </div>
	
		<div class="head">
		<div class="grid">
		  <div class="col-1-5">
			<img src="http://www.gravatar.com/avatar/5e8288077a04f460b1a0af197226673d" class="img-circle" width="70px" rel="tooltip" title="first tooltip" id="example" />
		  </div>
		  <div class="col-4-5" >
			 <div id="feedboxdiv"> <textarea  rows='3' cols="60" name="user" id="feedbox" ></textarea></div>
			 <button class="btn " id="feedpost" type="button" style="float:right"> post</button>
		  </div>
		</div>
		</div><!-- /head -->
		
		<div class="base">

		<div id="feedentry">
		<hr>
		<!-- sample content -->
		<div class="grid">
			  <div class="col-1-5">
				<img src="http://www.gravatar.com/avatar/5e8288077a04f460b1a0af197226673d" class="img-circle" width="70px" rel="tooltip" title="first tooltip" id="example" />
			  </div>
			  <div class="col-4-5" >
				<b>Krishna Teja</b><br>
				<blockquote>The practice of R&D involves making mistakes, realizations, corrections, and more mistakes. Trial and error is a fundamental part of the process. Too many managers in corporate America learn to avoid invention and new thinking because they have been convinced that their careers depend upon not making mistakes. <br>---- Tom Huff
				</blockquote>	 
			  </div>
		</div>
		
		<hr>
		<div class="grid">
			  <div class="col-1-5">
				<img src="http://www.gravatar.com/avatar/5e8288077a04f460b1a0af197226673d" class="img-circle" width="70px" rel="tooltip" title="first tooltip" id="example" />
			  </div>
			  <div class="col-4-5" >
				<b>Krishna Teja</b><br>
				<blockquote>A day without sunshine is like, you know, night.-Steve Martin 
				</blockquote>	 
			  </div>
		</div>
		</div>
		<hr>
		<p class="muted credit">From <a href="http://jbox.co.in">JoomlaBox</a> Author <a href="http://krishnateja.in">Krishna Teja</a> .</p>
       
	   </div><!-- /base -->
     
	 </div> <!-- /core -->

    </div> <!-- /container -->
	

  </body>
</html>
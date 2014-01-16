//This is the jquery code for the WALL FEED
//@Author Krishna Teja G S
//@Email shaadomanthra@yahoo.com
//@Website www.krishnateja.in

$(document).ready(function(){

	//function to add the feed data into html using append function
	//it gives alert " Enter some data" if the textarea is empty or with 1 space
	$(document).on("click","#feedpost",function(e){
		var feed=$("#feedbox").val();
		if(feed=="" || feed==" ")
		{
			alert("Enter Some Text");
		}else{
			var feed =  $("#feedbox").val();
			$('#feedentry').prepend('<hr>\
			<div class="grid">\
			<div class="col-1-5">\
			<img src="http://www.gravatar.com/avatar/5e8288077a04f460b1a0af197226673d" class="img-circle" width="70px" rel="tooltip" title="first tooltip" id="example" />\
			</div>\
			<div class="col-4-5" >\
			<b>Krishna Teja</b><br><blockquote>'
			 +feed+
			'</blockquote></div>\
			</div>');	
			$("#feedboxdiv").html("<textarea  rows='3' name='user' id='feedbox'></textarea>");
		}
	  e.preventDefault();
    });

});
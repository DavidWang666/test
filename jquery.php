<html>
	<head>
		<meta http-equiv="refresh" content="10"; charset="utf-8" />
		
	<script type="text/javascript" src="Inc/jqueryw.js"></script>
		<script type="text/javascript">
	    $(function(){
	    	$('button').bind('click',function(){
              $('img').delay(2000);
	    	});
	    	$('img').animate({
	    		left:'+=500px'
	    	},5000,function(){
	    		$(this).animate({
	    			left:'-=500px'
	    		},5000);
	    	});
	    });
	    
		</script>	
</head>
	<body >
		<button>停会儿</button>
		<img style="position:absolute; width:100px;height:100px;"src="images/rq.jpg">
		
		</div>
	</body>



</html>
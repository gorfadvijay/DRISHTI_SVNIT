

 
<style type="text/css">
	.typed{
		font-size: 50px;
	}
.typed::after {
	content: '|';
	display: inline;
	-webkit-animation: blink 0.7s infinite;
	-moz-animation: blink 0.7s infinite;
	animation: blink 0.7s infinite;
}

/*Removes cursor that comes with typed.js*/
   opacity: 0;
	display: none;
}
/*Custom cursor animation*/
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}


</style>

<script src='https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js'></script>

  

    <script type="text/javascript">
    	$(function(){
	$(".typed").typed({
		 strings: ["hello friends", "welcome to drishti", "where 'we' comes before 'me' ",],
		// Optionally use an HTML element to grab strings from (must wrap each string in a <p>)
		stringsElement: null,
		// typing speed
		typeSpeed: 30,
		// time before typing starts
		startDelay: 1200,
		// backspacing speed
		backSpeed: 20,
		// time before backspacing
		backDelay: 500,
		// loop
		loop: true,
		// false = infinite
		loopCount: false,
		// show cursor
		showCursor: false,
		// character for cursor
		cursorChar: "|",
		// attribute to type (null == text)
		attr: null,
		// either html or text
		contentType: 'html',
		// call when done callback function
		callback: function() {},
		// starting callback function before each string
		preStringTyped: function() {},
		//callback for every typed string
		onStringTyped: function() {},
		// callback for reset
		resetCallback: function() {}
	});
});
    </script>




</body>

</html>

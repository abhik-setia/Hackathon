<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'CDN.php'; ?>
	  <script type="text/javascript">
	  	
	  	function output_commands() {
	  		
	  	var intro=new SpeechSynthesisUtterance();
	  	intro.text=' To whom you would like to send email.';
	  	intro.lang = 'en-US';
	  	intro.rate=0.5;
		window.speechSynthesis.speak(intro);

		setTimeout("startDictation()",4000);
		//onload="output_commands()";
		// var intro2=new SpeechSynthesisUtterance(cmds);
		// window.speechSynthesis.speak(intro2);

	}
		$('body').keyup(function(e){
		   if(e.keyCode == 8){
		       // user has pressed backspace
		       array.pop();
		   }
		   if(e.keyCode == 32){
		       // user has pressed space
		       console.log("hello");
		       array.push('');
		   }
		});
	  </script>
</head>
<body onload="output_commands()">





<input type="text" name="q" id="transcript" placeholder="Speak" />
<script>
	var a;

	function startDictation()
	{
	console.log("here");
		if (window.hasOwnProperty('webkitSpeechRecognition')) {
	 
	      var recognition = new webkitSpeechRecognition();
	 
	      recognition.continuous = false;
	      recognition.interimResults = false;
	 
	      recognition.lang = "en-US";
	      recognition.start();
	 
	      recognition.onresult = function(e) {
	     
	                       var   casech  = e.results[0][0].transcript;
						   document.getElementById('transcript').value= e.results[0][0].transcript;
	        recognition.stop();
			checkchoice(casech);
			console.log(casech);
	       
	      };
	 
	      recognition.onerror = function(e) {
	        recognition.stop();
	      }}
	}
	function checkchoice(casech)
	{
		Redirect(casech);
		if(casech=="")
		startDictation();	
	}
			  
		 function Redirect(person)
		 {
		 	var str=person;
		 str = str.replace(/ +/g, "");
		 console.log(str);
		 window.location="compose.php?email_id="+str.trim()+"@gmail.com";

		 } 
		  
	      
	</script>
</body>
</html>
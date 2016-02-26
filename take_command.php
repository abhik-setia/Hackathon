<?php  ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <?php include 'CDN.php'; ?>
	  <script type="text/javascript">
	  	
	  	function output_commands() {
	  		
	  	var intro=new SpeechSynthesisUtterance();
	  	intro.text='To send an email say Send and to cancel it say cancel To compose an email say Compose  Waiting for you command now. Speech out Swing keyword to stop listening email and send it';
	  	intro.lang = 'en-US';
	  	intro.rate=0.5;
		window.speechSynthesis.speak(intro);

		setTimeout("startDictation()",9000);
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
<body onload="output_commands()" >

	<!-- <div class="container">
		<div class="row">
			<div class="form-group">
			  <label for="comment"></label>
			  <textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
		</div>
	</div>
	 --><input type="text" name="q" id="transcript" placeholder="Speak" />
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
		switch(casech)
		{
		case "Send": Redirect();
					break;
		case "send":Redirect();
		 			break;
		case "SEND": Redirect();
		 			 break;
			  
		default :
		var intro2=new SpeechSynthesisUtterance();
		intro2.text="Please say right command";
		window.speechSynthesis.speak(intro2);
		
		var in23=document.getElementById('transcript');
		in23.value="";
		startDictation();

		}
	}
			  
		 function Redirect()
		 {
		 window.location="send_email_to.php";
		 } 
		  
	      
	</script>


</body>
</html>
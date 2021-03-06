<!DOCTYPE html>
<html>
   <head>
      <title>New Member or Login</title>
      <meta name="google-signin-client_id" content="633386475152-8bievi6ectem27ic6ta2li01h908iggp.apps.googleusercontent.com">
      <?php include 'CDN.php'; ?>
   </head>
   <script type="text/javascript">

   	function login(){
   		window.location="take_command.php";
   	}
     var auth2 = auth2 || {};
     (function() {
       var po = document.createElement('script');
       po.type = 'text/javascript'; po.async = true;
       po.src = 'https://plus.google.com/js/client:plusone.js?onload=startApp';
       var s = document.getElementsByTagName('script')[0];
       s.parentNode.insertBefore(po, s);
     })();
     /**
      * Handler for the signin callback triggered after the user selects an account.
      */
     function onSignInCallback(resp) {
       gapi.client.load('plus', 'v1', apiClientLoaded);
     }

     /**
      * Sets up an API call after the Google API client loads.
      */
     function apiClientLoaded() {
       gapi.client.plus.people.get({userId: 'me'}).execute(handleEmailResponse);
     }

     /**
      * Response callback for when the API client receives a response.
      *
      * @param resp The API response object with the user email and profile information.
      */
     function handleEmailResponse(resp) {
        console.log(resp.emails[0]);
        document.getElementById('responseContainer').value =JSON.stringify(resp);

        //var primaryEmail;
       //for (var i=0; i < resp.emails.length; i++) {
       //   if (resp.emails[i].type === 'account') primaryEmail = resp.emails[i].value;
       // }

       // document.getElementById('responseContainer').value = 'Primary email: ' +
       //     primaryEmail + '\n\nFull Response:\n' + JSON.stringify(resp);
     }

     </script>

   <body>
      <div class="container">
         <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" >
               <div class="panel-heading">
                  <div class="panel-title">Sign In</div>
                  <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
               </div>
               <div style="padding-top:30px" class="panel-body" >
                  <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                  <form id="loginform" class="form-horizontal" role="form">
                     <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email">                                        
                     </div>
                     <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                     </div>
                     <div class="input-group">
                        <div class="checkbox">
                           <label>
                           <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                           </label>
                        </div>
                     </div>
                     <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                       <!--     <a id="btn-login" href="#" class="btn btn-success">Login  </a>
                            <a  href="#" id="signOut" onclick="login()" class="btn btn-social btn-google">
                            <span class="fa fa-google"></span>
                            Login with Google</a>
                        -->  <!-- Container with the Sign-In button. -->
						    <div id="gConnect" class="button">
						      <button class="g-signin"
						          data-scope="email"
						          data-clientid="633386475152-8bievi6ectem27ic6ta2li01h908iggp.apps.googleusercontent.com"
						          data-callback="onSignInCallback"
						          data-theme="dark"
						          data-cookiepolicy="single_host_origin">
						      </button>
						   </div>
						                     </div>
                     <div id="response" class="hide">
        <textarea id="responseContainer" style="width:100%; height:150px"></textarea>
      </div>
                     <div class="form-group">
                        <div class="col-md-12 control">
                           <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                              Don't have an account! 
                              <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                              Sign Up Here
                              </a>
                           </div>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info">
               <div class="panel-heading">
                  <div class="panel-title">Sign Up</div>
                  <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
               </div>
               <div class="panel-body" >
                  <form id="signupform" class="form-horizontal" role="form">
                     <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                     </div>
                     <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="email" placeholder="Email Address">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="firstname" class="col-md-3 control-label">First Name</label>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="firstname" placeholder="First Name">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="lastname" class="col-md-3 control-label">Last Name</label>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Password</label>
                        <div class="col-md-9">
                           <input type="password" class="form-control" name="passwd" placeholder="Password">
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="icode" class="col-md-3 control-label">Invitation Code</label>
                        <div class="col-md-9">
                           <input type="text" class="form-control" name="icode" placeholder="">
                        </div>
                     </div>
                     <div class="form-group">
                        <!-- Button -->                                        
                        <div class="col-md-offset-3 col-md-9">
                           <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                           <span style="margin-left:8px;">or</span>  
                        </div>
                     </div>
                     <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                        <div class="col-md-offset-3 col-md-9">
                           <button id="btn-fbsignup" type="button" class="btn btn-social btn-google"><span class="fa fa-google"></span> Sign Up with Google +</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      
   </body>
</html>
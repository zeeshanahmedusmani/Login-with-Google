<style>
    
#exampleModal .bottom-para {
    padding: 25px;
    position: relative;
    z-index: 999;
}

</style>

<!-- Sign Up Modal -->
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="104197087142-tk4kf9u1tkuo9olr10qi2ve2j5r4lsvc.apps.googleusercontent.com">


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2>Sign up</h2>
            </div>
            <div class="modal-body">
                <form class="form-sec login-sec" id="signupForm" method="post">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>First Name <span class="form-req-asterick"> *</span></label>
                                <input type="text"  class="form-control input-type" name="signup[signup_firstname]">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Last Name <span class="form-req-asterick"> *</span></label>
                                <input type="text" class="form-control input-type" name="signup[signup_lastname]">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Email Address <span class="form-req-asterick"> *</span></label>
                                <input type="email"  class="form-control input-type" name="signup[signup_email]">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Phone <span class="form-req-asterick"> *</span></label>
                                <input type="phone" class="form-control input-type" name="signup[signup_phone]">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Password <span class="form-req-asterick"> *</span></label>
                                <input type="password"  class="form-control input-type" name="signup[signup_password]">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="form-group">
                                <label>Re-type Password <span class="form-req-asterick"> *</span></label>
                                <input type="password" class="form-control input-type" name="signup[signup_password_confirm]">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <a href="javascript:void(0)" class="submit-btn" id="btn-signup">Sign up </a>
                            <div class="clearfix"></div>
                            <p class="reg-sec">or</p>
                        </div>
                    </div>
                    
       <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                  <a href="javascript:void(0)" class="fb-btn" onclick="loginFB();"> <i class="fa fa-facebook" aria-hidden="true"></i> Sign up with Facebook</a>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-4 no-padding">
                  <a href="javascript:void(0)"  id="twitter-button" class="fb-btn twi-btn"> <i class="fa fa-twitter" aria-hidden="true"></i>   Sign up with Twitter </a>

                </div>
                <div class="col-xs-12 col-sm-4 col-md-4">

                            <div class="login_btns">
                            <div class="g-signin2" data-onsuccess="onSignIn">Sign up with Google+ <i class="fa fa-google-plus" aria-hidden="true"></i></div>
                    
                        </div>
                </div>
      </div>
                </form>

                <div class="clearfix"></div>
                <div class="bottom-para" style="padding-bottom:0!important">
                            <ul style="display: flex;">
                                <li>Already have an account? <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal-second" data-dismiss="modal" aria-label="Close">Sign in</a></li>
                                <!-- <li class="align-right">Have you emailed us? <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal-third" data-dismiss="modal" aria-label="Close">Get a password</a></li> -->
                            </ul>
                        
              </div>
      </div>

            </div>
        </div>
    </div>

<!--  Sign up Modal End -->

<!-- Modal -->
<div class="modal fade" id="exampleModal-second" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2>Sign In</h2>
            </div>
            <div class="modal-body">
                <form class="form-sec login-sec" action="<?php echo g('base_url');?>user/login-process" id="login-form" method="post">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Email </label>
                                <input type="email"  class="form-control input-type" name="signup[signup_email]" id="email">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password"  class="form-control input-type" name="signup[signup_password]" id="password">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <!--<a href="" class="stay-sign"><input type="checkbox"> Stay Signed In</a>-->
                            <a href="javascript:void(0)" class="submit-btn" id="btn-login">Sign In </a>
                        </div>

                        <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal-third" class="password-btn" data-dismiss="modal" aria-label="Close">Forgot my password</a>
                        <div class="bottom-para">
                            <ul>
                                <li>Don’t have an account? <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal" data-dismiss="modal" aria-label="Close">Sign Up</a></li>
                                <li>Have you emailed us? <a href="javascript:void(0)" data-toggle="modal" data-target="#exampleModal-third" data-dismiss="modal" aria-label="Close">Get a password</a></li>
                            </ul>
                            <p>
                                If you’ve communicated with our support staff through email previously,
                                you’ve already registered. You propably don’t have a password yet though.
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--  Login Modal End -->
<!-- forgot Modal -->
<div class="modal fade" id="exampleModal-third" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h2>Forgot Password</h2>
            </div>
            <div class="modal-body">

                    <div class="row login-sec">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <label>Please Enter A Valid Email Address</label>
                                 <input type="email" class="form-control input-type" id="formLogin2" required="" name="user_email" name="signup[signup_email]">
                                <!-- <input type="email"  class="form-control input-type" name="signup[signup_email]" id="email"> -->
                            </div>
                        </div>
                    
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <!--<a href="" class="stay-sign"><input type="checkbox"> Stay Signed In</a>-->
                            <a href="javascript:void(0)" class="submit-btn" id="LoginSubmit2">Submit Now</a>
                        </div>
                        
                    </div>

            </div>
        </div>
    </div>
</div>




<script type="text/javascript">
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();

   
       var sc_id = profile.getId();
       var sc_name = profile.getName();
       var sc_image = profile.getImageUrl();
       var sc_email = profile.getEmail();

   //console.log('ID: ' + ); 
   
   console.log('Name: ' + profile.getName());
   console.log('Image URL: ' + profile.getImageUrl());
   console.log('Email: ' + profile.getEmail());


        var data = {sc_id:sc_id,sc_name:sc_name,sc_image:sc_image,sc_email:sc_email};
        var url = "<?=g('base_url')?>account/save_social_signup/1";
        var response = AjaxRequest.formrequest(url, data) ;

        if(response.status == 1)
        {
            
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log('User signed out.');
        });
        
        
           AdminToastr.success('Saved Saved','Success');
           setTimeout(function()
           {
                window.location = "<?=g('base_url').$_GET['url']?>"

           },2000)
        }
        else
        {
            AdminToastr.error('Login Error','Error');
        }



}
</script>



<script>

    window.fbAsyncInit = function() {
      FB.init({
        appId      : '326570918033516',

        cookie     : true,  // enable cookies to allow the server to access                  
        xfbml      : true,  // parse social plugins on this page
        version    : 'v2.8' // use graph api version 2.8
      });
  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
    function statusChangeCallback(response) {

    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();

              
    } else {
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    }
  }
function loginFB() {

        FB.login(function(response) {
            checkLoginState();
            //testAPI();
        }, {scope: 'email,public_profile,user_friends'});
        //testAPI();

    }
  function checkLoginState() {  
    
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

  }

  

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', { locale: 'en_US', fields: 'name, email' },
     function(response) {


        // console.log(response);
        console.log('Successful login for : ' + response.name);
        //console.log('id:' + response.id);  
        var sc_image = sc_email = '';
        sc_email =response.email;
        var sc_id = response.id;
        var sc_name = response.name;
        var data = {sc_id:sc_id,sc_name:sc_name,sc_image:sc_image,sc_email:sc_email};
        var url = "<?=g('base_url')?>account/save_social_signup/2";
        var response = AjaxRequest.fire(url, data) ;

        if(response.status == 1)
        {
           FB.logout(function(response) {
                // document.location.reload(); 
           });

           // window.location = '<?=g('base_url')?>';
           window.location = "<?=g('base_url').$_GET['url']?>"

        }
        else
        {
          AdminToastr.error(response.txt,'Error');
        }
        return false;



    });

  }
</script>

<!--  forgot Modal End -->
<script>
    //Submit Button Clicked
    $("#btn-signup").click(function(){

        var data = new FormData(document.getElementById('signupForm'));
        var url = "<?=g('base_url')?>user/save";
        var response = FileUploadScript.fire(url, data, 'json',true);
        // alert(response);

        //AdminToastr.success(response.txt,'Success');

        return false;
    });

    // Login
    var $form = $('#login-form');
    // On submit login action start
    //$form.submit(function(event) {
    $('#btn-login').click(function (event) {
        // Get input data
        var email = $('#email').val();
        var password = $('#password').val();
        // Define regular expression
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        // Checking fields (both fields empty)
        if ((email == '') && (password == '')) {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Email field is required.</span>' +
            '<span for="%s" style="color:#fff" class="has-error help-block">Password field is required.</span>', 'Error');
        }
        // Email validation
        else if (email == '') {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Email field is required.</span>');
        }
        else if (!regex.test(email)) {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Invalid email address</span>');
        }
        // Password validation
        else if (password == '') {
            AdminToastr.error('<span for="%s" style="color:#fff" class="has-error help-block">Password field is required.</span>');
        }
        else {
            // Disable the submit button to prevent repeated clicks:
            $form.find('#btn-login').prop('disabled', true);
            // Get form
            var form = $(this).closest('form');
            // Get action url
            var url = form.attr('action');
            // Get form data
            var data = form.serialize();
            // Submit action
            var response = AjaxRequest.fire(url, data);
            // var response = AjaxRequest.fire(url, data, type, false);
            // Register success
            // alert(response);
            if (response.status) {
                $form.find('#btn-login').prop('disabled', false);
                // Reset form
                $form[0].reset();
                // Redirect to Time line page
                //window.location.href = response.refer;
setTimeout(function() {
  location.reload();
},3000);


            }
            // Register fail
            else {
                // Enable form
                $form.find('#btn-login').prop('disabled', false);

            }
        }

        return false;
    });
    // On submit login action end
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $("#LoginSubmit2").click(function(){
            var email = $("#formLogin2").val();
            email.trim();

            if(email == '')
            {
                AdminToastr.error('Email Cannot be Empty.','Error'); 
                return false;
            }

            var data = {user_email : email };
            var url = "<?=g('base_url')?>account/forgotpasswordemail";
            var response = AjaxRequest.formrequest(url, data) ;


            if(response.status == 1)
            {
                AdminToastr.success("Please check your inbox with name Forgot Password.",'Success');
                //window.location='<?=g('base_url')?>checkout';
                $("#formLogin2").val('');
                //window.location='<?=g('base_url')?>';
            }
            else
            {
                AdminToastr.error(response.txt); 
            }
            return false;
        });
    });
</script>
<script>
$('#twitter-button').on('click', function() {
  // alert('hellow');
  // Initialize with your OAuth.io app public key
   OAuth.initialize('kQW7YL-YAmyXZkEDKTtxhapHmKo');
  // Use popup for OAuth
  OAuth.popup('twitter').then(twitter => {
    console.log('twitter:', twitter);
    // Prompts 'welcome' message with User's email on successful login
    // #me() is a convenient method to retrieve user data without requiring you
    // to know which OAuth provider url to call
    twitter.me().then(data => {
      console.log('data:', data);
        var sc_id = data.id;
        console.log(sc_id);
        var sc_name = data.name;
        var sc_image = sc_email = '';
        sc_email =data.email;
        var data = {sc_id:sc_id,sc_name:sc_name,sc_image:sc_image,sc_email:sc_email};
        var url = "<?=g('base_url')?>account/save_social_signup/3";
        var response = AjaxRequest.formrequest(url, data) ;

        if(response.status == 1)
        {
          

           // window.location = '<?=g('base_url')?>';
           window.location = "<?=g('base_url').$_GET['url']?>"

        }
        else
        {
          AdminToastr.error(response.txt,'Error');
        }
        return false;

      // alert('Twitter says your email is:' + data.email + ".\nView browser 'Console Log' for more details");
    });
    // Retrieves user data from OAuth provider by using #get() and
    // OAuth provider url    
    twitter.get('/1.1/account/verify_credentials.json?include_email=true').then(data => {
      console.log('self data:', data);
    })    
  });
})
</script>
<?php

   require_once('db.php');


 ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Farmer</title>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="index.css">
      <script type="text/javascript" src="js/index.js">

      </script>
      <style media="screen">
         .footer
         {
             position: fixed;
             left: 0;
             bottom: 0;
             right: 0;
             color:#eeeeee;
             background-color: #211f22;
             text-align: center;
         }
      </style>
   </head>
   <body>
      <div class="float-right" id="google_translate_element"></div>
      <script type="text/javascript">
         function googleTranslateElementInit() {
           new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,hi,mr,pa,gu', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, multilanguagePage: true}, 'google_translate_element');
         }
      </script>
      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
      <div class="container">
         <h2><?php echo @$_GET['registerresult']; ?></h2>
      </div>
      <br>
      <br>
      <div class="container-fluid">
         <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php"><b><h2>Farmer's Website</h2></b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">How it works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
          </ul>

          <form class="form-inline my-2 my-lg-0" action="login.php" method="post">
             <div class="form-group">
                 <input required type="text" class="form-control mr-sm-3" name="username" placeholder="Aadhaar Number">
             </div>
             <div class="form-group">
                 <input required type="text" class="form-control mr-sm-3" name="password" placeholder="Password">
             </div>
             <button type="submit" name="signin" class="btn btn-success">Sign In</button>
              <small>
               <a href="resetpassword.php" style="color: white;padding-left: 6px;">Forgot Password?</a>
             </small>
         </form>
        </div>
      </nav>
   </div>

   <div class="container">
      <br>
      <div class="row">
         <div class="col-sm-8">
            <h2><b>Our Goal</b></h2>
            <p class="goal">We are bridging the gap between the farmers and the society by providing a platform wherein
               farmers can contact the end-customer directly and vice-versa.
               We are committed to work for betterment of farmers and improve their economical condition
               via 'Farmer's Website'. Also, End-constumer will be able to cut down his expenses by buying
               directly from farmers.</p>
         </div>

         <div class="offset-1 col-sm-3">
            <div class="row">
               <h2><b>New to website?</b></h2>
               <br>
            </div>
            <!-- Modal trigger -->
         <div class="row">
            <button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#registerfarmer" type="button" name="button">Register as Farmer</button>
         </div>
            <!-- modal -->
            <div class="modal" id="registerfarmer">
               <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                     <div class="modal-header">
                        <h3 class="modal-title">Register as Farmer</h3>
                        <button type="button" class="close" data-dismiss="modal" name="button">&times;</button>
                     </div>
                     <div class="modal-body">
                        <form role="form" action="fregister.php" method="post">
                           <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> First name</label>
                                <div class="col-lg-9">
                                    <input required class="form-control" name="ffname" type="text" placeholder="sahil">
                                </div>
                           </div>
                           <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> Last name</label>
                                <div class="col-lg-9">
                                    <input required class="form-control" name="flname" type="text" placeholder="koul">
                                </div>
                           </div>
                           <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"><span class="req">*</span>Aadhaar Card Number</label>
                                <div class="col-lg-9">
                                    <input required class="form-control" name="faadhaar" type="number">
                                </div>
                           </div>
                           <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> Password</label>
                                <div class="col-lg-9">
                                    <input required class="form-control"  minlength="4" maxlength="16" id="fpswd" name="fpassword" type="password">
                                </div>
                           </div>
                           <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> Confirm Password</label>
                                <div class="col-lg-9">
                                    <input required class="form-control" minlength="4" maxlength="16" onkeyup="fcheckPass(); return false;" id="fcpswd" name="fconfirmpassword" type="password">
                                </div>
                                <span id="fconfirmMessage" class="confirmMessage"></span>
                           </div>
                           <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> Mobile Number</label>
                                <div class="col-lg-9">
                                    <input required class="form-control" name="fmno" type="number" value="">
                                </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> Home Address</label>
                              <div class="col-lg-9">
                                    <textarea required class="form-control" id="faddr" name="faddr" rows="3"></textarea>
                              </div>
                           </div>
                           <div class="form-group row">
                               <div class="col-lg-3 offset-md-4">
                                    <input type="submit" name="RegisterFarmer" id="RegisterFarmer" class="btn btn-info btn-lg btn-block" value="Register">
                               </div>

                           </div>
                        </form>
                     </div>
                     <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" name="button">Close</button>
                     </div>
                  </div>
               </div>
            </div>
               <!-- Modal trigger -->
               <div class="row">
                  <button class="btn btn-primary btn-lg mt-4" data-toggle="modal" data-target="#registerbuyer" type="button" name="button">Register as Buyer</button>
               </div>
               <!-- modal -->
               <div class="modal" id="registerbuyer">
                  <div class="modal-dialog modal-lg">
                     <div class="modal-content">
                        <div class="modal-header">
                           <h3 class="modal-title">Register as Buyer</h3>
                           <button type="button" class="close" data-dismiss="modal" name="button">&times;</button>
                        </div>
                        <div class="modal-body">
                           <form role="form" action="bregister.php" method="post">
                              <div class="form-group row">
                                   <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> First name</label>
                                   <div class="col-lg-9">
                                       <input required class="form-control" name="bfname" type="text" placeholder="sahil">
                                   </div>
                              </div>
                              <div class="form-group row">
                                   <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> Last name</label>
                                   <div class="col-lg-9">
                                       <input required class="form-control" name="blname" type="text" placeholder="koul">
                                   </div>
                              </div>
                              <div class="form-group row">
                                   <label class="col-lg-3 col-form-label form-control-label"><span class="req">*</span>Aadhaar Card Number</label>
                                   <div class="col-lg-9">
                                       <input required class="form-control" name="baadhaar" type="number">
                                   </div>
                              </div>
                              <div class="form-group row">
                                   <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> Password</label>
                                   <div class="col-lg-9">
                                       <input required class="form-control"  minlength="4" maxlength="16" id="bpswd" name="bpassword" type="password">
                                   </div>
                              </div>
                              <div class="form-group row">
                                   <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> Confirm Password</label>
                                   <div class="col-lg-9">
                                       <input required class="form-control" minlength="4" maxlength="16" onkeyup="bcheckPass(); return false;" id="bcpswd" name="bconfirmpassword" type="password">
                                   </div>
                                   <span id="bconfirmMessage" class="confirmMessage"></span>
                              </div>
                              <div class="form-group row">
                                   <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> Mobile Number</label>
                                   <div class="col-lg-9">
                                       <input required class="form-control" name="bmno" type="number" value="">
                                   </div>
                              </div>
                              <div class="form-group row">
                                 <label class="col-lg-3 col-form-label form-control-label"><span class="req">* </span> Home Address</label>
                                 <div class="col-lg-9">
                                       <textarea required class="form-control" id="baddr" name="baddr" rows="3"></textarea>
                                 </div>
                              </div>
                              <div class="form-group row">
                                  <div class="col-lg-3 offset-md-4">
                                       <input type="submit" name="RegisterBuyer" id="RegisterBuyer" class="btn btn-info btn-lg btn-block" value="Register">
                                  </div>

                              </div>
                           </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal" name="button">Close</button>
                        </div>
                     </div>
                  </div>
               </div>

         </div>
      </div>
   </div>
   <div class="row">

   <footer class="footer">
      <div class="container-fluid">
         <hr>
         <p><b>&copy;2018-2020 --- All right reserved.</b></p>
         <p>
            This website is integrated with smart weighing machine created by us for helping farmers to sell their products without middle men involved.
            This is non profitable site.
         </p>
         <hr>
         </a>
         <div style="height: 10px; background: #27AAE1;"></div>
      </div>
   </footer>
</div>


      <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   </body>
</html>

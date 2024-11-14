<title>Registration Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
            <script src = "https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <link rel="stylesheet" href="css/custom.css">
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
            <!-- <a href="{{ url('home') }}"><img src="images/logo.png" style="width: 300px;"></a> -->
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

    <div class="contact-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <div class="contact-form-right">
                        <h2>GET STARTED</h2>
                        <p>Kindly fill in the form below, to create an account with the us <b>TODAY</b>!</p>
                        <form id="registrationForm" action="{{ url('add_user') }}" enctype="multipart/form-data" method="POST" name="">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Your Name" required data-error="Please enter your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
                                        <input type="hidden" required name="message" id="message" value="Thank you for creating an account with Dair Buddy, login to get started today!">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Phone Number" required data-error="Please enter your Phone Number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label style="color: black;">Profile Photo</label>
                                        <input type="file" accept=".jpg, .png, .jpeg" class="form-control" id="image" name="image" required data-error="Please enter your Profile Photo">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" onclick="hideError();" class="form-control" id="pwd" minlength="8" name="password" placeholder="Your Password" required data-error="Please enter your Password">
                                        <div class="help-block with-errors"><p id="ep1" style="display: none;">Passwords must match!</p></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="password" onclick="hideError();" class="form-control" id="cpwd" minlength="8" name="cpassword" placeholder="Confirm Your Password" required data-error="Please confirm your Password">
                                        <div class="help-block with-errors"><p id="ep" style="display: none;">Passwords must match!</p></div>
                                    </div>
                                </div>                                

                                    <div class="submit-button text-center" style="color: black; background: #45c9f5; border-radius: 5px;">
                                        <input class="btn hvr-hover" id="submit" type="submit" value="Create My Account">
                                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <script type="text/javascript">

        function hideError() {
            var error = document.getElementById("ep");
            var error1 = document.getElementById("ep1");
                error.style.display = "none";
                error1.style.display = "none";                        
        }

  </script>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
    
    </x-jet-authentication-card>
</x-guest-layout>

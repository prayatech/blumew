 
        <div class="nav-wrapper">
            <nav class="navbar navbar-default navbar-custom" data-spy="affix" data-offset-top="50">
                <div class="container">
                    <div class="row">
                        <div class="navbar-header navbar-header-custom">
                            <button type="button" class="navbar-toggle collapsed menu-icon" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> <a class="navbar-logo" href="index.html"><img src="img/logos/logo.png" alt="logo" id="logo"></a> </div>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right navbar-links-custom">
                                <li><a href="#" >Products</a></li>
                                <li><a href="">Help</a></li>
                                <li><a href="" data-target="#loginModal" data-toggle="modal">Login</a></li>
                                <li><a href="" data-target="#loginModal" data-toggle="modal">Signup</a></li>
                                <!-- <li><a href=""></a></li> -->

                                <!-- <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Welcome, Satish</a>
                                    <ul class="dropdown-menu dropdown-menu-left">
                                        <li><a href="index.html">Dashboard</a></li>
                                        <li><a href="home-2.html">SIP</a></li>
                                        <li><a href="home-3.html">My Investment</a></li>
                                        <hr>
                                        <li><a href="home-4.html">Logout</a></li>
                                        
                                    </ul>
                                </li> -->
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Modal -->
        <div id="loginModal" class="modal fade" role="dialog">
          <div class="modal-dialog" style="vertical-align:top; margin-top: 100px">

            <!-- Modal content-->
            <div class="modal-content">
              <!-- <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Login</h4>
              </div> -->
              <div class="modal-body">
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                       <h4 align="center" style="vertical-align: middle;">Image</h4>
                    </div>
                    <div class="col-md-8 col-xs-12" align="center">
                        <div class="login-container">
                            <h3 class="text-center">Start Investing</h3>
                            <small style="color: #000">Be a part of Smart Investors Community</small>
                            <br>
                            <br>
                            <div class="padding20">
                                <a style="width: 300px" href="<?php echo $this->googleplus->loginURL();?>" class="primary-button button-md mb-15-xs">Login with Gmail</a>
                            </div>
                            <div class="padding20">
                                <a  href="<?php echo $this->googleplus->loginURL();?>" class="primary-button button-md mb-15-xs" style="width: 300px;background-color: #4867aa !important;">Login with Facebook</a>
                            </div>

                            <div class="padding20">
                                <a style="width: 300px;text-decoration: underline;" href="<?php echo $this->googleplus->loginURL();?>">Continue with email>></a>
                            </div>
                        </div>


                    </div>
                </div>
              </div>
              <div class="modal-footer">
                <button style="color: #000;float: left;text-decoration: underline;" align="left">Terms and Conditions</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>

          </div>
        </div>
    
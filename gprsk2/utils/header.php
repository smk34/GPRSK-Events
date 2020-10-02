<header class="bgImage">
    <nav class="navbar" style="background: linear-gradient(to top left, #ff3300 15%, #cc0000 72%);">
        <div class="container">
            <div class="navbar-header"><!--website name/title-->
                <?php
                require_once 'utils/functions.php';
                echo '<a href = "index.php">
                    GPRSK<br><span style="    font-size: 14px;">Event Management System<span>
                </a> ';
                ?>
            </div>
            <ul class="nav navbar-nav navbar-right"><!--navigation-->
                <?php
                //links to database contents. *if logged in
                if(is_logged_in()){
                    require_once 'utils/functions.php';
                    echo '<li><a href = "index.php">Home</a></li>';
                    echo '<li><a href = "viewEvents.php">View Events</a></li>';
                    echo '<li><a href = "viewLocations.php">Our Locations</a></li>';
					echo '<li><a href = "team.php">Our Team</a></li>';
                    echo '<li><a href = "contact.php">Contact Us</a></li>';
                    echo '<li class="btn btn-primary"><a class = "btn btn-primary" href = "logout.php">Logout</a></li>';
                }
                //links non database contents. *if logged out
                else {
                    echo '<li><a href = "index.php">Home</a></li>';
                    
                    echo '<li><a href = "#about">About</a></li>';
					echo '<li><a href = "team.php">Our Team</a></li>';
                    echo '<li><a href = "contact.php">Contact Us</a></li>';
                    echo '<button type = "button" class = "btn btn-primary" data-toggle = "modal" data-target = "#login" style="background: linear-gradient(to top left, #ff3300 15%, #cc0000 72%);color:#fff;border:1px solid #fff">Login</button>';
                }
                ?>

                <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><!--modal for login-->
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header"><!--modal header-->
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Login</h4><!--modal title-->
                            </div>
                            <div class="row">
                                <div class="modal-body"><!--modal content-->
                                    <div class ="col-md-6 col-md-offset-3">
                                        <form action="login.php" method="POST">
                                            <div class = "form-group"><!--username-->
                                                <label for="username">Username:</label>
                                                <input type="text"
                                                       name="username"
                                                       class="form-control"
                                                       value="<?php if (isset($formdata['username'])) echo $formdata['username']; ?>"
                                                       />
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['username'])) echo $errors['username']; ?>
                                                </span>
                                            </div>
                                            <div class="form-group"><!--password-->
                                                <label for="password">Password:</label>
                                                <input type="password"
                                                       name="password"
                                                       class="form-control"
                                                       value=""
                                                       />
                                                <span class="error"><!--error message on failed input-->
                                                    <?php if (isset($errors['password'])) echo $errors['password']; ?>
                                                </span>
                                            </div>
                                            <button type="submit" class = "btn btn-default loginbtn">Login</button><!--login button-->
                                            <a class="btn btn-default navbar-btn rgsterbtn" href = "register_form.php">Register</a><!--register button-->
                                        </form>
                                    </div>
                                </div><!--modal body div-->
                            </div><!--row div-->
                            <div class="modal-footer"><!--modal footer-->
                            <button type="button" class="btn btn-default closebtn" data-dismiss="modal">Close</button><p><!--close button-->
                            </div><!--modal footer div-->
                        </div><!--modal content div-->
                    </div><!--modal dialog div-->
                </div><!--modal div-->
            </ul>
        </div><!--container div-->
    </nav>
		<style>
	
.carousel-wrapper {
  position: relative;
  
}
.carousel-wrapper .carousel-item {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  padding-bottom: 536px;
  opacity: 0;
  transition: all 0.5s ease-in-out;
  border: 1px solid #aaa;
  
}
.carousel-wrapper .carousel-item .arrow {
  position: absolute;
  top: 0;
  display: block;
  width: 50px;
  height: 100%;
  -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
  background: url("http://haloxp.com/codepen/carousel-arrow-dark.png") 50% 50%/20px no-repeat;
 
}
.carousel-wrapper .carousel-item .arrow.arrow-prev {
  left: 0;
}
.carousel-wrapper .carousel-item .arrow.arrow-next {
  right: 0;
  -webkit-transform: rotate(180deg);
  transform: rotate(180deg);
}
.carousel-wrapper .carousel-item.light {
  color: white;
}
.carousel-wrapper .carousel-item.light .arrow {
  background: url("http://haloxp.com/codepen/carousel-arrow-light.png") 50% 50%/20px no-repeat;
}
@media (max-width: 480px) {
  .carousel-wrapper .carousel-item .arrow, .carousel-wrapper .carousel-item.light .arrow {
    background-size: 10px;
    background-position: 10px 50%;
  }
}
.carousel-wrapper [id^="target-item"] {
  display: none;
}
.carousel-wrapper .item-1 {
  z-index: 2;
  opacity: 1;
}
.carousel-wrapper *:target ~ .item-1 {
  opacity: 0;
}
.carousel-wrapper #target-item-1:target ~ .item-1 {
  opacity: 1;
}
.carousel-wrapper #target-item-2:target ~ .item-2, .carousel-wrapper #target-item-3:target ~ .item-3 {
  z-index: 3;
  opacity: 1;
}


		</style>
    
</header>

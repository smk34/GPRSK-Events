<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Bootstrap Web Design</title>
        <?php require_once 'classes/Connection.php';
        require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        <?php require 'utils/scripts.php';
        //check for submit
        if(filter_has_var(INPUT_POST,'submit')){
          $title = $_POST['title'];
          $message = $_POST['message'];
          //check required fields
          if(!empty($message) && !empty($title)){
              $qry = "insert into contact(title,message) values('$title','$message')";
              mysqli_query($conn,$qry);
              echo "<script>window.alert('Your message has been sent.!');</script>";
          }else{
            echo "<script>window.alert('Please fill all the fields!');</script>";
          }
        }
        ?><!--js links. file found in utils folder-->
    </head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
		<style>
		
.our-team-section {
    position: relative;
    padding-top: 40px;
    padding-bottom: 40px;
}
.our-team-section:before {
    position: absolute;
    top: -0;
    left: 0;
    content: " ";
    background: url(img/service-section-bottom.png);
    background-size: 100% 100px;
    width: 100%;
    height: 100px;
    float: left;
    z-index: 99;
}
.our-team {
    padding: 30px 0 40px;
    background: #f9f9f9;
    text-align: center;
    overflow: hidden;
    position: relative;
    border-bottom: 5px solid #cc0000;
}
.our-team:hover{
    border-bottom: 5px solid #2f2f2f;
}

.our-team .pic{
    display: inline-block;
    width: 130px;
    height: 130px;
    margin-bottom: 50px;
    z-index: 1;
    position: relative;
}
.our-team .pic:before {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: linear-gradient(to top left, #ff3300 15%, #cc0000 72%);
    position: absolute;
    bottom: 135%;
    right: 0;
    left: 0;
    opacity: 1;
    transform: scale(3);
    transition: all 0.3s linear 0s;
}
.our-team:hover .pic:before{
 height: 100%;
    background: #2f2f2f; 
 }
.our-team .pic:after {
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    background: #ffffff00;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
    transition: all 0.3s linear 0s;
}
.our-team:hover .pic:after{
    background: #7ab92d;
}
.our-team .pic img {
    width: 100%;
    height: auto;
    border-radius: 50%;
    transform: scale(1);
    transition: all 0.9s ease 0s;
    box-shadow: 0 0 0 14px #f7f5ec;
    transform: scale(0.7);
    position: relative;
    z-index: 2;
}
.our-team:hover .pic img{
    box-shadow: 0 0 0 14px #f7f5ec;
    transform: scale(0.7);
}
.our-team .team-content{ margin-bottom: 30px; }
.our-team .title{
    font-size: 22px;
    font-weight: 700;
    color: #4e5052;
    letter-spacing: 1px;
    text-transform: capitalize;
    margin-bottom: 5px;
}
.our-team .post{
    display: block;
    font-size: 15px;
    color: #4e5052;
    text-transform:capitalize;
}
.our-team .social{
    width: 100%;
    padding: 0;
    margin: 0;
    background: #2f2f2f;
    position: absolute;
    bottom: -100px;
    left: 0;
    transition: all 0.5s ease 0s;
}
.our-team:hover .social{ bottom: 0; }
.our-team .social li{ display: inline-block; }
.our-team .social li a{
    display: block;
    padding: 10px;
    font-size: 17px;
    color: #fff;
    transition: all 0.3s ease 0s;
}
.our-team .social li a:hover{
    color: #2f2f2f;
    background: #f7f5ec;
}
@media only screen and (max-width: 990px){
    .our-team{ margin-bottom: 30px; }
}
		</style>
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12" style="margin-top:2%"><!--body content title holder with 12 grid columns-->
                    <h1>Our Team</h1><!--body content title-->
                </div>
            </div>

            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>

                <section class="our-team-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/t1.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Rakesh kumar</h3>
                            <span class="post">Font-end Developer</span>
                        </div>
                       
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/t2.png">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Soumik Sarkar</h3>
                            <span class="post">Font-end Developer</span>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/t4.jpeg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Gaurav Kumar Dev</h3>
                            <span class="post">Backend Developer </span>
                        </div>
                      
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="images/t3.jpeg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Pritam Dey</h3>
                            <span class="post">Backend Developer</span>
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>

    </section>



        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>

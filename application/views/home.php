<?php include "include/header.php";?>

<div class="container">


    <!-- section start-page -->

    <section class="start-page parallax-background" id="home">

        <div class="opacity"></div>
        <div class="content">
            <div class="text">

                <h1>Welcome<br/>
                    to our <span>website</span></h1>
                <p>Please familiarize yourself with our Website</p>

                <a href="#about-us"><div class="read-more">Read more</div></a>

            </div>
            <div class="arrow-down"></div>
        </div>

    </section>

    <!-- section menu mobile -->

    <?php include "include/nav.php";?>
    <!-- section about us -->

    <section class="about-us" id="about-us">

        <h1>ABOUT US</h1>
        <hr/>
        <p class="title">Recycling System<p>

        <div class="column-one">

            <div class=""></div>

            <h2>Clean<br/>Environemt</h2>
        <p>The motto is to keep environment neat and clean</p>
        <p> If wee keep our sourroundings clean. Then our mind and body will be in peace too</p>

        </div>

        <div class="column-two">

            <div class=""></div>

            <h2>Utilize<br/>Waste</h2>
            <p>Instead of throwing waste here and there. It can help to gain some money</p>
            <P>So, why not use it wisely. By making use of the waste and advantages of this website. </P>

        </div>


        <div class="column-three">

            <div class=""></div>

            <h2>Promote<br/>Recycling</h2>
            <p>Lets promote recycling toward the next step by utilizing the waste</p>
            <p>The waste we keep and the waste we create might make us sick</p>
            <p>So lets be healthy and wealthy by making good use of the waste</p>

        </div>


    </section>

    <div class="clear"></div>

    <!-- portoflio-->

    <section class="portfolio" id="portfolio">


        <div class="portfolio-margin">

            <h1>What we buy</h1>
            <hr/>


            <!-- 1 item portoflio-->

            <ul class="grid">

                <li>
                    <a href="<?php echo base_url()?>admin/getData">
                        <img src="<?php echo base_url()?>assets/image/paperre.png" alt="Paper " />
                        <div class="text">
                            <p>PORTFOLIO 1</p>
                            <p class="description">Paper</p>
                            <p class="description">Various types of paper are included in this portfolio with its respective value</p>
                            <p class="description">However only the genuine recyclable paper are accepted</p>
                        </div>
                    </a>
                </li>

                <!-- 2 item portoflio-->

                <li>
                    <a href="<?php echo base_url()?>admin/getData2">
                        <img src="<?php echo base_url()?>assets/image/glassplastics.jpeg" alt="Glass & Plastics " />
                        <div class="text">
                            <p>PORTFOLIO 2</p>
                            <p class="description">Glass and Plastics</p>
                            <p class="description">In our daily basis, we make use of glass and plastics all the time</p>
                            <p>Here, most of the recycleable items of glass and plastics are listed with their price</p>
                        </div>
                    </a>
                </li>

                <!-- 3 item portoflio-->

                <li>
                    <a href="<?php echo base_url()?>admin/getData3">
                        <img src="<?php echo base_url()?>assets/image/metals.png" alt="Metals & Steel " />
                        <div class="text">
                            <p>PORTFOLIO 3</p>
                            <p class="description">Metal and Steel</p>
                            <p>In this portfolio. There ar number of metal and steel shown with its repective given price</p>
                            <p>Users can sell their metal and steel</p>
                        </div>
                    </a>
                </li>


                <!-- 4 item portoflio-->

                <li>
                    <a href="<?php echo base_url()?>admin/getData4">
                        <img src="<?php echo base_url()?>assets/image/ewastere.jpg"  alt="E-waste" />
                        <div class="text">
                            <p>PORTFOLIO 4</p>
                            <p class="description">Electronic waste</p>
                            <p>In this modern age. Every one use different types of electronics deveices</p>
                            <P>And after passage of time it needs to be thrown out when malfunctioned</P>
                            <p>So, different types of electronic waste are displayed</p>
                        </div>
                    </a>
                </li>

                <!-- 5 item portoflio-->

                <li>
                    <a href="<?php echo base_url()?>admin/getData5">
                        <img src="<?php echo base_url()?>assets/image/other.jpeg" alt="Others " />
                        <div class="text">
                            <p>PORTFOLIO 5</p>
                            <p class="description">Other</p>
                            <p>In this portfolio some of the wate that are left out from other categories are listed.</p>
                        </div>
                    </a>
                </li>

<!---->
<!--                 6 item portoflio-->

                <li>
                    <a href="<?php echo base_url()?>user/userHelp">
                        <img src="<?php echo base_url()?>assets/image/help.jpg" alt="General " />
                        <div class="text">
                            <p>PORTFOLIO 6</p>
                            <p class="description">User Help</p>
                            <p>Instead it will cost you service charge</p>
                        </div>
                    </a>
                </li>

<!--                <!-- 7 item portoflio-->
<!---->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        <img src="img/portfolio/7.png" alt="Portfolio item" />-->
<!--                        <div class="text">-->
<!--                            <p>PORTFOLIO 7</p>-->
<!--                            <p class="description">Your text here...</p>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!---->
<!--                <!-- 8 item portoflio-->
<!---->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        <img src="img/portfolio/8.png" alt="Portfolio item" />-->
<!--                        <div class="text">-->
<!--                            <p>PORTFOLIO 8</p>-->
<!--                            <p class="description">Your text here...</p>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->
<!---->
<!--                <!-- 9 item portoflio-->
<!---->
<!--                <li>-->
<!--                    <a href="#">-->
<!--                        <img src="img/portfolio/9.png" alt="Portfolio item" />-->
<!--                        <div class="text">-->
<!--                            <p>PORTFOLIO 9</p>-->
<!--                            <p class="description">Your text here...</p>-->
<!--                        </div>-->
<!--                    </a>-->
<!--                </li>-->


            </ul>

            <a href="<?php echo base_url().'user/register_view';?>"><div class="read-more">Register</div></a>


            <a href="<?php echo base_url().'user/login_view';?>"><div class="read-more">Login</div></a>

        </div>

    </section>


    <div class="clear"></div>




    <!-- partners-->

    <section class="partners parallax-background-partners" id="partners">

        <div class="opacity"></div>

        <div class="content">

            <h2>Thanks for visiting this website.</h2>

            <div class="logo">

                <a href="#"><img src="img/logos/alex1.png"></a>
                <a href="#"><img src="img/logos/archiq.png"></a>
                <a href="#"><img src="img/logos/thomsoon.png"></a>
                <a href="#"><img src="img/logos/alex2.png"></a>

            </div>

        </div>

    </section>


    <!-- Contact-->

    <section class="contact" id="contact">
        <h1>Contact</h1>
        <hr/>

        <div class="content">

<!--            <div class="form">-->
<!---->
<!--                <form action="#" method="post" enctype="text/plain">-->
<!---->
<!--                    <input name="your-name" id="your-name" value="YOUR NAME" />-->
<!--                    <input name="your-email" id="your-email" value="YOUR E-MAIL" />-->
<!---->
<!--                    <textarea id="message" name="message" >MESSAGE</textarea>-->
<!---->
<!--                    <a href="#">-->
<!--                        <div class="button">-->
<!--                            <span>SEND</span>-->
<!--                        </div>-->
<!--                    </a>-->
<!---->
<!--                </form>-->
<!---->
<!--            </div>-->


            <div class="contact-text">

                To contact us please use the contact form visible<br/><br/>

                When sending files, please use<br/>
                the following e-mail<br/><br/>

                <strong>Karma Tsering</strong><br/><br/>

                e-mail: <strong>karmatseringhyolmo@gmail.com</strong>

            </div>


        </div>

    </section>


 <!--footer-->
    <?php include "include/footer.php";?>
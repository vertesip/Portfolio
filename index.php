<?php require 'header.php' ?>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<div id="home" class="particles-wrapper">
    <div id="particles-js">
        <h1 data-aos="fade-up">Hello I'm Vértesi Patrik <br> Full Stack Developer</h1>
    </div>
</div>
<img class="svg-top" src="images/svgDividers/paint-brush-bottom.svg">

<section id="about" class="anchor">
    <h2 data-aos="fade-up">About me</h2>
    <div data-aos="fade-up" class="header-bar"></div>
    <div class="site-wrapper">
        <div class="bio-wrapper">
            <div>
                <img data-aos="fade-right" class="wp-image-21" src="images/IMG_9850.JPG" alt="">
                <p data-aos="fade-right" class="bio-text">I'm currently a Web Developer and System Administrator at
                    Effix-Marketing building websites and applications for the web with awesome people. In my off time I
                    usually work on freelance websites and build 8-16 bit games.</p>
                <br>
                <p data-aos="fade-right" class="bio-text">Combining both my frontend and backend knowledge, I can
                    provide a whole solution for any given problem. My goal is always to build applications that are
                    efficient under the hood while providing great user experiences.</p>
                <br>
                <p data-aos="fade-right" class="bio-text">I'm always on the lookout for new technologies and
                    opportunities in both web and game development.</p>
            </div>
            <div class="skills-wrapper">
                <div data-aos="fade-left" class="bar-wrapper">
                    <div class="bar">
                        <div class="bar fill html">
                            <div class="tag">HTML</div>
                        </div>
                        <span>90%</span>
                    </div>
                </div>

                <div data-aos="fade-left" class="bar-wrapper">
                    <div class="bar">
                        <div class="bar fill css">
                            <div class="tag">CSS</div>
                        </div>
                        <span>80%</span>
                    </div>
                </div>

                <div data-aos="fade-left" class="bar-wrapper">
                    <div class="bar">
                        <div class="bar fill js">
                            <div class="tag">JavaScript</div>
                        </div>
                        <span>65%</span>
                    </div>
                </div>

                <div data-aos="fade-left" class="bar-wrapper">
                    <div class="bar">
                        <div class="bar fill php">
                            <div class="tag">PHP</div>
                        </div>
                        <span>80%</span>
                    </div>
                </div>

                <div data-aos="fade-left" class="bar-wrapper">
                    <div class="bar">
                        <div class="bar fill wordpress">
                            <div class="tag">Wordpress</div>
                        </div>
                        <span>80%</span>
                    </div>
                </div>

                <div data-aos="fade-left" class="bar-wrapper">
                    <div class="bar">
                        <div class="bar fill laravel">
                            <div class="tag">Laravel</div>
                        </div>
                        <span>70%</span>
                    </div>
                </div>
                <div data-aos="fade-left" class="bar-wrapper">
                    <div class="bar">
                        <div class="bar fill sql">
                            <div class="tag">SQL</div>
                        </div>
                        <span>60%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="portfolio" class="anchor">
    <h2 data-aos="fade-up">My work</h2>
    <div data-aos="fade-up" class="header-bar"></div>
    <div class="tab" data-aos="fade-up">
        <button class="tablinks" id="defaultOpen" onClick="workTab(event, 'All')">All</button>
        <button class="tablinks" onClick="workTab(event, 'Portfolio')">Portfolio</button>
        <button class="tablinks" onClick="workTab(event, 'Webshop')">Webshop</button>
    </div>
    <div class="project-wrapper site-wrapper">
        <a data-aos="fade-up" href="https://soproniborut.hu/" target="_blank">
            <img style="background-color: white" class="project All Portfolio"
                 src="images/Work/Borut/BorutAsztali.png"></a>
        <a data-aos="fade-up" href="https://milleniumevents.hu/" target="_blank">
            <img style="background-color: black" class="project All Portfolio"
                 src="images/Work/Millenium/MilleniumAsztali.png"></a>
        <a data-aos="fade-up" href="https://fyttin.hu/" target="_blank">
            <img style="background-color: white" class="project All Webshop"
                 src="images/Work/Fyttin/FyttinAsztali.png"></a>
        <a data-aos="fade-up" href="https://keketterem.hu/" target="_blank">
            <img style="background-color: white" class="project All Webshop"
                 src="images/Work/Keketterem/KeketteremAsztali.png"></a>
        <a data-aos="fade-up" href="https://kinderarzt-makay.at/" target="_blank">
            <img style="background-color: white" class="project All Portfolio"
                 src="images/Work/Makay/MakayAsztali.png"></a>
        <a data-aos="fade-up" href="https://ddorinaphoto.hu/" target="_blank">
            <img style="background-color: white" class="project All Portfolio"
                 src="images/Work/Dorina/DorinaAsztali.png"></a>
        <a data-aos="fade-up" href="https://craniosopron.hu/" target="_blank">
            <img style="background-color: white" class="project All Portfolio"
                 src="images/Work/Cranio/CranioAsztali.png"></a>
    </div>
</section>
<section id="experience" class="anchor">
    <h2 data-aos="fade-up">Experience</h2>
    <div data-aos="fade-up" class="header-bar"></div>
    <div class="experience-outer">
        <div class="school-experience-wrapper">
            <h3 data-aos="fade-left">School</h3>
            <a href="http://uni-sopron.hu/kezdolap" target="_blank">
                <div class="experience-inner">
                    <img data-aos="fade-right"
                         src="images/SoproniLogo.jpg">
                    <div class="experience-inner-inner">
                        <h3 data-aos="fade-right">Bachelor's degree</h3>
                        <b data-aos="fade-right">University of Sopron</b>
                        <p data-aos="fade-right">Business Informatics</p>
                        <p data-aos="fade-right">2018 – 2021</p>
                    </div>
                </div>
            </a>
            <a href="http://uni-sopron.hu/kezdolap" target="_blank">
                <div class="experience-inner">
                    <img data-aos="fade-right"
                         src="images/SoproniLogo.jpg">
                    <div class="experience-inner-inner">
                        <h3 data-aos="fade-right">Higher-level vocational training</h3>
                        <b data-aos="fade-right">University of Sopron</b>
                        <p data-aos="fade-right">Business Informatics</p>
                        <p data-aos="fade-right">2016 – 2018</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="work-experience-wrapper">
            <h3 data-aos="fade-left">Work</h3>
            <a href="http://zooplus.com" target="_blank">
                <div class="experience-inner">
                    <img data-aos="fade-left"
                         src="images/zooplus.png">
                    <div class="experience-inner-inner">
                        <h3 data-aos="fade-left">PHP Fullstack Developer</h3>
                        <b data-aos="fade-left">zooplus AG - Full Time</b>
                        <p data-aos="fade-left">October 2021 - Present</p>
                    </div>
                </div>
            </a>
            <a href="http://effix.hu" target="_blank">
                <div class="experience-inner">
                    <img data-aos="fade-left"
                         src="images/EffixLogo.png">
                    <div class="experience-inner-inner">
                        <h3 data-aos="fade-left">Web Developer & System Administrator</h3>
                        <b data-aos="fade-left">EFFIX-Marketing Ltd. - Full Time</b>
                        <p data-aos="fade-left">March 2020 - September 2021</p>
                    </div>
                </div>
            </a>
            <a href="http://gainbi.hu/" target="_blank">
                <div class="experience-inner">
                    <img data-aos="fade-left"
                         src="images/GainBiLogo.jpg">
                    <div class="experience-inner-inner">
                        <h3 data-aos="fade-left">Intern</h3>
                        <b data-aos="fade-left">GAIN BI Ltd - Intership</b>
                        <p data-aos="fade-left">June 2019 - July 2019</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
<img class="svg-bottom" src="images/svgDividers/paint-brush-top.svg">
<section id="contact" class="anchor">
    <h2 data-aos="fade-up">Contact</h2>
    <div data-aos="fade-up" class="header-bar"></div>
    <div data-aos="fade-up"><a href="mailto:hello@vertesipatrik.com"><h3 data-aos="fade-up">hello@vertesipatrik.com</h3>
        </a></div>

    <!--  <form action=”mailto:vertesip@gain.uni-sopron.hu"
            method=”POST”
            enctype=”multipart/form-data”
            name=”EmailForm”>
          <input data-aos="fade-up" name="name" type="text" class="feedback-input" placeholder="Name"/>
          <input data-aos="fade-up" name="email" type="text" class="feedback-input" placeholder="Email"/>
          <textarea data-aos="fade-up" name="text" class="feedback-input" placeholder="Text"></textarea>
          <input data-aos="fade-up" type="submit" value="SUBMIT"/>
      </form> -->
</section>
<?php require 'footer.php' ?>

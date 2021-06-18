<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Personal Portfolio Website</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.12/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <style>
        <?php
                $connection = mysqli_connect("localhost","root","","portfolio");
                $select = "SELECT * from skills";
                $result = mysqli_query($connection,$select);
                
                while ($row = mysqli_fetch_array($result)){

                    $skills     = $row['skills'];
                    $value      = $row['value'];
        ?>
                .skills-content .right .line .<?php echo $skills?>::before{
                    height: 100px;
                    position: relative;
                    border: 1px solid black;
                    width: <?php echo $value?>;
                }
                <?php
                }
                ?>
    </style>

</head>
<body>
    <div class="scroll-up-btn">
        <i class="fas fa-angle-up"></i>
    </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo">
            <a href="#">Portfo<span>lio.</span></a>
        </div>
        <ul class="menu">
            <li><a href="#home" class="menu-btn">Home</a></li>
            <li><a href="#about" class="menu-btn">About</a></li>
            <li><a href="#services" class="menu-btn">Services</a></li>
            <li><a href="#skills" class="menu-btn">Skills</a></li>
            <li><a href="#teams" class="menu-btn">Teams</a></li>
            <li><a href="#contact" class="menu-btn">Contact</a></li>
        </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

<!-- home section start -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
            <div class="text-1">Hallo, mijn naam is</div>
            <div class="text-2">Cho Lommerse</div>
            <div class="text-3">En ik ben een <span class="typing"></span></div>
            <a href="#">Huur mij</a>
            </div>
        </div>
    </section>

<!-- about section start -->
    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">Over mij</h2>
            <div class="about-content">
                <div class="column left">
                <img src="images/profile1.png" alt="" />
                </div>
            <div class="column right">
                <div class="text">Ik ben Cho en ik ben <span class="typing-2"></span></div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde sed possimus omnis nisi, dolores dolor reprehenderit nobis blanditiis nihil porro aut iure fugit tempore ducimus voluptates veritatis voluptatibus, sit dolorem repellat at maiores accusantium. Obcaecati alias atque ducimus minima accusamus dolorum quaerat est ratione distinctio vel error totam beatae eaque unde vitae quae ut, similique sapiente nisi voluptas voluptatum doloremque.</p>
                    <a href="#">Download CV</a>
                </div>
            </div>
        </div>
    </section>

<!-- services section start -->
    <section class="services" id="services">
        <div class="max-width">
        <h2 class="title">Mijn projecten</h2>
            <div class="serv-content">
                
                <?php
                $connection = mysqli_connect("localhost","root","","portfolio");
                $select = "SELECT * from projecten";
                $result = mysqli_query($connection,$select);
                while ($row = mysqli_fetch_array($result)){

                    $projecten          = $row['projecten'];
                    $omschrijving       = $row['omschrijving'];
                    $pstartdate         = $row['pstartdate'];
                    $peinddate          = $row['peinddate'];
                    
                ?>
                    
                <div class="card">
                    <div class="box">
                        <div class="text"><?php echo $projecten;?></div>
                        <p><?php echo $omschrijving?></p>
                        <p><?php echo $pstartdate?></p>
                        <p><?php echo $peinddate?></p>
                    </div>
                </div>
                <?php
                
                }
                ?>
            </div>
        </div>
    </section>

<!-- skills section start -->
    <section class="skills" id="skills">
        <div class="max-width">
            <h2 class="title">Mijn vaardigheden</h2>
            <div class="skills-content">
                <div class="column left">
                    <div class="text">Mijn creatieve vaardigheden & ervaringen.</div>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Asperiores debitis nostrum perspiciatis doloribus beatae nihil tenetur, illo dolore ducimus modi maiores totam culpa quaerat, quia placeat ipsam. Voluptatem possimus nihil harum consectetur impedit, libero quas necessitatibus voluptas maxime asperiores reiciendis nam. Quae adipisci optio minus maxime et libero fugiat repudiandae laudantium dolore reiciendis accusantium, enim reprehenderit dicta deserunt consequuntur at.</p>
                    <a href="#">Read more</a>
                </div>
                <div class="column right">
                <!-- De line werkt niet erg goed -->
                    <?php
                    $connection = mysqli_connect("localhost","root","","portfolio");
                    $select = "SELECT * from skills";
                    $result = mysqli_query($connection,$select);
                    while ($row = mysqli_fetch_array($result)){

                        $skills           = $row['skills'];
                        $value            = $row['value'];

                    ?>
                    
                    <div class="bars">
                        <div class="info">
                            <span><?php echo strtoupper($skills)?></span>
                            <span><?php echo $value?><span>
                        </div>
                        <div class='line' style="--line-color: rgb(0,0,128);"> 100 </div>
                    </div>
                    <?php 
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

<!-- teams section start -->
    <section class="teams" id="teams">
        <div class="max-width">
            <h2 class="title">Mijn Werkvaardigheden</h2>
            <div class="carousel owl-carousel">
                <!-- de fotos kon ik niet voor elkaar krijgen -->
                <?php
                    $connection = mysqli_connect("localhost","root","","portfolio");
                    $select = "SELECT * from werkervaring";
                    $result = mysqli_query($connection,$select);
                    while ($row = mysqli_fetch_array($result)){

                        $werkervaring           = $row['werkervaring'];
                        $omschrijving           = $row['omschrijving'];
                        $werkvan                = $row['werkvan'];
                        $werktot                = $row['werktot'];

                ?>
                    
                <div class="card">
                    <div class="box">
                        <img src="images/profile1.png" alt="">
                        <div class="text"><?php echo $werkervaring;?></div>
                        <p><?php echo $omschrijving?></p>
                        <p>Van <?php echo $werkvan?></p>
                        <p>Tot <?php echo $werktot?></p>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </section>

<!-- contact section start -->
    <section class="contact" id="contact">
        <div class="max-width">
            <h2 class="title">Neem contact met mij</h2>
            <div class="contact-content">
                <div class="column left">
                    <div class="text">Get in touch</div>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, perspiciatis dignissimos ipsam voluptatem corporis veniam laborum ullam! Porro, cum perspiciatis?</p>
                    <div class="icons">
                        <div class="row">
                            <i class="fas fa-user"></i>
                            <div class="info">
                                <div class="head">Naam</div>
                                <div class="sub-title">Cho Lommerse</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="info">
                                <div class="head">Adres</div>
                                <div class="sub-title">Bennebroek, Nederland</div>
                            </div>
                        </div>
                        <div class="row">
                            <i class="fas fa-envelope"></i>
                            <div class="info">
                                <div class="head">E-mail</div>
                                <div class="sub-title">cho.lommerse@ziggo.nl</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column right">
                <div class="text">Message me</div>
                    <form action="index.php" method="post">
                    <div class="fields">
                        <div class="field name">
                            <input type="text" placeholder="naam" name="naam" />
                        </div>
                        <div class="field email">
                            <input type="text" placeholder="email" name="email" />                           
                        </div>
                        <div class="field company name">
                            <input type="text" placeholder="company" name="company" />
                        </div>
                        </div>
                        <div class="field address">
                            <input type="text" placeholder="adres" name="adres" />
                        </div>
                        <div class="field zipcode">
                            <input type="text" placeholder="zipcode" name="postcode" />
                        </div>
                        <div class="field telefoon">
                            <input type="text" placeholder="telefoon" name="telefoon" />
                        </div>
                        <div class="field">
                            <input type="text" placeholder="subject" name="subject">
                        </div>
                        <div class="field textarea">
                            <textarea cols="30" rows="10" placeholder="bericht" name="bericht"></textarea>
                        </div>
                        <div class="button">
                            <button type="submit" name="Stuur">Stuur</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
    <?php
	
        // variabalen initialiseren ( leegmaken)
	    $naam = "";
	    $email = "";
        $company = "";
	    $telefoon = "";
	    $subject = "";
	    $bericht= "";

        // array voor invoerfouten definiteren
        $invoerfouten = array();

    	// als op Stuur wordt gedrukt				
        if (isset($_POST['Stuur'])){		
            $naam           = $_POST['naam'];				
            $email      	= $_POST['email'];	
            $company        = $_POST['company'];			
            $telefoon 		= $_POST['telefoon'];				
            $subject		= $_POST['subject'];				
            $bericht 		= $_POST['bericht'];
		    echo " naam: ". $naam;
            echo " email: ". $email;
            echo " company: ". $company;
            echo " telefoon: ". $telefoon;
            echo " subject: ". $subject;
            echo " bericht:". $bericht;
            
            if (empty($naam)){
		        // als inlognaam niet is ingevuld(leeg), dan regel toevoegen aan array invoerfouten.
		        array_push($invoerfouten,"U moet uw volledige naam invoeren. verplicht");
		    }
            if (ctype_alpha($naam) == false){
		        // als inlognaam niet is ingevuld(leeg), dan regel toevoegen aan array invoerfouten.
		        array_push($invoerfouten,"Uw naam mag geen cijfers bevatten");
		    }
            if (empty($email)){
                array_push($invoerfouten,"Een email adres is verplicht");				
            }
            if (empty($company)){
                array_push($invoerfouten, "Voer uw bedrijfnaam in.");
            }
            if (empty($telefoon)){
                array_push($invoerfouten,"Voer uw telefoon nummer in. verplicht");				
            }
            if (ctype_alnum($telefoon) == false){
                array_push($invoerfouten, "Een telefoonnummer mag geen letters bevatten");
            }
            if (empty($subject)){
                array_push($invoerfouten,"Schrijf in wat u bedoelt");				
            }
            if (empty($bericht)){
                array_push($invoerfouten,"beschrijf uw doel");				
            }
            var_dump($invoerfouten);
            // als in het array invoerfouten geen regels zijn				
            if (count($invoerfouten)== 0){
                //connectie met database
                $connection = mysqli_connect("localhost","root","","portfolio");	
                // insert statement samenstellen		
                $sql = "INSERT INTO `contact`(`naam`, `email`, `company`, `telefoon`, `subject`, `bericht`) 
                        VALUES ('$naam', '$email', '$company', '$telefoon', '$subject', '$bericht')";
                                
                                var_dump($sql);
                // insert statement uitvoeren
                mysqli_query($connection, $sql);
                // terug naar homepagina
                //header("Location:index.php");					
            }
        } // einde if (isset($_POST['submit']))
    ?> <!-- einde php -->

<!-- footer section start -->
    <footer>
        <span>Gemaakt door <a href="#">Cho Lommerse</a></span> | <span class="far fa-copyright"> 2021 All rights reserved.</span>
    </footer>

    <script src="script.js"></script>
</body>

</html>
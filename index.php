<?php
    session_start();

    if (!isset($_SESSION['logged_in'])){
        header("location: login.php");
    }

    if (isset($_POST['logout'])){
        session_destroy();
        header("location: login.php");
    }
?>

<html>
    <head>
        <title>Lucky Shrub</title>

        <meta property="og:title" content="Index" />
        <meta property="og:type" content="html" />
        <meta property="og:image" content="res/logo.png" />
        <!-- <meta property="og:url" content="" /> -->
        <meta property="og:description" content="Lucky Shrub is a medium-sized garden design firm that specializes in garden design and creation, maintenance and landscaping."/>
        <meta property="og:locale" content="en_US" />
        <meta property="og:site_name" content="Lucky Shrub" />

        <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">

    </head>
    <body>

        <header>
            <!-- <h2 class="username_h2">Hi <?php echo $_SESSION['login_user'] ?></h2> -->
            <figure class="logo">
                <img src="logo.png">
            </figure>
            
        </header>

        <nav class="nav">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Products</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Info</a></li>
                <li><a href="logout.php">Logout</a></li>
                <!-- <li><form method="post"><input name="logout" id="nav_logout" type="submit" value="Logout"></input></form></li> -->
            </ul>
        </nav>

        <main class="main_body">

            <section class="main1">
                    <article>
                        <h1 class="main_head" style="color:white;">
                            Hi <?php echo $_SESSION['login_user'] ?>! <br><br>
                            30% off on Succulent plants
                        </h1>
                        <h3 class="main_head_p" style="color:white;">
                            Succulents are not only resistant to drought but also hardy plants, which are easy to care for and sustain. Such low-maintenance plants, given the right growing environment, need little to no care in your garden or indoors. They are also resistant to pests, and they can grow well in dry conditions without much water.
                        </h3>
                    </article>
            </section>

            <section class="main2">
                <article>
                    <h3>Desk Plants</h3>
                    <figure>
                        <img src="plant1.jpeg">
                        <figcaption>
                            <p>
                                Small low maintenance plants are great fit for office desk. Some great plants are sansevieria, succulents, small bamboo palms, calathea, or aglaonema 
                            </p>
                        </figcaption>
                    </figure>
                </article>
            </section>

            <section class="main3">
                <article>
                    <h3>
                        Home Plants
                    </h3>
                    <figure>
                        <img src="plant 2.jpeg">
                        <figcaption>
                            <p>
                                All indoor plants need a basic minimum light. In general all house plants thrive in bright indirect light but some can do well in low light conditions too, for example bromeliads and ZZ are excellent low light plants.
                            </p>
                        </figcaption>
                    </figure>
            </article>
            </section>

            <setion class="main4">
                <article>
                    <h3>
                        Artificial Plants
                    </h3>
                    <figure>
                        <img src="res/plant 3.avif">
                        <figcaption>
                            <p>
                                We offer a wide variety of flower artificial plants in sizes, shapes, colours, and types that can be used anywhere in your home to enhance the mood.
                            </p>
                        </figcaption>
                    </figure>
                </article>
                
            </setion>

            
        </main>

        <footer class="footer_body">
            <div class="foot1"><img src="res/logo.png"></div>
            <div class="foot2"><hr>&#169; Lucky Shrub</div>
        </footer>
    </body>
</html>

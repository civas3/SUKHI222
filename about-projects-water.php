<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9"> <![endif]-->
<html lang="en">

<head>
    <?php include("includes/head-tag-links.php");?>
    <?php include("includes/site-pages-meta/meta-about-projects-water.php");?>

</head>

<body>

    <header id="header">
    <div class="header-content">
            <div class="header-content__image">
                <div class="header-image projects-water-header-bg"></div>
            </div>

            <div class="header-content__title">
                <h1>SUKHI 222 WATER PROJECTS</h1>
            </div>
        </div>
        <nav id="menu" class="navbar">
            <?php include 'includes/site-sections/header.php'; ?>
        </nav>

    </header>
    
    <main>
        <div class="container">
            <!--SECTION our vision-->
            <section>
                <div class="row">
                    <div class="col-12">
                        <div class="section-content">
                            <div class="section-content__header">
                                <h2>OUR VISION</h2>
                                <div class="gold-border"></div>
                            </div>
                            <div class="section-content__info">
                                <p>We base our actions on the most urgent need and the most sustainable
                                    practices to supply a minimum of 2 gallons of clean water per person per day.
                                </p>
                                <p>When possible we collaborate with other NGOs to achieve our common missions.
                                    We work with the local community leaders to ensure long-term success of our
                                    projects.
                                </p>
                            </div>

                        </div>
                    </div>
                    <!--col-ends-->
                </div>
            </section>
            <!--SECTION Ghana projects-->
            <section class="projects">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content">
                            <div class="section-content__header">
                                <h2>GHANA WATER PROJECTS</h2>
                                <div class="gold-border"></div>
                            </div>
                            <div class="section-content__info">
                                <div class="accordion">
                                    <!--accordion - ghana-->
                                    <button class="accordion-button active"><img
                                            src="<?php echo cdnURL ?>/images/flag-icons/ghana.png" alt="Ghana flag">
                                            <h3>NORTHERN COMMUNITIES</h3>
                                    </button>
                                    <div class="accordion-panel show">   
                                            <div class="accordion-panel__image">
                                                 <img src="<?php echo cdnURL ?>/images/projects/water/ghana/ghana-northern-communities.png"
                                                    alt="Ghana water project ">
                                            </div>
                                            <div class="accordion-panel__info">
                                                     <p>SUKHI 222 GHANA, an NGO geared toward solving water problems has been
                                                        all out
                                                        in its strategic operations in Ghana, specifically at the Northern
                                                        Communities
                                                        in the country. As popularly known, water is life. But the sources
                                                        of water in
                                                        these identified communities rather deteriorate the lives of the
                                                        inhabitants
                                                        than being life ameliorating to them.
                                                    </p>
                                            </div>                 
                                            <div class="button-item">
                                                    <a class="btn btn-medium"
                                                        href="about-projects-water-ghana-northern-communities.php">
                                                        <span class="btn-span"></span>
                                                        <span class="btn-span"></span>
                                                        <span class="btn-span"></span>
                                                        <span class="btn-span"></span>Read More..
                                                    </a>
                                         </div>  
                                    </div>                                        
                                </div>
                                <!--projection-accordion-ends-->
                            </div>
                        </div>
                    </div>
                    <!--col-ends-->
                </div>
            </section>


        </div>

        <!--container-ends-->
    </main>


    <!---->
    <div class="sign-up-newsletter">
        <?php include 'includes/site-sections/newsletter.php'; ?>
    </div>
    <footer class="footer">
        <?php include 'includes/site-sections/footer.php'; ?>
    </footer>
    <div class="copy-rights">
        <?php include 'includes/site-sections/copyright.php'; ?>
    </div>

    <!-- Java script -->
    <?php include 'includes/site-features/js.php'; ?>

</body>

</html>
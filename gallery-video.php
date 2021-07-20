<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9"> <![endif]-->
<html lang="en">

<head>
    <?php include("includes/head-tag-links.php");?>
    <?php include("includes/site-pages-meta/meta-gallery-video.php");?>

 
</head>

<body>


    <header id="header">

        <div class="header-content">
            <div class="header-content__image">
                <div class="header-image gallery-video-header-bg"></div>
            </div>

            <div class="header-content__title">
                <h1>SUKHI 222 VIDEO GALLERY</h1>
            </div>
        </div>

        <nav id="menu" class="navbar">
            <?php include 'includes/site-sections/header.php'; ?>
        </nav>


    </header>

    <main>
        <div class="container">
            <!--SECTION 222 GOES TO DC 3/2019-->
            <section class="gallery">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content">
                            <div class="section-content__header">
                                <h2>222 GOES TO DC 3/2019</h2>
                                <div class="gold-border"></div>
                            </div>
                            <div class="section-content__image">
                               
                                    <iframe class="video-gallery" 
                                        src="https://www.youtube-nocookie.com/embed/RLpj1nAzECc?rel=0" frameborder="0"
                                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen="allowfullscreen"></iframe>
                               
                            </div>
                            <div class="section-content__nav-buttons">
                                     <div class="button-item">
                                                <a class="btn btn-small" target="_blank" href="https://www.youtube.com/watch?v=RLpj1nAzECc&list=PLYruQHOOSTwMxNmCvZcEdk7BjwU_zI8jQ">
                                                <span class="btn-span"></span>
                                                <span class="btn-span"></span>
                                                <span class="btn-span"></span>
                                                <span class="btn-span"></span>Gallery</a>
                                                <h6>Youtube page</h6>
                                        </div>                                   
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--col-ends-->
                </div>
            </section>
 
        </div>
        <!--container-ends-->
    </main>

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
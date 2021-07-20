<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9"> <![endif]-->
<html lang="en">

<head>
    <?php include("includes/head-tag-links.php");?>
    <?php include("includes/site-pages-meta/meta-gallery-index.php");?>


</head>

<body>


    <header id="header">

        <div class="header-content">
            <div class="header-content__image">
                <div class="header-noimage"></div>
            </div>

            <div class="header-content__title">
                <h1>SUKHI 222 GALLERY INDEX</h1>
            </div>
        </div>

        <nav id="menu" class="navbar">
            <?php include 'includes/site-sections/header.php'; ?>
        </nav>

    </header>


         <main>
            <div class="sitemap">
                    <!-- GALLERY INDEX -->
                    <div class="sitemap-item">
                        <div class="sitemap-item__header">
                            <h2><u>GALLERIES</u></h2>
                        </div>
                        <div class="sitemap-item__content">
                            <ul>
                                <li><a href="gallery-art.php">Art Gallery</a></li>
                                <li><a href="gallery-projects.php">Projects Gallery</a></li>
                                <li><a href="gallery-video.php">Video Gallery</a></li>
                            </ul>
                        </div>
                    </div>
            </div>
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

 
</body>

</html>
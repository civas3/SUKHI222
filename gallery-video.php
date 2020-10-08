<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9"> <![endif]-->
<html lang="en">

<head>
    <?php include("includes/head-tag-contents.php");?>

    <title>SUKHI 222 | VIDEO GALLERY</title>
    <meta name="description" content="">

</head>

<body>
    <nav id="menu" class="top-nav">
        <?php include 'includes/site-sections/header.php'; ?>
    </nav>

    <div class="hero-image">
        <div class="bg-image">
            <div class="header-image video-image"></div>
        </div>

        <div class="intro">
            <h1>SUKHI 222 VIDEO GALLERY</h1>
        </div>
    </div>

    <div class="main-wrapper">
        <div class="wrapper-content gallery">
            <div class="gallery__item">
                <h2>222 GOES TO DC 3/2019</h2>
                <div class="gold-border"></div>

                <iframe class="video-gallery" width="560" height="315"
                    src="https://www.youtube-nocookie.com/embed/RLpj1nAzECc?rel=0" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen="allowfullscreen"></iframe>
                <p>
                    <a href="https://www.youtube.com/watch?v=RLpj1nAzECc&list=PLYruQHOOSTwMxNmCvZcEdk7BjwU_zI8jQ"
                        target="_blank">
                        Click here to view all videos at our Youtube channel</a>
                </p>
            </div>
        </div>
    </div>

    <div class="sign-up-newsletter">
        <?php include 'includes/site-sections/newsletter.php'; ?>
    </div>
    <footer class="footer">
        <?php include 'includes/site-sections/footer.php'; ?>
    </footer>
    <div class="copy-right">
        <?php include 'includes/site-sections/copyright.php'; ?>
    </div>

    <!-- Java script -->
    <?php include 'includes/site-features/js.php'; ?>
</body>

</html>
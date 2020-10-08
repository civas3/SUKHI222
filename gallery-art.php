<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9"> <![endif]-->
<html lang="en">

<head>
    <?php include("includes/head-tag-contents.php");?>

    <title>SUKHI 222 | ART GALLERY</title>
    <meta name="description" content="">

</head>

<body>
    <nav id="menu" class="top-nav">
        <?php include 'includes/site-sections/header.php'; ?>
    </nav>
    <div class="hero-image">
        <div class="bg-image">
            <div class="header-image art-image"></div>
        </div>

        <div class="intro">
            <h1>SUKHI 222 ART GALLERY</h1>
        </div>
    </div>

    <div class="main-wrapper">
        <div class="wrapper-content gallery">
            <div class="gallery__item">
                <h2>ART BY: TEDDY JACKSON</h2>
                <div class="gold-border"></div>

                <img class="art-gallery" src="<?php echo cdnURL ?>/images/gallery/art/art.jpg" alt="painting"
                    title="art by: Teddy Jackson" />
                <p>
                    <a href="https://www.facebook.com/pg/sukhi222international/photos/?tab=album&album_id=148897803434956"
                        target="_blank">
                        Click here to view more art at our facebook gallery</a>
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
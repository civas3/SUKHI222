<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9"> <![endif]-->
<html lang="en">

<head>
    <?php include("includes/head-tag-links.php");?>
    <?php include("includes/site-pages-meta/meta-gallery-art.php");?>


</head>

<body>



   <header id="header">

         <div class="header-content">
            <div class="header-content__image">
                <div class="header-image gallery-art-header-bg"></div>
            </div>

            <div class="header-content__title">
              <h1>SUKHI 222 ART GALLERY</h1>
            </div>
        </div>

        <nav id="menu" class="navbar">
            <?php include 'includes/site-sections/header.php'; ?>
        </nav>


    </header>

    <main>
        <div class="container">
            <!--SECTION art by teddy jackson-->
            <section class="gallery">
                <div class="row">
                    <div class="col-12">
                        <div class="section-content">
                            <div class="section-content__header">
                                 <h2>ART BY: TEDDY JACKSON</h2>
                                <div class="gold-border"></div>
                            </div>
                            <div class="section-content__image ">
                                <div class="frame">
                                <img class="art-gallery" src="<?php echo cdnURL ?>/images/gallery/art/art.jpg" alt="painting"
                                title="art by: Teddy Jackson" />
                                
                                </div>
                                
                            </div>
                            <div class="section-content__nav-buttons">
                                        <div class="button-item">
                                                <a class="btn btn-small" target="_blank" href="https://www.facebook.com/pg/sukhi222international/photos/?tab=album&album_id=148897803434956">
                                                <span class="btn-span"></span>
                                                <span class="btn-span"></span>
                                                <span class="btn-span"></span>
                                                <span class="btn-span"></span>Gallery</a>
                                                <h6>Facebook page</h6>
                                        </div> 
                                </div>
                        </div>
                    </div>
                    <!--col-ends-->
                </div>
            </section>
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
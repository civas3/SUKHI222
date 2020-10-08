<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<!--[if IE 8]> <html class="no-js ie8"> <![endif]-->
<!--[if IE 9]> <html class="no-js ie9"> <![endif]-->
<html lang="en">

<head>
    <?php include("includes/head-tag-contents.php");?>

    <title>SUKHI 222 | GET INVOLVED</title>
    <meta name="description" content="">

</head>

<body>
    <nav id="menu" class="top-nav">
        <?php include 'includes/site-sections/header.php'; ?>
    </nav>

    <div class="hero-image">
        <div class="bg-image">
            <div class="header-image get-involved-image"></div>
        </div>

        <div class="intro">
            <h1>GET INVOLVED</h1>
        </div>
    </div>

    <div class="main-wrapper">
        <div class="wrapper-content get-involved">
            <div class="get-involved__item">
                <h2>Volunteers</h2>
                <div class="button-item">
                    <a class="btn read-more" href="contact.php" target="_blank">
                        <span class="span5"></span>
                        <span class="span5"></span>
                        <span class="span5"></span>
                        <span class="span5"></span>Form</a>
                </div>

            </div>

            <div class="get-involved__item">
                <h2>Donate</h2>
                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                    <input type="hidden" name="cmd" value="_s-xclick" />
                    <input type="hidden" name="hosted_button_id" value="AT9YY4XTAGKT4" />
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0"
                        name="submit" alt="PayPal - The safer, easier way to pay online!" />
                    <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1"
                        height="1" />
                </form>
            </div>

            <div class="get-involved__item">
                <h2>LinkedIn</h2>

                <div class="button-item">
                    <a class="btn read-more" href="https://www.linkedin.com/groups/12177249/" target="_blank">
                        <span class="span5"></span>
                        <span class="span5"></span>
                        <span class="span5"></span>
                        <span class="span5"></span>JOIN</a>
                </div>
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
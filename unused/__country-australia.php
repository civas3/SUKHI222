<?php include("includes/a_config.php");?>
<!DOCTYPE html>
<!--[if IE 8 ]> <html class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="no-js ie9"> <![endif]-->
<html lang="en">
    <head>
        <?php include("includes/head-tag-contents.php");?> 
    </head>
    <body>       
            <nav id="menu" class="top-nav">
                   <?php include 'includes/site-sections/header.php'; ?> 
                       </nav>
                   
                       <div class="hero-image">  
                        <div class="overlay-image"></div>
                      <div  class="bg-image">
                          <img src="<?php echo cdnURL ?>/images/coming-soon.jpg" title="Photo by: Gratisography-53H" alt="Comin soon clock">
                           <!--<video class="bg-video__content" autoplay muted loop>
                                 <source src="<?php echo cdnURL ?>images/videos/background-video.mp4" type="video/mp4" width="100%">
                                 Your browser is not supported!
                             </video> -->
                        </div>
     <!--
                 <div class="main-wrapper">  
                        <div class="main-header">
                                
                            </div>         
                     <div class="wrapper-content"> 
                        
                    </div> 
                 </div>
-->
     
                 <div style="margin-top: 0;" class="sign-up-newsletter">
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
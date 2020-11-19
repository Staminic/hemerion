<?php defined( '_JEXEC' ) or die;
include_once JPATH_THEMES.'/'.$this->template.'/logic.php';
?>

<!doctype html>

<html lang="<?php echo $this->language; ?>">
    <head>
        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PRC2N55');</script>
        <!-- End Google Tag Manager -->

        <jdoc:include type="head" />
    </head>

    <body <?php echo ($pageclass ? 'class="' . $pageclass . '"' : ""); ?>>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRC2N55"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <header>
            <nav class="navbar">
                <a class="navbar-brand" href="/">
                <?php if( $pageclass == 'onepage' ) : ?>
                    <img src="images/hemerion-logo-white.svg" alt="logo d'hemerion" class="img-fluid" width="345"/>
                <?php else : ?>
                    <img src="images/hemerion-logo.svg" alt="logo d'hemerion" class="img-fluid" width="345"/>
                <?php endif; ?>
                </a>
                
                <jdoc:include type="modules" name="lang-switcher" />
            </nav>
        </header>

        <main> 
            <?php if( $pageclass == 'onepage' ) : ?>
                <jdoc:include type="component" />
            <?php else :?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 offset-lg-2">
                            <jdoc:include type="component" />
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </main>

        <footer>
            <jdoc:include type="modules" name="footer" />
        </footer>

        <jdoc:include type="modules" name="debug" />
        <script src="templates/hemerion/build/app.js"></script>

    </body>
</html>


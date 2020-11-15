<!DOCTYPE html>
<html>

    <head>

        <?php wp_head(); ?>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Custom styles-->
        <link rel="stylesheet" type="text/css" href="styles.css">

        <title>Kiran Anand</title>

    </head>

    <body <?php body_class(); ?>>

        <header class="sticky-top">

            <div class="container">
    
<?php

                if($user_ID)
                {
                    wp_nav_menu(
                        array
                        (
                            'theme_location' => 'top-menu',
                            'menu_class' => 'navigation'
                        )
                    );
                }
                else
                {
                    echo "<h1>Pre Login Header</h1>";
                }
?>

            </div>

        </header>

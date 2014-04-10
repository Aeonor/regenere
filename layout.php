<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1"/>
        <meta name="application-name" content="Régénère"/>
        <meta name="description" content="Régénère.org " />
        <link rel="image_src" href="icon.png" />

        <title>Régénère.com</title>
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Cabin:400,500,600,700|PT+Sans:400,700|Roboto:400,700,300,500,900|Rosario|Roboto+Condensed:400,700,300|Quattrocento+Sans:400,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
        <link rel="stylesheet/less" type="text/css"  href="less/styles.less?<?php echo rand() ?>">
        <link rel="icon" type="image/png" href="icon.png" />
        <link rel="canonical" href="http://www.vivrecru.org"/>

    </head>
    <body class="<?php echo $_page ?>">

        <div id="wrapper">
            <div class="image">
                
                <?php include 'layout_header.php'; ?>
                
                <div id="container">
                    <div class="container">
                        <?php echo $_content; ?>
                    </div>
                </div>

            </div>
        </div>

        <footer>

        </footer>


        <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.0/less.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <script src="js/init.js"></script>
    </body>
</html>
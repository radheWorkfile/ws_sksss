<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SWARGIYA KANHAI SHUKLA SAMAJIK SEWA SANSTHAN | Media</title>
    <?php include 'include/css.php' ?>
    <!--Start News Slides-->
    <script src="<?php echo base_url(); ?>media/theme/code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.css">
    <style>
        .jumbotron {
            text-align: center;
            padding: 20px;
            margin: 10px 0;
        }

        .gallery {
            padding: 40px;
            padding-left:16rem;
        }

        .gallery img {
            width: 100%;
            border-radius: 0;
            position: relative;
        }


        
    </style>
</head>

<body class="bacColMan">
    <?php include 'include/header.php' ?>
    <div class="container-fluid">
        <div class="jumbotron bacColMan">
            <h1>Media</h1>
        </div>

        <div class="row gallery">
            <?php foreach ($media as $md => $med) { ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <h6 class="text-center"> <?php echo $med['title']; ?></h6>
                    <a href="<?php echo $med['image']; ?>">
                        <img class="img-fluid" src="<?php echo $med['image']; ?>">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php include 'include/footer.php' ?>

    <?php include 'include/js.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.11.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run(".gallery", {
            animation: "slideIn"
        });
    </script>
</body>

</html>
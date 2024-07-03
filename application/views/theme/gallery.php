<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SWARGIYA KANHAI SHUKLA SAMAJIK SEWA SANSTHAN | Gallery</title>
    <?php include 'include/css.php' ?>
    <style>
        .ig {
            position: relative;
            width: 100%;
        }

        .image {
            opacity: 1;
            display: block;
            width: 100%;
            height: auto;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        .middle {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .ig:hover .image {
            opacity: 0.8;
        }

        .ig:hover .middle {
            opacity: 1;
        }
    </style>
</head>

<body>
    <?php include 'include/header.php' ?>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 align="center">Multimedia</h1>
        </div>
        <div class="row">
            <div class="col-lg-1">&emsp;</div>
            <div class="col-lg-5 ">
                <div class="ig">
                    <img class="image" src="<?php echo $gallery_image['image']; ?>" width="100%">
                    <a href="<?php echo base_url() ?>site/gallery_image">
                        <div class="middle">
                            <h2 style="color:black; font-size:24px">Click To View Gallery Image</h2>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="ig">
                    <?php if (!empty($gallery_video['video'])){?>
                        <iframe width="100%" height="375" src="<?php echo $gallery_video['video']; ?>" title="<?php echo $gallery_video['title']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <?php } else{?>    
                        <img class="image" src="<?php echo $gallery_image['image']; ?>" width="100%">
                    <?php } ?>
                    <a href="<?php echo base_url() ?>site/gallery_video">
                        <div class="middle">
                            <h2 style="color:black; font-size:24px">Click To View Gallery Video</h2>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <?php include 'include/footer.php' ?>

    <?php include 'include/js.php' ?>

</body>

</html>
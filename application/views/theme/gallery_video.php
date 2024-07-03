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
</head>

<body>
    <?php include 'include/header.php' ?>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>Gallery Video</h1>
        </div>


        <div class="row gallery">
            <?php foreach ($gallery as $gl => $gall) { ?>
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <h6 class="text-center"> <?php echo $gall['title']; ?></h6>
                    <iframe width="100%" height="250" src="<?php echo $gall['video']; ?>" title="<?php echo $gall['title']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            <?php } ?>
        </div>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <p><iframe src="https://test.camwel.com/skssss/media/images/video.mp4" frameborder="0"style="height:41rem;width:100%;"></iframe></p>
            </div>
            <div class="col-md-2"></div>
        </div>

        



    </div>

    <?php include 'include/footer.php' ?>

    <?php include 'include/js.php' ?>
</body>

</html>
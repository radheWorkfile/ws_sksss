<h3 class="text-center"><?php echo $gallery['title'] ?></h3><br>
<center>
    <iframe width="100%" height="250" src="<?php echo $gallery['video']; ?>" title="<?php echo $gallery['title']; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</center><br>
<h5>Uploaded Date:- <?php echo date('d-m-Y', strtotime($gallery['created_at'])) ?></h5>
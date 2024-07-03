<h3 class="text-center"><?php echo $gallery['title'] ?></h3><br>
<center><img src="<?php echo $gallery['image'] ?>" alt="" width="100%"></center><br>
<h5>Uploaded Date:- <?php echo date('d-m-Y',strtotime($gallery['created_at'])) ?></h5>
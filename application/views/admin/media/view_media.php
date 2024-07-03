<h3 class="text-center"><?php echo $media['title'] ?></h3><br>
<center><img src="<?php echo $media['image'] ?>" alt="" width="100%"></center><br>
<h5>Uploaded Date:- <?php echo date('d-m-Y',strtotime($media['created_at'])) ?></h5>
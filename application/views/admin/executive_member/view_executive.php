<h3 class="text-center"><?php echo $execuitve['name'] ?></h3><br>
<h6 class="text-center"><?php echo $execuitve['post'] ?></h6><br>
<center><img src="<?php echo $execuitve['image'] ?>" alt="" width="50%"></center><br>
<h5>Uploaded Date:- <?php echo date('d-m-Y',strtotime($execuitve['created_at'])) ?></h5>
<?php if ($career_enquiry['status'] == 1) {
    echo "<span class='text-success'><b> Active <i class='fa fa-check'></i> </b></span>";
} else {
    echo "<span class='text-danger'><b> De-Active <i class='fa fa-times'></i> </b></span>";
}  ?>
<div class="card-body">
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12 order-1 order-md-2">
            <div class="row">
                <div class="col-12 col-sm-12">
                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Name</b>
                            <a class="float-right">
                                <?php echo $career_enquiry['name'];?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Mobile</b>
                            <a class="float-right">
                                <?php echo $career_enquiry['mobile_no'] ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>Email</b>
                            <a class="float-right">
                                <?php echo $career_enquiry['email'] ?>
                            </a>
                        </li>
                        <li class="list-group-item">
                            <b>View CV</b>
                            <a href="<?php echo $career_enquiry['doc']  ?>" class="float-right" target="_blank">
                                <i class="fas fa-file-pdf"></i> View
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
                <h4 class="text-center">Message</h4>
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-sm">
                            <?php echo $career_enquiry['description'] ?>
                        </p>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
</div>
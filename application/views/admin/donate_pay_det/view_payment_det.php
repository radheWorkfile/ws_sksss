

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div> <div class="col-md-3 text-primary"><p>Name</p></div>
            <div class="col-md-1"><p>-</p></div>
            <div class="col-md-5"><p><?php echo $pay_details['fname'].$pay_details['lname'];?></p></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div> <div class="col-md-3 text-primary"><p>Email</p></div>
            <div class="col-md-1"><p>-</p></div>
            <div class="col-md-5"><p><?php echo $pay_details['email'];?></p></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div> <div class="col-md-3 text-primary"><p>Mobile No</p></div>
            <div class="col-md-1"><p>-</p></div>
            <div class="col-md-5"><p><?php echo $pay_details['phone'];?></p></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div> <div class="col-md-3 text-primary"><p>Message</p></div>
            <div class="col-md-1"><p>-</p></div>
            <div class="col-md-5"><p><?php echo $pay_details['remark'];?></p></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div> <div class="col-md-3 text-primary"><p>PayMent Date</p></div>
            <div class="col-md-1"><p>-</p></div>
            <div class="col-md-5"><p><?php echo $pay_details['data'];?></p></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div> <div class="col-md-3 text-primary"><p>Payment recipt</p></div>
            <div class="col-md-1"><p>-</p></div>
            <div class="col-md-5 docAmiImg"><p><img src="<?php echo base_url().'uploads/payDetails/'.$pay_details['pay_det'];?>" alt=""style="height:2rem;"></p></div>
        </div>
    </div>
</section>


<!-- fname    lname    email    phone    remark    data   image  pay_det -->
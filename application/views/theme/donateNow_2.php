<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SWARGIYA KANHAI SHUKLA SAMAJIK SEWA SANSTHAN | Contact</title>
    <?php include 'include/css.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        #pageloader {
            background: rgba(255, 255, 255, 0.8);
            display: none;
            height: 100%;
            position: fixed;
            width: 100%;
            z-index: 9999;
        }

        #pageloader img {
            left: 50%;
            margin-left: -32px;
            margin-top: -32px;
            position: absolute;
            top: 50%;
        }
   
    </style>
</head>

<body class="homepage">
    <?php include 'include/header.php' ?>
    <div id="response">
        <div id="fh5co-contact">
            <div class="container wow fadeInDown" style="margin-top: 20px;" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="center wow fadeInDown">
                    <h5 class="contact-main">Donate Now</h5>
                </div>

            </div>
        </div>
        <div class="container">
            <h3 style="margin-bottom: 30px; font-size: 24px;"> <strong>Supporting children's futures, one act of kindness at a time."</strong></h3>
            <form id="addDonate" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="fname">First Name <span style="color:red;"> *</span></label>
                        <input type="text" id="fname" name="fname" style="font-size: 18px;" class="form-control" placeholder="Your firstname">
                    </div>
                    <div class="col-md-6">
                        <label for="lname">Last Name<span style="color:red;"> *</span></label>
                        <input type="text" id="lname" name="lname" class="form-control" style="font-size: 18px;" placeholder="Your lastname">
                    </div>
                </div>
                <div class="row form-group">
                <div class="col-md-6">
                        <label for="email">Email<span style="color:red;"> *</span></label>
                        <input type="email" name="email" id="email" class="form-control" style="font-size: 18px;" placeholder="Your email address">
                    </div>
                    <div class="col-md-6">
                        <label for="email">Mobile no<span style="color:red;"> *</span></label>
                        <input type="tel" id="phone" class="form-control" name="phone" style="font-size: 18px;" placeholder="Your mobile no.">
                    </div>
                 
                </div>
                <div class="row form-group">
                <div class="col-md-6">
                        <label for="subject">Payment Method<span style="color:red;"> *</span></label>
                        <select style="width: 100%; height: 40px; font-size: 20px;" id="pay_method"  name="pay_method">
                            <option value="Enquiry">--- Select One ---</option>
                            <option value="1">Cash</option>
                            <option value="2">Online</option>
                        </select>
                    </div>

                  
                    <div class="col-md-6" id="accInfo" style="display:none;">
                        <label for="subject">Account  Information </label>
                        <select style="width: 100%; height: 40px; font-size: 20px;" id="acc_info"  name="acc_info">
                            <option >--- Select One ---</option>
                            <option value="1">National</option>
                            <option value="2">Inter National</option>
                        </select>
                    </div>
                  
                    <div class="col-md-12" id="holderSec" style="display:none;"><br>
                      <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8" style="border:2px solid #e7ebef;margin-top:0.5rem;padding: 2rem; border-radius: 1rem;margin-bottom:1rem;">
                          <div class="" style="width:45%;display:inline-block;">
                          <p>Name of account holder</p>
                          <p>Bank Name </p>
                          <p>Account Number</p>
                          <p>IFSC Code</p>
                          <p>Swift Code</p>
                          </div>
                          <div class="" style="width:50%;display:inline-block;">
                           <p>Swargiya Kanhai shukla Samajik Sewa Sansthan.</p>
                           <p>State Bank of India</p>
                           <p>40389562436</p>
                           <p>SBIN0000691</p>
                           <p>SBININBB104</p>
                         </div>
                        </div>
                        <div class="col-md-2"></div>
                      </div>
                    </div>
                    
                    <div class="col-md-6" id="amoutSec" style="display:none;">
                        <label for="email">Enter Amount</label>
                        <input type="number" name="cash" id="cash" class="form-control" style="font-size: 18px;" placeholder="Enter Amount">
                    </div>
                    <div class="col-md-6" id="swiftSec" style="display:none;">
                        <label for="email">Upload Payment Screenshot </label>
                        <input type="file" id="pay_det" class="form-control plaHolMan" name="pay_det" style="font-size: 18px;" placeholder="upload Payment Screenshot ">
                    </div>
                    <div class="col-md-12" id="remarkSec" style="display:none;"><br>
                        <label for="email">Remark </label>
                        <textarea name="remark" id="remark" cols="30" rows="2" class="form-control plaHolMan"  placeholder="Enter Your Message "></textarea>
                    </div>
                 
                </div>
             
                <div class="row form-group">
                    <div class="col-md-12">
                    <input type="submit" name="submit" value="Pay Now " class="btn btn-primary btn-lg btn-pop" >
                       
                    </div>
                </div>
           
               
            </form>
        
        </div>


 <!-- ================================= Model Part Start ==================================================  -->

<?php include('include/modelPart.php');?>

<!-- =================================== Model Part End ================================================  -->
        <?php include 'include/footer.php' ?>
        <?php include 'include/js.php' ?>
</body>
<!-- amoutSec   holderSec   bankSec   accNoSec   ifcCSec   swiftSec  acc_info  accSecMan-->
<script>
    $(document).ready(function() {
            $("#pay_method").change(function() {
                var actNbtn = $('#pay_method').val();
                if (actNbtn == '1') {
                    $("#amoutSec,#remarkSec").show();
                    $("#holderSec,#bankSec,#accNoSec,#ifcCSec,#swiftSec,#accInfo").hide();
                } else if (actNbtn == '2') {
                    $("#accInfo,#remarkSec").show();
                    $("#amoutSec").hide();
                    $("#holderSec").hide();
                    $("#bankSec").hide();
                    $("#accNoSec").hide();
                    $("#ifcCSec").hide();
                    $("#swiftSec").hide();
                }
                 else {
                    $(".othDetInp").hide();
                }
                $("#acc_info").change(function() {
                var accSecMan = $('#acc_info').val();
                if (accSecMan == '1') {
                    $("#swiftSec,#holderSec,#bankSec,#accNoSec,#ifcCSec,#amoutSec").show().css('margin-top','1rem;');
                } else if (accSecMan == '2') {
                    $("#holderSec,#bankSec,#accNoSec,#swiftSec,#amoutSec").show().css('margin-top','1rem;');
                    $("#ifcCSec").hide();
                }
                 else {
                    $(".othDetInp").hide();
                }
            });
            });
        });

        $("#addDonate").on("submit", function(e) {
            e.preventDefault();
            $.ajax({
            type: "post",
            url: '<?= base_url() ?>site/donPayDet',
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            dataType:'json',
            success: function(data) 
				{
            if(data.icon=="error") 
            {
            var valid = '';
            $.each(data.text, function (i, item) {
            valid += item;
            });
            Swal.fire({
            position: "center",
            icon: data.icon,
            html: valid,
            showConfirmButton: !1,
            timer: 1500
            });
            } else {
            Swal.fire({
            position: "center",
            icon: data.icon,
            title: data.text,
            showConfirmButton: 1,
            timer: 1500
            });
            setTimeout(function () {window.location.reload(1);}, 1500);
            }
                }
            });
        });
        


</script>

</html>
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
        ::placeholder{
            background-color:#FFF2E1;  
        }
    </style>
</head>

<body class="homepage bacColMan">
    <?php include 'include/header.php' ?>
    <div id="response">
        <div id="fh5co-contact">
            <div class="container wow fadeInDown" style="margin-top: 20px;" data-wow-duration="1000ms" data-wow-delay="600ms">
                <div class="center wow fadeInDown">
                    <h3 class="contact-main">Get In Touch Us</h3>
                </div>

            </div>
        </div>
        <div class="container">
            <h3 style="margin-bottom: 30px; font-size: 24px;"> <strong>Quick Enquiry / Review / Suggestion</strong></h3>
            <form id="add_contact" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" style="font-size: 18px;" class="form-control" placeholder="Your firstname" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" class="form-control" style="font-size: 18px;" placeholder="Your lastname" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-6">
                        <label for="email">Mobile no.</label>
                        <input type="tel" id="phone" class="form-control" name="phone" style="font-size: 18px;" placeholder="Your mobile no." required>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" style="font-size: 18px;" placeholder="Your email address" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="subject">Select Subject</label>
                        <select style="width: 100%; height: 40px; font-size: 20px; background-color: #FFF2E1;" name="subject">
                            <option value="Enquiry">Enquiry</option>
                            <option value="Donation">Donation</option>
                            <option value="Career">Career</option>
                            <option value="Review">Review</option>
                            <option value="Suggestion">Suggestion</option>
                        </select>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-12">
                        <label for="message">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" style="height: 200px; font-size: 18px;" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" value="Send Message" class="btn btn-primary btn-lg btn-pop">
                </div>
            </form>
           
          
        </div>

        <section style="background-color:#e7e5e5;padding:4rem 4rem;">
            <div class="container">
            <div class="row">
               <div class="col-md-4" style="background-color:#efefef;margin-left:1.3rem;">
               <h3 style="font-size:24px;background-color:#0fb7e6;color:white;text-align:center;padding:2rem;margin-bottom:0.5rem;">Contact Information</h3>
               <div class="row"><br>
                <div class="col-md-2"><i class="fa fa-home contact-icon"></i></div>
                <div class="col-md-10"> <p>Shukla Market, Hospital Road, Hajipur, Dist. Vaishali- 844101 Bihar (India)</p></div>
               </div>
               <div class="row"><br>
                <div class="col-md-2"><i class="fa fa-mobile contact-icon" style="padding-left:1.3rem;"></i></div>
                <div class="col-md-10"> <p>06224-271095 / 09431081854 / 07352624517</p></div>
               </div>
               <div class="row"><br>
                <div class="col-md-2"><i class="fa fa-envelope contact-icon"></i></div>
                <div class="col-md-10"> <p>kanhaishukla@gmail.com</p></div>
               </div><br>
               </div>
                <div class="col-md-8">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14387.90774143156!2d85.221835!3d25.638891!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x16ad57dabbd455f8!2sSWARGIYA%20KANHAI%20SHUKLA%20SAMAJIK%20SEVA%20SANSTHAN%20(SKSSSS)!5e0!3m2!1sen!2sin!4v1638621560862!5m2!1sen!2sin" width="108%" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
              
            </div>
            </div>
        </section>
        <?php include 'include/footer.php' ?>
        <?php include 'include/js.php' ?>
</body>

<script>
    $('#add_contact').submit(function(e) {
        $("#pageloader").fadeIn();
        e.preventDefault();
        $.ajax({
            url: '<?= base_url() ?>site/enquiry',
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            dataType: 'json',
            success: function(data) {
                //console.log(data);
                $('#response').html(data);
            }
        });
    });
</script>

</html>
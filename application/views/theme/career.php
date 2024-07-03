<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SWARGIYA KANHAI SHUKLA SAMAJIK SEWA SANSTHAN | Careers</title>
    <?php include 'include/css.php' ?>
    <style type="text/css">
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.8);
            max-width: 300px;
            margin: auto;
            text-align: center;
            /* font-family: arial; */
        }

        .card_body {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
            max-width: 300px;
            margin-left: 15px;
            margin-top: -18px;
            text-align: center;
            font-family: arial;
            border-radius: 8px;
        }

        .card_body:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.8);
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.8);
        }

        .title {
            text-align: center;
            border: 1px gray;
            background-color: #0db7e6;
            color: #fff;
            font-size: 16px;
            list-style-type: none;
            padding: 8px;
            width: 100%;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .div {
            color: #4e4e4e;
            background: #F2F2F2;
            padding: 10px;
            line-height: 20px;
            font-size: 14px;
            text-align: justify;
            border-bottom: 1px dotted #2c8162;
        }

        .button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white !important;
            background-color: #01aba0;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
            border-radius: 5px;
        }

        .a {
            text-decoration: none;
            font-size: 22px;
            color: black;
        }

        .button:hover,
        a:hover {
            opacity: 0.7;
        }

        .p {
            font-weight: bold;
            margin-left: 8px;
            font-size: medium;
            color: #000000;
            margin-top: 5px;
        }

        .h {
            font-weight: bold;
            font-size: 25px;
            color: #000000;
            margin-top: 5px;
        }

        .ul {
            text-align: justify;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            line-height: 28px;
            font-size: 13px;
        }

        @font-face {
            font-family: kruti dev;
            src: url("fonts/Kruti_Dev_010.ttf"), url("http://www.gmacanimation.com/404.html");
        }

        .message1 {
            height: auto;

        }
    </style>
</head>

<body class="homepage bacColMan">
    <?php include 'include/header.php' ?>
    <section>
        <div class="container">
            <h1 class="text-center" style="color:black"><?php echo $career['title']?></h1>
            <div class="row">
                <?php echo $career['description'];?>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div id="response">
                <form id="add_career" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="fname">First Name <span class="text-danger">*</span></label>
                            <input type="text" id="fname" name="fname" style="font-size: 18px;" class="form-control" placeholder="Your firstname" required>
                        </div>
                        <div class="col-md-6">
                            <label for="lname">Last Name <span class="text-danger">*</span></label>
                            <input type="text" id="lname" name="lname" class="form-control" style="font-size: 18px;" placeholder="Your lastname" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-6">
                            <label for="email">Mobile no. <span class="text-danger">*</span></label>
                            <input type="tel" id="phone" class="form-control" name="phone" style="font-size: 18px;" placeholder="Your mobile no." required>
                        </div>
                        <div class="col-md-6">
                            <label for="email">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" id="email" class="form-control" style="font-size: 18px;" placeholder="Your email address" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="subject">Upload CV <span class="text-danger">*</span>&nbsp;<span class="tetx-sm">(Only PDF and Word File Allowed upto 5MB)</span></label>
                            <input type="file" name="cv" id="cv" class="form-control" require>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <label for="message">Message <span class="text-danger">*</span></label>
                            <textarea name="message" id="message"  class="form-control" placeholder="Type Your Message" style="height: 100px; font-size: 18px;" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-pop">
                    </div>
                </form>
            </div>
        </div>
    </section>
    

    <?php include 'include/footer.php' ?>

    <?php include 'include/js.php' ?>
    <script>
    $('#add_career').submit(function(e) {
        $("#pageloader").fadeIn();
        e.preventDefault();
        $.ajax({
            url: '<?= base_url() ?>site/add_career',
            type: "POST",
            data: new FormData(this),
            processData: false,
            contentType: false,
            cache: false,
            async: false,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#response').html(data);
            }
        });
    });
</script>
</body>

</html>
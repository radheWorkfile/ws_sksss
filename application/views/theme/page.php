<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SWARGIYA KANHAI SHUKLA SAMAJIK SEWA SANSTHAN | <?php echo ($this->uri->segment(2) == 'news_page')?"News" :"Tender";?></title>
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
    <section class="top-head">
        <!--start: Slider -->
        <div class="row">
            <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel slide">
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="<?php echo base_url(); ?>media/theme/images/slider/slider.jpg">
                            <div class="carousel-caption hidden-xs"></div>
                        </div>
                    </div>
                </div>
                <!-- // Main Slider -->
                <!-- Controls -->
                <a class="left carousel-control hidden-xs" href="#carousel-example-generic" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">Previous</span> </a><a class="right carousel-control hidden-xs" href="#carousel-example-generic" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">Next</span></a>
            </div>
        </div>
        <!--end: Slider -->
    </section>
    <section class="head-scrol">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 scrol-dv">
                    <marquee behavior="scroll">
                        <a href="#" style="color:#FFF">Welcome To Swargiya Kanhai Shukla Samajik Sewa Sansthan</a> &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="#" style="color:#FFF"> Welcome To Swargiya Kanhai Shukla Samajik Sewa Sansthan</a> &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="#" style="color:#FFF">Welcome To Swargiya Kanhai Shukla Samajik Sewa Sansthan</a> &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="#" style="color:#FFF"> Welcome To Swargiya Kanhai Shukla Samajik Sewa Sansthan</a> &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="#" style="color:#FFF"> Welcome To Swargiya Kanhai Shukla Samajik Sewa Sansthan</a> &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="#" style="color:#FFF"> Welcome To Swargiya Kanhai Shukla Samajik Sewa Sansthan</a> &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="#" style="color:#FFF"> Welcome To Swargiya Kanhai Shukla Samajik Sewa Sansthan</a> &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="#" style="color:#FFF"> Welcome To Swargiya Kanhai Shukla Samajik Sewa Sansthan</a> &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="#" style="color:#FFF"> Welcome To Swargiya Kanhai Shukla Samajik Sewa Sansthan</a> &nbsp; &nbsp; &nbsp; &nbsp;
                        <a href="#" style="color:#FFF"> Welcome To Swargiya Kanhai Shukla Samajik Sewa Sansthan</a> &nbsp; &nbsp; &nbsp; &nbsp;
                    </marquee>
                </div>
            </div>
        </div>
    </section>
    <section>
        <?php if ($this->uri->segment(2) == 'news_page') { ?>
            <div class="container">
                <h1 class="text-center" style="color:black">News Details</h1>
                <div class="row">
                    <h4 style="color:black">
                        <?php echo $des['title']; ?>
                    </h4>
                    <p style="color:black">
                        <?php echo $des['description']; ?>
                    </p>
                </div>
            </div>
        <?php } elseif (($this->uri->segment(2) == 'tender_page')) { ?>
            <div class="container">
                <h1 class="text-center" style="color:black">Tender Details</h1>
                <div class="row">
                    <h4 style="color:black">
                        <?php echo $ten['title']; ?>
                    </h4>
                    <p style="color:black">
                        <?php echo $ten['description']; ?>
                    </p>
                    <a href="<?php echo $ten['doc']; ?>" title="Click For Dpwnload PDF"><i class="fa fa-file-pdf-o"></i> Download PDF</a>
                </div>
            </div>
        <?php } ?>

    </section>


    <?php include 'include/footer.php' ?>

    <?php include 'include/js.php' ?>

</body>

</html>
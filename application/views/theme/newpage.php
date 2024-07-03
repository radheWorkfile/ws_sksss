
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SWARGIYA KANHAI SHUKLA SAMAJIK SEWA SANSTHAN | <?php echo $new['sub_menu']?></title>
    <?php $this->load->view('theme/include/css');?>

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
    <?php $this->load->view('theme/include/header');?>


    <section>
        <div class="container"><br>
            <h1 class="text-center" style="color:black"><?php echo $new['sub_menu']?></h1>
            <div class="row">
                <?php echo $new['content'];?>
            </div>
        </div>

        <?php if(count($founder)):?>
        <div class="container">
            <div class="row">
                        <?php foreach($founder as $f){?>
                            <div class="col-md-3 col-sm-6 wow fadeInLeftBig animate-box" data-animate-effect="fadeIn">
                                <div class="fh5co-staff">
                                    <img src="<?php echo $f->image;?>" class="img-circle" />
                                    <h4 class="hname"><?php echo $f->name;?></h4>
                                    <h6><?php echo $f->post;?></h6>
                                </div>
                            </div>
                        <?php }?>
                    </div>
        </div>
        <?php endif;?>




    </section>
    

    <?php $this->load->view('theme/include/footer');?>
    <?php $this->load->view('theme/include/js');?>
</body>

</html>
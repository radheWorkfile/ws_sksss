
<style>
    @media (min-width:744px) {
        .mar {
            margin-top: 14px !important;
        }

        .pad-20 {
            padding-left: 20%;
        }
    }

    .mar {
        color: #01aba0;
        margin-top: -54px;
        margin-left: 31PX;
    }

    .glow {
        background: red;
        animation: donate 5s infinite;
    }

    @keyframes donate {
        0% {
            background-color: red;
        }

        25% {
            background-color: #0db7e6;
        }

        50% {
            background-color: blue;
        }

        100% {
            background-color: #000000;
        }
    }

    .counter {
        margin-left: 500px;
        margin-top: -17px;
        background-color: #43ab9f;
        color: #fff605;
        font-weight: bolder;
    }

    .li {
        list-style: none;
        margin-left: 400px;
        margin-top: 7px;
        background-color: #000000;
        color: #fff;
        font-weight: bolder;
    }
    .lii{
        list-style: none;
        margin-left:-3rem;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #0db7e6;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: #fff;
        padding: 7px 10px;
        text-decoration: none;
        border-bottom: 1px solid #fff;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #0db7e6;
        color:yellow;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #0db7e6;
    }
</style>

<header id="header"> 
    <div class="top-bar bacColMan">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-5 col-md-5 text-center">
                    <div class="top-number">
                        <a class="navbar-brand" href="<?php echo base_url() ?>">
                            <img src="<?php echo base_url(); ?>media/theme/images/logo/logo.png" style="width: 100%;"></a>
                        <!-- <p class="companyname">Kurmi Foundation</p> -->
                    </div>
                </div>
                <div class="col-xs-12 col-sm-2 col-md-2 text-center">

                </div>
                <div class="col-xs-12 col-sm-5 col-md-5 text-center top-numemail">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="top-contact i">
                                <i class="fa fa-phone"></i><a href="#">06224-271095, 09431081854, 07352624517</a>
                                <br>
                                <i class="fa fa-envelope"></i><a href="#">kanhaishukla@gmail.com</a>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="https://app.crowdera.com/organization/skssss" target="_blank" class="btn btn-primary glow">Support Us</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-inverse">
        <div class="container pad-zero pad-20">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                <div class="collapse navbar-collapse pad-zero" id="top_nav">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url() ?>">Home</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url() ?>site/about">About
                            </a>
                            <div class="dropdown-content">
                                <?php if (!empty($sub_menus_about)) { foreach ($sub_menus_about as $menu_ab) { ?>
                                    <a href="<?php echo base_url(). "site/new_page/". $menu_ab["id"]."/about"?>">
                                        <?php echo $menu_ab["sub_menu"]; ?>
                                    </a>
                                <?php }} ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url() ?>site/activity">Activities
                            </a>
                            <div class="dropdown-content">
                                <?php if (!empty($sub_menus_activity)) { foreach ($sub_menus_activity as $menuav) { ?>
                                    <a href="<?php echo base_url(). "site/new_page/". $menuav["id"]."/activity"?>">
                                        <?php echo $menuav["sub_menu"]; ?>
                                    </a>
                                <?php }} ?>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url() ?>site/activity">Resource
                            </a>
                            <div class="dropdown-content">
                                <?php if (!empty($sub_menus_resources)) { foreach ($sub_menus_resources as $menuav) { ?>
                                    <a href="<?php echo base_url(). "site/new_page/". $menuav["id"]."/resources"?>">
                                        <?php echo $menuav["sub_menu"]; ?>
                                    </a>
                                <?php }} ?>
                            </div>
                        </li>
                     
                        <!-- <li><a href="<?//php echo base_url() ?>site/team">Team</a></li> -->
                        <li><a href="<?php echo base_url() ?>site/media">Media</a></li>
                        <li><a href="<?php echo base_url() ?>site/gallery">Gallery</a></li>
                        <li><a href="<?php echo base_url() ?>site/career">Career</a></li>
                        <li><a href="<?php echo base_url() ?>site/contact">Contact</a></li>
                    </ul>

                </div>
            </div>
    </nav>
</header>
<script>
    var n = localStorage.getItem('on_load_counter');
    // n = 1001;
    if (n == null) {
        n = 1001;
    }
    n++;
    localStorage.setItem("on_load_counter", n);
    nums = n.toString().split('').map(Number);
    document.getElementById('CounterVisitor').innerHTML = '';
    for (var i of nums) {
        document.getElementById('CounterVisitor').innerHTML += '<span class="counter-item">' + i + '</span>';
    }
</script>
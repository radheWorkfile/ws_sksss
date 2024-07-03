<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->session->userdata('company_name')?> | Edit Profile</title>
    <? $this->load->view('admin/include/css') ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed ">
    <div class="wrapper">
        <!-- Navbar -->
        <? $this->load->view('admin/include/header') ?>
        <!-- /.navbar -->
        <!-- Main Sidebar Container -->
        <? $this->load->view('admin/include/left') ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"><?php echo $title; ?></h1>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active"><?php echo $breadcrums; ?></li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">
                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <?php ?>
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle" src="<?php echo $users['photo']; ?>" alt="User profile picture">
                                    </div>
                                    <h3 class="profile-username text-center"><?php echo ucfirst($users['name']); ?></h3>
                                    <p class="text-muted text-center">
                                        <?php
                                        if ($users['admin_type'] == 1) {
                                            echo "Admin";
                                        } elseif ($users['admin_type'] == 2) {
                                            echo "Employee";
                                        } elseif ($users['admin_type'] == 3) {
                                            echo "Franchise";
                                        }
                                        ?>
                                    </p>
                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Contact</b> <a class="float-right"><?php echo $users['mobile']; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Email</b> <a class="float-right"><?php echo $users['email']; ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Date Of Birth</b> <a class="float-right"><?php echo date('d-M-Y', strtotime($users['dob'])); ?></a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Gender</b> <a class="float-right"><?php echo $users['gender']; ?></a>
                                        </li>
                                    </ul>
                                    <b>Address</b> <a class="float-right"><?php echo $users['address']; ?></a>
                                    <?php  ?>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header p-2">
                                    <h4>Edit Details</h4>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form id="frm" class="form-horizontal" method="post">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $users['name']; ?>">
                                                <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $users['id']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Contact</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control" id="number" name="number" placeholder="Contact" value="<?php echo $users['mobile']; ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email </label>
                                            <div class="col-sm-10">
                                                <input id="email" name="email" placeholder="Email" type="email" class="form-control" value="<?php echo $users['email']; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Date Of Birth </label>
                                            <div class="col-sm-10">
                                                <input id="dob" name="dob" type="date" class="form-control" value="<?php echo $users['dob']; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputGender" class="col-sm-2 col-form-label">Gender </label>
                                            <div class="col-sm-10">
                                                <select name="sex" id="sex" class="form-control">
                                                    <option value="Male" <?php echo ($users['gender'] == "Male") ? "Selected" : " " ?>>Male</option>
                                                    <option value="Female" <?php echo ($users['gender'] == "Female") ? "Selected" : " " ?>>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputGender" class="col-sm-2 col-form-label">Addhar</label>
                                            <div class="col-sm-10">
                                                <input id="addhar" name="addhar" type="text" class="form-control" value="<?php echo $users['addhar_no']; ?>" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputGender" class="col-sm-2 col-form-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                                                <input type="hidden" class="form-control" name="oldpassword" id="oldpassword" placeholder="Enter Password" value="<?php echo $users['password'] ?>">

                                                <input type="hidden" class="form-control" name="show_password" id="show_password" placeholder="Enter Password" value="<?php echo $users['show_password'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="address" id="address" placeholder="Address"><?php echo $users['address']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                    <!-- /.tab-content -->
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <? $this->load->view('admin/include/footer') ?>
    </div>
    <!-- ./wrapper -->

    <? $this->load->view('admin/include/js') ?>
    <script>
        $('#frm').submit(function(e) {


            e.preventDefault();
            $.ajax({
                url: '<?= base_url() ?>admin/common/update_profile',
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                success: function(data) {
                    //$('#empmsg').html(data);
                    //console.log(data);
                    var obj = JSON.parse(data);
                    //console.log(obj.icon);
                    //return false;
                    if (obj.icon == "error") {
                        var valid = '';
                        $.each(obj.text, function(i, item) {
                            valid += item;
                        });
                        Toast.fire({
                            icon: obj.icon,
                            html: valid,
                        })

                    } else {
                        Toast.fire({
                            icon: obj.icon,
                            text: obj.text
                        })
                        setTimeout(location.reload.bind(location), 3000);
                    }
                }
            });
        });
    </script>
</body>

</html>
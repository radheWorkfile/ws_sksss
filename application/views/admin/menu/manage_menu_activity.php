<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->session->userdata('company_name') ?> | Manage Menu</title>
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
                                <li class="breadcrumb-item active"><?php echo $breadcrumb; ?></li>
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
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#add_menu_modal" title='Click Add Menu' class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Add Sub Menu</a><br><br>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Sub Menu Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($menu as $mu => $men) { ?>
                                <tr>
                                    <td><?php echo $mu + 1; ?></th>
                                    <td><?php echo $men['sub_menu'] ?></td>
                                    <td><?php echo ($men['status'] == 1) ? "<span style='color:green'><b> <i class='fa fa-check'></i> Active</b></span>" : "<span style='color:red'><b> <i class='fa fa-times'></i> De-Active</b></span>"; ?></td>
                                    <td>
                                        <?php
                                        $status = ($men['status'] == 1) ?
                                            "<a style='color:green' href='javascript:void()' onClick='return changeStatus(\"" . $men['id'] . "\",\"0\",\"activity_menu\",\"admin/common/chageStatus\")' title='Click to Di-Active Menu'><b><i class='fa fa-check'></i> </b></a>"
                                            :
                                            "<a style='color:red'  href='javascript:void()'  onClick='return changeStatus(\"" . $men['id'] . "\",\"1\",\"activity_menu\",\"admin/common/chageStatus\")' title='Click to Active Menu'><b><i class='fa fa-times'></i> </b></a>";
                                        echo $status;
                                        ?>&nbsp;
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#update_menu_modal" onclick="update_menu(<?php echo $men['id'] ?>)" title='Click to Update News Details'><i class="fas fa-edit"></i></a>&nbsp;
                                        <a href="javascript:void(0);" onclick="deletedata(<?php echo $men['id'] ?>)" title='Click to Delete Menu Details'><i class="fas fa-trash-alt text-danger"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S.No.</th>
                                <th>Sub Menu Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Add News Modal Start -->
        <div class="modal fade" id="add_menu_modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Sub Menu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="add_menu" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="modal-body" id="accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <label>Sub Menu Title:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                                            </div>
                                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter Sub Menu Title">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="input-group mb-3">
                                            <textarea class="summernote" name="content" id="content">
                                                Enter Page content <strong>here</strong>
                                            </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <!-- Add Menu Modal End-->


        <!-- Update Menu Modal Start -->
        <div class="modal fade" id="update_menu_modal">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Update Menu</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="menu_updata" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div id="up_menu"></div>
                        </div>
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <input type="submit" class="btn btn-primary" name="submit" value="update">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- Update Menu Modal End-->


    <? $this->load->view('admin/include/footer') ?>
    </div>
    <!-- ./wrapper -->
    <? $this->load->view('admin/include/js') ?>
    <script>
        $('#add_menu').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= base_url() ?>admin/menu/save_data_activity',
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                dataType: 'json',
                success: function(data) {
                    if (data.icon == "error") {
                        var valid = '';
                        $.each(data.text, function(i, item) {
                            valid += item;
                        });
                        Toast.fire({
                            icon: data.icon,
                            html: valid,
                        })

                    } else {
                        Toast.fire({
                            icon: data.icon,
                            text: data.text
                        })
                        //setTimeout(location.reload.bind(location), 3000);
                        window.location.reload(true);
                    }
                }
            });
        });

        function update_menu(id) {
            $.ajax({
                url: '<?= base_url() ?>' + 'admin/menu/get_menu_activity',
                type: "POST",
                data: {
                    'id': id
                },
                success: function(data) {
                    $('#up_menu').html(data);
                },
            });
        }

        $('#menu_updata').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= base_url() ?>admin/menu/update_menu_activity',
                type: "POST",
                data: new FormData(this),
                processData: false,
                contentType: false,
                cache: false,
                async: false,
                dataType: 'json',
                success: function(data) {
                    if (data.icon == "error") {
                        var valid = '';
                        $.each(data.text, function(i, item) {
                            valid += item;
                        });
                        Toast.fire({
                            icon: data.icon,
                            html: valid,
                        })

                    } else {
                        Toast.fire({
                            icon: data.icon,
                            text: data.text
                        })
                        //setTimeout(location.reload.bind(location), 3000);
                        window.location.reload(true);
                    }
                }
            });
        });

        function deletedata(id) {
            if (confirm("Do You Want To Delete")) {
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>' + 'admin/menu/delete_menu_activity',
                    data: {
                        'id': id,
                    },
                    success: function(data) {
                        var obj = JSON.parse(data);
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
                            //setTimeout(location.reload.bind(location), 3000);
                            window.location.reload(true);
                        }
                    }
                })
            }
        }
    </script>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->session->userdata('company_name') ?> | Manage Media</title>
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
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#add_media_modal" title='Click Add Media' class="btn btn-primary float-right"> <i class="fas fa-plus"></i> Add Media</a><br><br>
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Title</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($media as $md => $med) { ?>
                                <tr>
                                    <td><?php echo $md + 1; ?></th>
                                    <td><?php echo $med['title'] ?></td>
                                    <td><?php echo ($med['status'] == 1) ? "<span style='color:green'><b> <i class='fa fa-check'></i> Active</b></span>" : "<span style='color:red'><b> <i class='fa fa-times'></i> De-Active</b></span>"; ?></td>
                                    <td>
                                        <?php
                                        $status = ($med['status'] == 1) ?
                                            "<a style='color:green' href='javascript:void()' onClick='return changeStatus(\"" . $med['id'] . "\",\"0\",\"media\",\"admin/common/chageStatus\")' title='Click to Di-Active News'><b><i class='fa fa-check'></i> </b></a>"
                                            :
                                            "<a style='color:red'  href='javascript:void()'  onClick='return changeStatus(\"" . $med['id'] . "\",\"1\",\"media\",\"admin/common/chageStatus\")' title='Click to Active News'><b><i class='fa fa-times'></i> </b></a>";
                                        echo $status;
                                        ?>&nbsp;
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_media_modal" title='Click View Media' onclick="view(<?php echo $med['id'] ?>)" title='Click to View Media Details'><i class="fas fa-eye text-success"></i></a>&nbsp;
                                        <a href="javascript:void(0);" onclick="deletedata(<?php echo $med['id'] ?>)" title='Click to Delete Media Details'><i class="fas fa-trash-alt text-danger"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S.No.</th>
                                <th>Title</th>
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

        <!-- Add Media Modal Start -->
        <div class="modal fade" id="add_media_modal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Add Media</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="add_media" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <div class="modal-body" id="accordion">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <label>Media Title:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-keyboard"></i></span>
                                            </div>
                                            <input type="text" name="title" id="title" class="form-control" placeholder="Enter News Title">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label>Media Image:</label>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-image"></i></span>
                                            </div>
                                            <input type="file" name="image" id="image" class="form-control">
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
        <!-- Add Media Modal End-->


        <!-- View Media Modal Start -->
        <div class="modal fade" id="view_media_modal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Media Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="view_medias"></div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <!-- View Media Modal End-->


    <? $this->load->view('admin/include/footer') ?>
    </div>
    <!-- ./wrapper -->
    <? $this->load->view('admin/include/js') ?>
    <script>
        $('#add_media').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '<?= base_url() ?>admin/media/save_data',
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

        function view(id) {
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>' + 'admin/media/view_media',
                data: {
                    'id': id,
                },
                success: function(data) {
                    $('#view_medias').html(data)
                }
            })
        }

        function deletedata(id) {
            if (confirm("Do You Want To Delete This Image ?")) {
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>' + 'admin/media/delete_media',
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
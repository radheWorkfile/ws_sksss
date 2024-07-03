<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->session->userdata('company_name') ?> | Manage Enquiry</title>
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
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($enquiry as $eq => $equ) { ?>
                                <tr>
                                    <td><?php echo $eq + 1; ?></th>
                                    <td><?php echo $equ['name'] ?></td>
                                    <td><?php echo $equ['mobile'] ?></td>
                                    <td><?php echo $equ['email'] ?></td>
                                    <td>
                                        <a href="javascript:void(0);" data-toggle="modal" data-target="#view_enquiry_modal" onclick="view(<?php echo $equ['id'] ?>)" title='Click to View Enquiry Details'><i class="fas fa-eye text-success"></i></a>&nbsp;
                                        <a href="javascript:void(0);" onclick="deletedata(<?php echo $equ['id'] ?>)" title='Click to Delete Enquiry Details'><i class="fas fa-trash-alt text-danger"></i></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
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

        <!-- View Enquiry Modal Start -->
        <div class="modal fade" id="view_enquiry_modal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Enquiry Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="view_enquirys"></div>
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
    <!-- View Enquiry Modal End-->


    <? $this->load->view('admin/include/footer') ?>
    </div>
    <!-- ./wrapper -->
    <? $this->load->view('admin/include/js') ?>
    <script>

        function view(id) {
            $.ajax({
                type: 'POST',
                url: '<?= base_url() ?>' + 'admin/enquiry/view_enquiry',
                data: {
                    'id': id,
                },
                success: function(data) {
                    $('#view_enquirys').html(data)
                }
            })
        }

        function deletedata(id) {
            if (confirm("Do You Want To Delete This Image ?")) {
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>' + 'admin/enquiry/delete_enquiry',
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
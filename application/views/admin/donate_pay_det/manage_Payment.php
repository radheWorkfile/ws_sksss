<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->session->userdata('company_name') ?> | Manage Payment Data</title>
    <? $this->load->view('admin/include/css') ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                <li class="breadcrumb-item active">Donate Payment Details</li>
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
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Date</th>
                                <th>Donate Payment</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($donation as $d => $dPD) { ?>
                                <tr>
                                    <td><?php echo $d + 1; ?></th>
                                    <td><?php echo $dPD['fname'] ?></td>
                                    <td><?php echo $dPD['phone'] ?></td>
                                    <td><?php echo $dPD['email'] ?></td>
                                    <td><?php echo $dPD['data'] ?></td>
                                    <td><?php echo $dPD['cash'] ?></td>
                                    <td>
                                    <a href="javascript:void(0);" onclick="deletedata(<?php echo $dPD['id'] ?>)" title='Click to Delete Gallery Details'><i class="fas fa-trash-alt text-danger"></i></a>
                                    &nbsp;&nbsp;&nbsp;
                                    <a href="javascript:void(0);" onclick="viewData(<?php echo $dPD['id'] ?>)" title='Click to Delete Gallery Details'data-toggle="modal" data-target="#view_modal"><i class="fas fa-eye text-success"></i></a>
                                    </td> 
                                </tr>
                            <?php } ?>
                        </tbody>
                     
                    </table>
                </div>

                <!-- /.container-fluid -->
            </section>



        <!------------------------------------------- model sectioni start ------------------------ -->

        <!-- Button trigger modal -->
        <!-- data-bs-toggle="modal" data-bs-target="#staticBackdrop" -->

    <!-- View Career Modal Start -->
    <div class="modal fade" id="view_modal">
            <div class="modal-dialog modal-md">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Payment Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="viewPayDet"></div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" name="submit" value="Payment Details">
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->


        <!------------------------------------------- model sectioni end ------------------------ -->
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /.modal -->
    <!-- View Gallery Modal End-->


    <? $this->load->view('admin/include/footer') ?>
    </div>
    <!-- ./wrapper -->
    <? $this->load->view('admin/include/js') ?>

    <script>
        // viewData

 

        function viewData(id) {
            $.ajax({
                // url: '<?= base_url() ?>' + 'admin/career/get_career_enquiry',
                url: '<?= base_url() ?>' + 'admin/donate_pay/viewDAta',
                type: "POST",
                data: {
                    'id': id
                },
                success: function(data) {
                    $('#viewPayDet').html(data);
                },
            });
        }



        function deletedata(id) {
            if (confirm("Do You Want To Delete")) {
                $.ajax({
                    type: 'POST',
                    url: '<?= base_url() ?>' + 'admin/donate_pay/delete_dAta',
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
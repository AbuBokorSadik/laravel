<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Advanced form elements</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
</head>

<body>

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- /.col (left) -->
                    <div class="col-md-6">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Date picker</h3>
                            </div>
                            <div class="card-body">
                                <!-- Date and time range -->
                                <div class="form-group">
                                    <label>Date and time range:</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="far fa-clock"></i></span>
                                        </div>
                                        <input type="text" class="form-control float-right" id="reservationtime">
                                    </div>
                                </div>
                            </div>
                            <!-- /.col (right) -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <!-- <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <!-- Select2 -->
    <!-- <script src="../../plugins/select2/js/select2.full.min.js"></script> -->
    <!-- Bootstrap4 Duallistbox -->
    <!-- <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script> -->
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <!-- <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script> -->
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <!-- <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script> -->
    <!-- Bootstrap Switch -->
    <!-- <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script> -->
    <!-- BS-Stepper -->
    <!-- <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script> -->
    <!-- dropzonejs -->
    <!-- <script src="../../plugins/dropzone/min/dropzone.min.js"></script> -->
    <!-- AdminLTE App -->
    <!-- <script src="../../dist/js/adminlte.min.js"></script> -->
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="../../dist/js/demo.js"></script> -->
    <!-- Page specific script -->
    <script>
        $(function() {
            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'DD/MM/YYYY hh:mm A'
                }
            })
        })
    </script>
</body>

</html>
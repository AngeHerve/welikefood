<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include ('slide.php') ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include ('topbar.php') ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="hl3 mb-2 text-gray-800">Listes des Posts</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Posts</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Titre</th>
                                            <th>type</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>like</th>
                                            <th>dislike</th>
                                            <th>nomb. comm.</th>
                                            <th>date pub.</th>
                                            <th>Publicateur</th>
                                            <th>ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Titre</th>
                                            <th>type</th>
                                            <th>Image</th>
                                            <th>Description</th>
                                            <th>like</th>
                                            <th>dislike</th>
                                            <th>nomb. comm.</th>
                                            <th>date pub.</th>
                                            <th>Publicateur</th>
                                            <th>ACTIONS</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php 
                                    include"connect.php"; 
                                    $query_pag_data = "SELECT * from publications";
                                    $result_pag_data = mysqli_query($conn, $query_pag_data);
                                    while($row = mysqli_fetch_assoc($result_pag_data)) {
                                        $id = $row['id'];
                                        $id_users = $row['id_user'];

                                    $query_pag_data1 = "SELECT * from utilisateurs where id = '$id_users' ";
                                    $result_pag_data1 = mysqli_query($conn, $query_pag_data1);
                                    while($hari = mysqli_fetch_assoc($result_pag_data1)) {

                                       
                                    $sql = "SELECT*FROM `avis` WHERE publication_id = '$id' AND avis = '1'";
                                    $result = mysqli_query($conn, $sql);
                                    $count1 = mysqli_num_rows($result);

                                    $sql2 = "SELECT*FROM `avis` WHERE publication_id = '$id' AND avis = '0'";
                                    $result1 = mysqli_query($conn, $sql2);
                                    $count2 = mysqli_num_rows($result1);

                                    $sql3 = "SELECT*FROM `commentaires` WHERE publication_id = '$id'";
                                    $result3 = mysqli_query($conn, $sql3);
                                    $count3 = mysqli_num_rows($result3);
                                    ?>
                                        <tr>
                                            <td><?php echo $row['titre']; ?></td>
                                            <td><?php echo $row['fonction']; ?></td>
                                            <td><img style="height:55px;width:100px;" src="../<?=$row['imagepub']?>" alt=""></td>
                                            <td><?php echo $row['texte']; ?></td>
                                            <td><?php echo $count1; ?></td>
                                            <td><?php echo $count2; ?></td>
                                            <td><?php echo $count3; ?></td>
                                            <td><?php echo $row['datepub']; ?></td>
                                            <td><?php echo $hari['prenoms']; ?></td>
                                            
                                            <td>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <a class="btn-sm btn-danger" href="delete_posts.php?id='<?php echo $row['id']; ?>'">SUPPRIMER</a>
                                                    </div>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    <?php }} ?>  
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Welikefood 2023</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.php">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>
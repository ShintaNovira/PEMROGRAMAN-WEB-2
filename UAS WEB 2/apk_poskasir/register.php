<!DOCTYPE html>
<html>
<head>
    <title>Registrasi</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>


<body class="bg-gradient-primary">
    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-md-5 mt-5">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="p-5">
                            <div class="text-center">
                        <h4 class="h4 text-gray-900 mb-4"><b>REGISTRASI AKUN</b></h4>
                        </div>

                            <form action="registrasi_proses.php" method="POST">
                                <div class="form-group">
                                    <input id="id" type="text" class="form-control form-control-user" name="id"
                                        placeholder="ID" autofocus >
                                </div>
                                <div class="form-group">
                                    <input id="user" type="text" class="form-control form-control-user" name="user"
                                        placeholder="Username" autofocus >
                                </div>
                                <div class="form-group">
                                    <input id="pass" type="password" class="form-control form-control-user" name="pass"
                                        placeholder="Password" >
                                </div>
                                <div class="form-group">
                                    <input id="nm_member" type="text" class="form-control form-control-user" name="nm_member"
                                        placeholder="Nama" autofocus >
                                </div>
                                <div class="form-group">
                                    <input id="alamat_member" type="text" class="form-control form-control-user" name="alamat_member"
                                        placeholder="Alamat" autofocus >
                                </div>
                                <div class="form-group">
                                    <input id="telepon" type="text" class="form-control form-control-user" name="telepon"
                                        placeholder="Telepon" autofocus >
                                </div>
                                <div class="form-group">
                                    <input id="email" type="text" class="form-control form-control-user" name="email"
                                        placeholder="Email" autofocus >
                                </div>
                                <div class="form-group">
                                    <input id="nik" type="text" class="form-control form-control-user" name="nik"
                                        placeholder="NIK" autofocus >
                                </div>
                                <div class="form-group">
                                    <input id = "foto" type="file" name="foto" class="form-control form-control-user"
                                        placeholder="Foto" autofocus >
                                </div>
                                
                                <button class="btn btn-primary btn-block" type="submit" value="Next"><i
                                        class="fa fa-lock" ></i>
                                    REGISTRASI</button>
                            </form>
                            
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    


</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - M-Store Admin</title>
    <link rel="icon" href="../assets/img/logo.png">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-5 mt-5">
                                <div class="card-header bg-dark rounded-2 text-white">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">
                                    <form onsubmit="validateLogin()">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="username" type="username" placeholder="Username" required />
                                            <label for="username">Username</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputPassword" type="password" placeholder="Password" require />
                                            <label for="inputPassword">Password</label>
                                        </div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                            <label class="form-check-label" for="inputRememberPassword">Remember Password</label>
                                        </div>
                                        <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                            <a class="small text-dark" href="password.html">Lupa Password?</a>
                                            <button class="btn btn-dark" type="submit">Login</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer bg-dark text-center py-3">
                                    <div class="small"><a href="daftar.php" class="text-white">Buat Akun? Daftar!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 mt-auto bg-dark shadow-lg">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; M-Cloth Store 2023</div>
                        <div>
                            <a href="#" class="text-white">Privacy Policy</a>
                            &middot;
                            <a href="#" class="text-white">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="../assets/js/scripts.js"></script>
    <script>
        function validateLogin() {
            event.preventDefault();

            let user = document.getElementById("username").value;
            let password = document.getElementById("inputPassword").value;

            if (user == "admin" && password == "123") {
                location.replace("admin_dashboard.php");
                alert("Selamat Datang Admin M-Store!");
            } else {
                alert("Email & Password salah!");
            }
        }
    </script>

</body>

</html>
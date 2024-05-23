<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-custom {
            background: linear-gradient(90deg, rgba(0,0,0,1) 0%, rgba(63,94,251,1) 50%, rgba(252,70,107,1) 100%);
        }
        .vh-100 {
            height: 100vh;
        }
    </style>
</head>
<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Register</h2>
                                <p class="text-white-50 mb-5">Please enter your details to sign up!</p>
                                <form action="{{ url('register') }}" method="POST">
                                    @csrf
                                    <div class="form-outline form-white mb-4">
                                        <input type="text" name="name" class="form-control form-control-lg" id="typeNameX" />
                                        <label class="form-label" for="typeNameX">Name</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="email" name="email" class="form-control form-control-lg" id="typeEmailX" />
                                        <label class="form-label" for="typeEmailX">Email</label>
                                    </div>
                                    <div class="form-outline form-white mb-4">
                                        <input type="password" name="password" class="form-control form-control-lg" id="typePasswordX" />
                                        <label class="form-label" for="typePasswordX">Password</label>
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Register</button>
                                </form>
                                <div class="d-flex justify-content-center text-center mt-4 pt-1">
                                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                                </div>
                            </div>
                            <div>
                                <p class="mb-0">Already have an account? <a href="{{ url('/loginstaff') }}" class="text-white-50 fw-bold">Log In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js"></script>
</body>
</html>

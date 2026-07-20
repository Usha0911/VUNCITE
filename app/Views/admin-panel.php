<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="assets/js/script.js">
<!-- Google Font -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<style>
    /*=========================
    Registration Form
==========================*/
.heading-form{
    text-align: center;
}
.auth-card{
    background:#fff;
    border-radius:20px;
    padding:40px;
    box-shadow:0 20px 50px rgba(0,0,0,.15);
    width:560px;
    position: relative;
    top:230px;
    left: 400px;
}

.auth-card h3{
    color:#0B1F3A;
    font-weight:700;
    margin-bottom:8px;
}

.auth-card p{
    color:#6b7280;
    margin-bottom:30px;
}

/* Labels */

.form-label{
    font-weight:600;
    color:#0B1F3A;
    margin-bottom:8px;
}

/* Input Groups */

.input-group{
    margin-bottom:18px;
}

.input-group-text{
    background:#F8F9FC;
    border:1px solid #d9dee8;
    border-right:none;
    color:#0B1F3A;
    width:50px;
    justify-content:center;
}

.form-control,
.form-select{

    height:50px;
    border:1px solid #d9dee8;
    border-left:none;
    box-shadow:none;

}

.form-control:focus,
.form-select:focus{

    border-color:#D4AF37;
    box-shadow:none;

}

.form-control::placeholder{

    color:#adb5bd;

}

/* Password Eye */

.password-toggle{

    cursor:pointer;
    background:#fff;
    border-left:none;
    width:50px;
    justify-content:center;

}

.password-toggle:hover{

    background:#F8F9FC;

}

/* Checkbox */

.form-check{

    margin-top:10px;

}

.form-check-input{

    border-color:#D4AF37;

}

.form-check-input:checked{

    background:#D4AF37;
    border-color:#D4AF37;

}

.form-check-label{

    color:#555;

}

.form-check-label a{

    color:#D4AF37;
    text-decoration:none;

}

.form-check-label a:hover{

    color:#0B1F3A;

}

/* Register Button */

.btn-login{

    width:100%;
    height:52px;
    border:none;
    border-radius:10px;
    background:linear-gradient(135deg,#0B1F3A,#153C6A);
    color:#fff;
    font-size:16px;
    font-weight:600;
    transition:.3s;

}

.btn-login i{

    margin-right:8px;

}

.btn-login:hover{

    color:#D4AF37;
    transform:translateY(-3px);
    box-shadow:0 12px 30px rgba(11,31,58,.30);

}

/* Mobile */

@media(max-width:768px){

.auth-card{

    padding:25px;

}

}
</style>
</head>
<body>

    <div class="container">

    
  <div class="auth-card">

    <form action="<?= base_url('registerProcess') ?>" method="post">

        <div class="row">

<h1 class="heading-form">Register</h1>


            <!-- Full Name -->
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Full Name
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-person"></i>
                    </span>
                    <input type="text"
                           name="name"
                           class="form-control"
                           placeholder="Enter Full Name"
                           required>
                </div>
            </div>

            <!-- Username -->
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Username
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-person-circle"></i>
                    </span>
                    <input type="text"
                           name="username"
                           class="form-control"
                           placeholder="Choose Username"
                           required>
                </div>
            </div>

            <!-- Email -->
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Email Address
                </label>
                <div class="input-group">
                    <span class="input-group-text">
                        <i class="bi bi-envelope"></i>
                    </span>
                    <input type="email"
                           name="email"
                           class="form-control"
                           placeholder="Enter Email"
                           required>
                </div>
            </div>

       

        
          

            <!-- Password -->
            <div class="col-md-6 mb-3">
                <label class="form-label">
                    Password
                </label>

                <div class="input-group">

                    <span class="input-group-text">
                        <i class="bi bi-lock"></i>
                    </span>

                    <input type="password"
                           class="form-control"
                           id="password"
                           name="password"
                           placeholder="Create Password"
                           required>

                    <span class="input-group-text password-toggle">
                        <i class="bi bi-eye"></i>
                    </span>

                </div>
            </div>


        </div>

        <!-- Terms -->

        <div class="form-check mb-4">

            <input class="form-check-input"
                   type="checkbox"
                   id="terms"
                   required>

            <label class="form-check-label" for="terms">
                I agree to the
                <a href="#">Terms & Conditions</a>
            </label>

        </div>

        <!-- Register Button -->

        <button type="submit" class="btn btn-login">

            <i class="bi bi-person-plus-fill"></i>
            Create Account

        </button>

    </form>

</div>
</div>
</body>
</html>
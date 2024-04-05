<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Welcome to Vaibhe's Indian Grill </title>

    <!-- CSS -->
    <link rel="stylesheet" href="styles/main.css">

    <!--Favicon  -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">



    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    <div class="nav">
        <div class="logo">
        <i class="fa-solid fa-utensils"></i>
        </div>
        <div class="header">
            <h2> Vaibhe's Indian Grill</h3>
        </div>
      
    </div>

    <section class="container forms">

        <div class="form login">
            <div class="form-content">

                <header>Login</header>
                
                <form action="loginconnection.php" method="post">
                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="loginemail" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" placeholder="Password" class="password" name="loginpass" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>

                    <div class="field button-field">
                        <button>Login</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                </div>
            </div>

        </div>

        <!-- Signup Form -->

        <div class="form signup">
            <div class="form-content">
                <header>Signup</header>
                <form action="connect.php" method="post">

                    <div class="field input-field">
                        <input type="text" placeholder="Firstname" class="input" name="firstname" required>
                    </div>

                    <div class="field input-field">
                        <input type="text" placeholder="Lastname" class="input" name="lastname" required>
                    </div>

                    <div class="field input-field">
                        <input type="number" placeholder="Contact" class="input" name="number" required>
                    </div>

                    <div class="field input-field">
                        <input type="email" placeholder="Email" class="input" name="email" required>
                    </div>



                    <div class="field input-field">
                        <input type="password" placeholder=" Password" class="password" name="password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <div class="field button-field">
                        <button>Signup</button>
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                </div>
            </div>




        </div>
    </section>

</body>
<!-- JavaScript -->
<script src="js/main.js"></script>

</html>
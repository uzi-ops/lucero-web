<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="sakamoto.png" type="image/png">
    <style>
     *{
        padding: 0;
        margin: 0;  
    }

    body {
        width: 100%;
        height: 100vh;
        background-image: url('../../../login-and-register-form/img.jpg'); /* Replace with your image URL */
        background-size: cover; /* Ensures the image covers the entire screen */
        background-repeat: no-repeat; /* Prevents tiling of the image */
        background-position: center; /* Centers the image */
    }

    .auth-container {
        width: 400px;
        height: 400px;
        position: absolute;
        top: 50%;
        right: 10%; /* Adjust the distance from the right side */
        transform: translateY(-50%);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border: 1px solid rgb(255, 0, 0);
        border-radius: 12px;
        padding: 20px;
        color: white;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        background: rgba(8, 0, 80, 0.13);
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }

    .gradient-btn {
        background: linear-gradient(45deg, #04003f, #fa0000);
        color: white;
        border: none;
        transition: background 0.3s ease;
    }

    .gradient-btn:hover {
        background: linear-gradient(45deg, #fa0000, #0c0052);
    }
</style>

    </style>
    
</head>
<body>
        <div class="container mt-5">
            <div class="auth-container">
                <ul class="nav nav-tabs" id="authTabs" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login-tab-pane" type="button" role="tab" aria-controls="login-tab-pane" aria-selected="true">Login</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="signup-tab" data-bs-toggle="tab" data-bs-target="#signup-tab-pane" type="button" role="tab" aria-controls="signup-tab-pane" aria-selected="false">Sign Up</button>
                    </li>
                </ul>
                <div class="tab-content mt-4" id="authTabsContent">
                    <!-- Login Form -->
                    <div class="tab-pane fade show active" id="login-tab-pane" role="tabpanel" aria-labelledby="login-tab">
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control" id="loginEmail" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="loginPassword" placeholder="Enter your password">
                            </div>
                            <button type="submit" class="btn gradient-btn w-100">Login</button>
                        </form>
                    </div>
                    <!-- Sign Up Form -->
                    <div class="tab-pane fade" id="signup-tab-pane" role="tabpanel" aria-labelledby="signup-tab">
                        <form>
                            <div class="mb-3">
                                <label for="signupName" class="form-label">Full Name</label>
                                <input type="text" class="form-control" id="signupName" placeholder="Enter your full name">
                            </div>
                            <div class="mb-3">
                                <label for="signupEmail" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="signupEmail" placeholder="Enter your email">
                            </div>
                            <div class="mb-3">
                                <label for="signupPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="signupPassword" placeholder="Create a password">
                            </div>
                            <button type="submit" class="btn gradient-btn w-100">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

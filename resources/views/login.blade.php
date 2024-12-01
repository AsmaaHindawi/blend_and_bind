@extends('layouts.app')

@section('title', 'Login & Sign Up')

@section('content')
<div class="d-flex align-items-center justify-content-center" style="min-height: 100vh; background: linear-gradient(135deg, #dccc40d6 50%, #ded5b6e8 50%);">
    <div class="login-box d-flex shadow-lg" style="background: #fff; border-radius: 10px; overflow: hidden; width: 800px; height: 500px;">
        <!-- Image Section -->
        <div class="image-section" style="flex: 1; background: url('{{ asset('images/loginimage.jpg') }}') no-repeat center center; background-size: cover;"></div>

        <!-- Form Section -->
        <div class="form-section p-4" style="flex: 1.2; display: flex; flex-direction: column; justify-content: center;">
            <!-- Login Form -->
            <div id="login-form">
                <h2 class="text-center mb-4">Welcome Back!</h2>
                <p class="text-center text-muted">Please login to continue.</p>
                @if($errors->any())
                    <p class="text-danger text-center">{{ $errors->first() }}</p>
                @endif
                <form action="{{ url('login') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="background: none; border: none; color: #FFD700;">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="email" id="login-email" name="email" class="form-control" placeholder="Email" required style="color: black !important; border: none; box-shadow: none;">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="background: none; border: none; color: #FFD700;">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" id="login-password" name="password" class="form-control" placeholder="Password" required style="color: black !important; border: none; box-shadow: none;">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </div>
                    <p class="text-center mt-3">
                        Don't have an account? <a href="javascript:void(0);" id="show-signup">Sign Up</a>
                    </p>
                </form>
            </div>

            <!-- Signup Form -->
            <div id="signup-form" style="display: none; overflow-y: auto; max-height: 100%;">
                <h2 class="text-center mb-4" style="font-size: 20px;">Join Us!</h2>
                <p class="text-center text-muted" style="font-size: 14px;">Create your account to get started.</p>
                <form action="{{ url('register') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="background: none; border: none; color: #FFD700;">
                            <i class="fas fa-user"></i>
                        </span>
                        <input type="text" id="signup-username" name="username" class="form-control" placeholder="Username" required style="color: black !important; border: none; box-shadow: none; height: 30px; font-size: 14px;">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="background: none; border: none; color: #FFD700;">
                            <i class="fas fa-envelope"></i>
                        </span>
                        <input type="email" id="signup-email" name="email" class="form-control" placeholder="Email" required style="color: black !important; border: none; box-shadow: none; height: 30px; font-size: 14px;">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="background: none; border: none; color: #FFD700;">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" id="signup-password" name="password" class="form-control" placeholder="Password" required style="color: black !important; border: none; box-shadow: none; height: 30px; font-size: 14px;">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" style="background: none; border: none; color: #FFD700;">
                            <i class="fas fa-lock"></i>
                        </span>
                        <input type="password" id="signup-password-confirm" name="password_confirmation" class="form-control" placeholder="Confirm Password" required style="color: black !important; border: none; box-shadow: none; height: 30px; font-size: 14px;">
                    </div>
                    <input type="hidden" name="role" value="user">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100" style="padding: 6px;">Sign Up</button>
                    </div>
                    <p class="text-center mt-2" style="font-size: 14px;">
                        Already have an account? <a href="javascript:void(0);" id="show-login">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Script to toggle between login and signup forms
    document.getElementById('show-signup').addEventListener('click', function () {
        document.getElementById('signup-form').style.display = 'block';
        document.getElementById('login-form').style.display = 'none';
    });

    document.getElementById('show-login').addEventListener('click', function () {
        document.getElementById('login-form').style.display = 'block';
        document.getElementById('signup-form').style.display = 'none';
    });
</script>

<style>
    .input-group-text i {
        color: #FFD700; /* Yellow icons */
        font-size: 1.2rem;
    }

    .form-control {
        border: none !important;
        box-shadow: none !important;
        color: black !important;
    }

    .btn-primary {
        background-color: #FFD700;
        border: none;
    }

    .btn-primary:hover {
        background-color: #FFC107;
    }

    a {
        color: #0056b3;
        text-decoration: none;
    }

    a:hover {
        text-decoration: underline;
    }

    #signup-form {
        max-height: 350px;
        overflow-y: auto;
    }

</style>
@endsection

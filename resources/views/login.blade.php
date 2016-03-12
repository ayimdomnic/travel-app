@extends('layouts.master')
@section('content')
<section class="awe-parallax login-page-demo">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register-page__content">
                    <div class="content-title">
                        <span>Welcome back</span>
                        <h2>EXPLORER!</h2>
                    </div>
                    <form>
                        <div class="form-item">
                            <label>Email</label>
                            <input type="email">
                        </div>
                        <div class="form-item">
                            <label>Password</label>
                            <input type="password">
                        </div>
                        <a href="#" class="forgot-password">Forgot Password</a>
                        <div class="form-actions">
                            <input type="submit" value="Log In">
                        </div>
                    </form>
                    <div class="login-register-link">
                        Dont have account yet? <a href="register.html">Register HERE</a>
                    </div>
                </div>
            </div>
        </section>
@endsection
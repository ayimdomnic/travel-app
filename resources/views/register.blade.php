@extends('layouts.master')

@section('content')

	<section class="awe-parallax register-page-demo">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register-page__content">
                    <div class="content-title">
                        <span>Don’t stay at home</span>
                        <h2>JOIN US !</h2>
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
                        <div class="form-item">
                            <label>Confirm password</label>
                            <input type="password">
                        </div>
                        <a href="#" class="terms-conditions">By registering, you accept terms &amp; conditions</a>
                        <div class="form-actions">
                            <input type="submit" value="Register">
                        </div>
                    </form>
                    <div class="login-register-link">
                        Already have Account? <a href="/login">Log in HERE</a>
                    </div>
                </div>
            </div>
        </section>



@endsection
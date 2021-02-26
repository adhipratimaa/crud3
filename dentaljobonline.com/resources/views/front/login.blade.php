@extends('layouts.front')
@section('content')
    <!-- login-form -->
    <section class="login-form mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="poppin-bold text-blue">Login</h4>
                    <p class="text-sentence">Login With your Existing Account</p>
                </div>
            </div>
            <div class="form-box mt-2">
                <div class="form row justify-content-center mt-3">
                    <div class="from-group col-sm-12 col-md-6 mt-4">
                        <input type="text" class="form-control" placeholder="Email" />
                    </div>
                    <div class="from-group col-sm-12 col-md-6 mt-4">
                        <input type="text" class="form-control" placeholder="Password">
                    </div>
                    <div class="from-group col-sm-12 col-md-8 mt-4">
                        <input type="checkbox" name="remember-password">
                        <label for="remember-password">Remember Password</label>

                    </div>
                    <div class="from-group col-sm-12 col-md-4 mt-4">
                        <button class="d-btn  bg-green "> Login</button>
                        <p for="forget-password" class="float-lg-right"><a href="">Forget Your Password ?</a> </p>
                    </div>
                </div>
                <div class="dont-have-acc">
                    <h6>Don't Have An Account Yet?</h6>
                    <button class="d-btn  bg-green "> Register Now</button>
                </div>
            </div>


        </div>
    </section>
    
    @endsection
@extends('layouts.front')
@section('content')
    <!-- login-form -->
    <section class="student-registeration-form mt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="poppin-bold text-blue">Register</h4>
                    <p class="text-sentence">Creat Your Free Account</p>
                </div>
            </div>
            <div class="form-box mt-2">
                <div class="form row justify-content-center mt-3" method="POST">
                    <div class="from-group col-sm-12 mt-4">
                        <input type="text" class="form-control" placeholder="*Full Name" required/>
                    </div>
                    <div class="from-group col-sm-12 mt-4">
                        <input type="text" class="form-control" placeholder="*Email" required/>
                    </div>
                    <div class="from-group col-sm-12 mt-4">
                        <input type="text" class="form-control" placeholder="*Mobile Number" required/>
                    </div>
                    <div class="from-group col-sm-12 mt-4">
                        <input type="text" class="form-control" placeholder="*City/ Town" required/>
                    </div>
                    <div class="from-group col-sm-12 mt-4">
                        <input type="text" class="form-control" placeholder="*Role interested in" required/>
                    </div>
                    <div class="from-group col-sm-12 mt-4">
                        <input type="text" class="form-control" placeholder="*GDC Number(optional)" required/>
                    </div>
                    <div class="from-group col-sm-12 mt-4">
                        <input type="text" class="form-control" placeholder="*Preferred time to call" required/>
                    </div>
                    <div class="from-group col-sm-12 mt-4">
                        <div class="terms-condition">
                            <input type="checkbox" name="terms-condition">
                            <label for="remember-password">Yes, I agree to the processing of my personal data in line with the school's Privacy Policy</label>
                        </div>
                    </div>
                    <div class="from-group col-sm-12 mt-4">
                        <button class="d-btn  bg-green " type="submit"> Register</button>
                    </div>
                </div>
            </div>


        </div>
    </section>
  
    @endsection
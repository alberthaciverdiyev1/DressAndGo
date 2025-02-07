@extends('main')

@section('content')
    <!--====== Login Page ======-->
    <section class="contact-section pt-75 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-img-text text-center mb-50 d-none d-lg-block" data-aos="fade-left"
                         data-aos-delay="15" data-aos-duration="1500">
                        <img src="{{asset('images/contact/text-img.png')}}" alt="Text">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-wrapper p-r z-1 mb-50" data-aos="fade-right" data-aos-delay="10"
                         data-aos-duration="1000">
                        <div class="shape shape-one"><span><img src="{{asset('images/shape/cl-line.png')}}"
                                                                alt="Line Shape"></span></div>
                        <h3>Login</h3>
                        <form class="pesco-contact-form">
                            <div class="row">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form_control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="form_control" name="password" required>
                                </div>
                                <div class="form-group d-flex align-items-center mb-3">
                                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                                    <label for="remember" class="mb-0 ml-5 ">Remember Me</label>
                                </div>
                                <div class="form-group w-100">
                                    <button class="theme-btn style-one w-100">Login</button>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <p>Don't have an account? <a href="{{ route('register') }}">Sign up here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Login Section ======-->
@endsection

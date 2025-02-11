@extends('main')

@section('content')
    <!--====== Login Page ======-->
    <section class="contact-section pt-75 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="col-lg-5">
                    <div class="contact-img-text text-center mb-50 d-none d-lg-block" data-aos="fade-left"
                         data-aos-delay="15" data-aos-duration="1500">
                        <img src="{{asset('images/contact/text-img.png')}}" alt="Text">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-wrapper p-r z-1 mb-50" data-aos="fade-right" data-aos-delay="10"
                         data-aos-duration="1000">
                        <div class="shape shape-one"><span><img src="{{asset('images/shape/cl-line.png')}}"
                                                                alt="Line Shape"></span></div>
                        <h3>Login</h3>
                        <form class="pesco-contact-form" action="{{route('login')}}" method="post" ">
                            <div class="row">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form_control" name="email" id="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="form_control" name="password" id="password" required>
                                </div>
                                <div class="form-group d-flex align-items-center mb-3">
                                    <input type="checkbox" name="remember" id="remember" class="mr-2">
                                    <label for="remember" class="mb-0 ml-5 ">Remember Me</label>
                                </div>
                                <div class="form-group w-100">
                                    <button  type="submit" class="theme-btn style-one w-100">Login</button>
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

@push('script')
    <script>
        $(document).ready(function () {
            $('#loginBtn').on('click', function (e) {
                e.preventDefault();

                var email = $('#email').val();
                var password = $('#password').val();
                var remember = $('#remember').is(':checked') ? 1 : 0;
                $.ajax({
                    url: '{{ route('login') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        email: email,
                        password: password,
                        remember: remember
                    },
                    success: function (response) {
                        if (response.success) {
                            window.location.href = response.redirect_url;
                        } else {
                            alert(response.message);
                        }
                    },
                    error: function (xhr, status, error) {
                        alert('An error occurred: ' + error);
                    }
                });
            });
        });
    </script>
@endpush

@extends('main')

@section('content')
    <!--====== Register Page ======-->
    <section class="contact-section pt-75 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact-img-text text-center mb-50 d-none d-lg-block" data-aos="fade-left"
                         data-aos-delay="15" data-aos-duration="1500">
                        <img src="{{ asset('images/contact/text-img.png') }}" alt="Text">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-wrapper p-r z-1 mb-50" data-aos="fade-right" data-aos-delay="10"
                         data-aos-duration="1000">
                        <div class="shape shape-one"><span><img src="{{ asset('images/shape/cl-line.png') }}"
                                                                alt="Line Shape"></span></div>
                        <h3>Register</h3>
                        <form id="registerForm" class="pesco-contact-form" action="{{route('register')}}" method="post">
                            <div class="row">
                                <div class="form-group">
                                    <input type="email" placeholder="Email" class="form_control" name="email" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Password" class="form_control" name="password" required>
                                </div>
                                <div class="form-group">
                                    <input type="password" placeholder="Confirm Password" class="form_control" name="confirm_password" required>
                                </div>
                                <div class="form-group d-none" id="shop_name_container">
                                    <input type="text" placeholder="Shop Name" class="form_control" name="shop_name">
                                </div>

                                <!-- Role Selection -->
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form_control" name="role" id="role" required>
                                            <option value="">Select Role</option>
                                            <option value="user">Normal User</option>
                                            <option value="seller">Seller</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <select class="form_control" name="age" required>
                                            <option value="">Select Age</option>
                                            @for($i = 18; $i < 80; $i++)
                                                <option value="{{$i}}">{{$i}} age</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group w-100">
                                    <button  class="theme-btn style-one w-100">Register</button>
                                </div>
                            </div>
                            <div class="text-center mt-3">
                                <p>Already have an account? <a href="{{ route('login') }}">Sign in here</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--====== End Register Section ======-->
    @push('script')
        <script>
            $(document).ready(function () {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $(document).on('change', '#role', function () {
                    let role = $(this).val();
                    if (role === 'seller') {
                        $('#shop_name_container').removeClass('d-none');
                    } else {
                        $('#shop_name_container').addClass('d-none');
                    }
                });

                $('#registerForm').on('submit', function (e) {
                    e.preventDefault();
                    let formData = $(this).serialize();

                    $.ajax({
                        url: '{{ route('register') }}',
                        method: 'POST',
                        data: formData,
                        success: function (response) {
                            if (response.success) {
                                window.location.href = '{{ route('login') }}';
                            } else {
                                console.error('Registration failed: ' + response.message);
                            }
                        },
                        error: function (xhr) {
                            var errorMsg = 'An error occurred!';
                            if (xhr.responseJSON && xhr.responseJSON.message) {
                                errorMsg = xhr.responseJSON.message;
                            }
                            console.error(errorMsg);
                        }
                    });
                });
            });
        </script>
    @endpush
@endsection

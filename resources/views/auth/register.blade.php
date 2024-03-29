{{-- @extends('layouts.app') --}}
@extends('auth.alogin')

@section('content')

    <body class="bg-gradient-primary">

        <div class="container">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-5 d-none d-lg-block">
                            <div class="col-md-6 ml-5 mt-5 img-fluid">
                                <img src="/../img/undraw_posting_photo.svg" width="400" height="400">
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                                </div>
                                @if ($message = session()->get('message'))
                                    <div>{{ $message }}</div>
                                @endif
                                <form action="{{ route('register.post') }}" class="user" method="post">
                                    @csrf {{-- token --}}
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" name="name" class="form-control form-control-user"
                                                id="exampleFirstName" placeholder="First Name">
                                            @error('name')
                                                <div class="small text-danger"> {{ $message }} </div>
                                            @enderror
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="text" name="last_name" class="form-control form-control-user"
                                                id="exampleLastName" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-user"
                                            id="exampleInputEmail" placeholder="Email Address">
                                        @error('email')
                                            <div class="small text-danger"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="password" name="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password">
                                            @error('password')
                                                <div class="small text-danger"> {{ $message }} </div>
                                            @enderror
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleRepeatPassword" placeholder="Repeat Password">
                                            @error('password')
                                                <div class="small text-danger"> {{ $message }} </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <button class="btn btn-primary btn-user btn-block">
                                        Register Account
                                    </button>
                                    <hr>
                                    {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a> --}}
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="div" href="{{ route('login') }}">Already have an account? Login!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="/../vendor/jquery/jquery.min.js"></script>
        <script src="/../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="/../vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="/../js/sb-admin-2.min.js"></script>

    </body>
@endsection

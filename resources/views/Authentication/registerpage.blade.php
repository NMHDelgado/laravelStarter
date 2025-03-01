@extends('Authentication.login')

@section('container')

<div class="card-header text-center">
    <img src="../app-assets/img/logos/logo-color-big.png" alt="company-logo" class="mb-3" width="80">
    <h4 class="text-uppercase text-bold-400 grey darken-1">Signup</h4>
</div>
<div class="card-body">
    <div class="card-block mx-auto">
        <form action="{{ route('register.utilisateurs') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <div class="col-md-12">
                    <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="First Name" value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <input type="password" class="form-control form-control-lg" name="password" id="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="custom-control custom-radio mb-2 mr-sm-2 mb-sm-0">
                    <input type="radio" class="custom-control-input" id="Homme" name="sexe" value="M">
                    <label class="custom-control-label pl-2" for="Homme">Male</label> <br>
                </div>
                <div class="custom-control custom-radio mb-2 mr-sm-2 mb-sm-0">
                    <input type="radio" class="custom-control-input" id="Femme" name="sexe" value="F">
                    <label class="custom-control-label pl-2" for="Femme">Female</label>
                </div>
            </div>
            <div class="form-group col-sm-offset-1">
                <label for="profile">Image de profil</label>
                <input type="file" name="profile" id="profile">
            </div>
            <div class="form-group text-center">
                <button type="submit" class="btn btn-danger px-4 py-2 text-uppercase white font-small-4 box-shadow-2 border-0">Get Started</button>
            </div>
        </form>
    </div>
</div>
<div class="card-footer grey darken-1">
    <div class="text-center">Don't have an account? <a href="{{ route('login') }}"><b>Signin</b></a></div>
</div>

@endsection
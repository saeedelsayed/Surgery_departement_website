<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('styling/fontawesome-free-6.0.0-web/css/all.css') }}">

    <link rel="stylesheet" href="{{ asset('styling/bootstrap/bootstrap.min.css') }}">
    @yield('css')

    <title>Document</title>
</head>

<body>
    <div class="sidebar">
        <img src="{{ asset('styling/css/img/blank-profile-picture-973460_640.png') }}" alt="profile" id="side_profile">
        <h2>Admin Name</h2>
        <p class="vertical_line"> </p>

        <a href="{{ route('admindashboard') }}"><i class=" icon home fa-solid fa-house"> </i>Home</a>


        <a href="{{ route('admintasks') }}"><i class=" icon fa-solid fa-list-check"></i>
            Tasks </a>
        <a href="{{ route('adminappo') }}"><i class="icon fa-solid fa-calendar-check"></i> Appointments</a>
        <p class="vertical_line"> </p>

        <a href="{{ route('admindoctors') }}"> <i class="icon fa-solid fa-user-doctor"></i> Doctors</a>
        <a href="{{ route('adminpatients') }}"><i class="icon fa-solid fa-bed-pulse"></i> patient</a>
        <p class="vertical_line"> </p>

        <a href="#"><i class=" icon  fa-solid fa-right-from-bracket"></i> Log out</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="title"> Admin Dashboard</h5>
            </div>

        </div>
    </div>
    <div class="contentt">
        {{-- TODO --}}
        @if (session()->has('success'))
            <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 4000)" x-show='show' class="alert alert-success">
                <strong>{{ session('success') }}</strong>
            </div>
        @endif
        @yield('content')


    </div>
    @yield('js')

</body>

</html>

<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div id="login-form-wrap">
    <h2>Login</h2>
    <form id="login-form" action="/register" method="POST">
        @csrf
        <p>
            <input type="text" id="username" name="name" placeholder="Full Name" required><i
                class="validation"><span></span><span></span></i>
        </p>
        <p>
            <input type="email" id="username" name="email" placeholder="Email Address" required><i
                class="validation"><span></span><span></span></i>
        </p>
        <p>
            <input type="password" id="email" name="password" placeholder="Password" required><i
                class="validation"><span></span><span></span></i>
        </p>
        <p>
            <input type="password" id="username" name="confirmpassword" placeholder="Confirm Password" required><i
                class="validation"><span></span><span></span></i>
        </p>
        @if (session('message'))
        <ul>
            <li style="color:red;"> {{ session('message') }} </li>
        </ul>
        @endif
        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:red;"> {{ $error }} </li>
                    @endforeach
                </ul>
            </div>
        @endif
        <p>
            <input type="submit" id="login" value="Register">
        </p>
    </form>
    <div id="create-account-wrap">
        <p>Already a member? <a href="/login">Sign In</a>
        <p>
    </div><!--create-account-wrap-->

</div><!--login-form-wrap-->


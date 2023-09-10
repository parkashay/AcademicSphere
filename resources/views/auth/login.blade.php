<link rel="stylesheet" href="{{ asset('css/login.css') }}">
<div id="login-form-wrap">
    <h2>Login</h2>
    <form id="login-form" action="/login" method="POST">
        @csrf
        <p>
            <input type="email" id="username" name="email" placeholder="Email Address" required><i
                class="validation"><span></span><span></span></i>
        </p>
        <p>
            <input type="password" id="email" name="password" placeholder="Password" required><i
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
            <input type="submit" id="login" value="Login">
        </p>
    </form>
    <div id="create-account-wrap">
        <p>Not a member? <a href="/register">Create Account</a>
        <p>
    </div><!--create-account-wrap-->

</div><!--login-form-wrap-->


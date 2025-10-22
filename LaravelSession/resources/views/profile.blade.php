<div>
    <h1>User Profile</h1>
    @if(session('user'))
        <p>User : {{ session('user') }}</p>
        <p>Password : {{ session('password') }}</p>
    @else
        <p>No user found in session</p>
    @endif
    <p><a href="logout">Logout</a></p>
    <p><a href="login">Login</a></p>
</div>

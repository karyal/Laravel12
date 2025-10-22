<div>
    <h1>User Login</h1>
    <form action="login" method="post">
        @csrf
        <p><input type="text" name="txtUser" placeholder="Enter User"></p>
        <p><input type="text" name="txtPassword" placeholder="Enter Password"></p>
        <p><button>Login</button></p>
    </form>
</div>

<div>
    <h1>New User</h1>
    <form action="user" method="post">
        @csrf
        <p><input type="text" name="txtUser" placeholder="Enter User"></p>
        <p><input type="text" name="txtPassword" placeholder="Enter Password"></p>
        <p><button>Save</button></p>
    </form>
    @if(session('message'))
        <span class="success-message">{{ session('message') }}</span>
    @endif
    <!-- {{ session()->reflash() }} -->
    {{ session()->keep('message') }} <!-- reflash the message -->
</div>

<style>
    .success-message{
        background-color: lightgreen;
        border-radius: 2px;
        padding: 2px;
    }
</style>
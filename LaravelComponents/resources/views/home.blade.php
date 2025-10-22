<x-message-banner msg="User Login Successfully" class="success"/>
<x-message-banner msg="User Sign-up Successfully" class="success"/>
<x-message-banner msg="User name or password incorrect!" class="error"/>
<x-message-banner msg="Data Validation Error!" class="warning"/>

<h1>Home</h1>
<style>
    .success{
        background: lightgreen;
        color: green;
        padding: 3px 10px;
        border-radius:2px ;
        display: inline-block;
        margin: 10px;
    }

    .error{
        background: lightsalmon;
        color: red;
        padding: 3px 10px;
        border-radius:2px ;
        display: inline-block;
        margin: 10px;
    }

    .warning{
        background:orange;
        color: black;
        padding: 3px 10px;
        border-radius:2px ;
        display: inline-block;
        margin: 10px;
    }

</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$page_title}}</title>
</head>
<body>
    <div>
        <div class="header">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="contact">Contact Us</a></li>
                <li><a href="login">Login</a></li>
            </ul>
        </div>
        <div>
            {{ $main }}
        </div>
        <div class="footer">
             <p>Footer Page</p>
        </div>
    </div>
</body>
</html>
<style>
    li {    
    display: inline;
    }

    li a{    
        text-decoration: none;
    }    
    .footer p{
        position: absolute;
        bottom: 0;
        background: lightblue;
        width: 100%;
        margin: 0;
        padding: 10px;
        text-align: center;
    }
</style>
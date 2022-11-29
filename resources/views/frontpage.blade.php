{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0;
    }
    .header{
        flex-wrap: wrap;
        text-align: center;
        padding: 10px;
        background-color: #003366;
        margin: 0;
    }
    .content{
        background-size: cover;
        text-align: center;
        justify-content: center;
        flex-wrap: wrap;
        display: flex;
        align-items: center;
        align-content: center;
        margin: 70px;

    }
    .content .title{
        background-size: contain;
        padding: 30px;
        margin: 0 50px 0 50px ;
    }
    .content .loginreg{
        border: solid 2px #66a4d6;
        border-radius: 5%;
        background-size: contain;
        padding: 30px;
        margin: 0 50px 0 50px;
    }
    .footer{
        text-align: center;
        margin-top: auto;
    }
    .footer footer{
        background-size:contain;
        padding: 30px;
        background-color: #003366;
        margin: 0;
    }
    .footer footer .credits{

    }
    #email{
        margin: 2px 0 0 0;
    }
    #password{
        margin: 2px 0 0 0;
    }
    #form{
        margin: 0;
    }
    #isatu{
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    }
    #alumniportal{
        font-size: 50px;
    }
    button{
        align-items: center;
        background-clip: padding-box;
        background-color: #f9d219;
        border: 1px solid transparent;
        border-radius: .25rem;
        box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-flex;
        font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 30px;
        font-weight: 600;
        justify-content: center;
        line-height: 1.25;
        margin: 0;
        min-height: 3rem;
        padding: calc(.875rem - 1px) calc(1.5rem - 1px);
        position: relative;
        text-decoration: none;
        transition: all 250ms;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: baseline;
        width: auto;
    }
    button:hover,
    button:focus {
        background-color: #f9ce00;
        box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
    }
    button:hover {
        transform: translateY(-1px);
        color: #003366;
    }
    #login{
        align-items: center;
        background-clip: padding-box;
        background-color: #f9d219;
        border: 1px solid transparent;
        border-radius: .25rem;
        box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-flex;
        font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 30px;
        font-weight: 600;
        justify-content: center;
        line-height: 1.25;
        margin: 5px 0 0 0;
        min-height: 3rem;
        padding: calc(.875rem - 1px) calc(1.5rem - 1px);
        position: relative;
        text-decoration: none;
        transition: all 250ms;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: baseline;
        width: auto;
    }
    #login:hover,
    #login:focus {
        background-color: #f9ce00;
        box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
    }
    #login:hover {
        transform: translateY(-1px);
        color: #003366;
    }
    #link{
        text-decoration: none;
    }
</style>
<body>
    <div class="header">
        <h1 id="isatu"> Lexi Lore Onlyfans Exclusives</h1>
    </div>
    <div class="content">
        <div class="title">
            <img src="https://talenthouse-res.cloudinary.com/image/upload/c_limit,f_auto,fl_progressive,h_1280,w_1280/v1583459542/user-1042280/profile/itsoo6ek1isyp5hjfwix.jpg" alt="" style="width:200px; height:auto; border-radius:50%;"> <br>
            <p id="alumniportal">What are you doing stepbro?</p>
        </div>
        <div class="loginreg">
            @if (Route::has('login'))
            @auth
            <div class="home">
                <a id="link" href="{{ url('/home') }}"><button>Home</button></a>
            </div>
            @else
            <div class="login">
                <a id="link" href="{{ url('/home') }}"><button>Log in</button></a>
            </div>
            <hr>or<hr></h3>
            @if (Route::has('register'))
            <div class="regsiter">
                <a id="link" href="{{ route('register') }}"><button>Register</button></a>
            </div>
            @endif
            @endauth
            @endif    
        </div>   
    </div>
    <div class="footer">
    <footer>
        <div class="credits">
            <p>Owned by: Adrian De los santos</p>
        </div>
    </footer>
    </div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin: 0;
    }
    .header{
        flex-wrap: wrap;
        text-align: center;
        padding: 10px;
        background-color: #003366;
        margin: 0;
    }
    .header2{
        flex-wrap: wrap;
        text-align: center;
        padding: 10px;
        background-color: #f9ce00;
        margin: 0;
    }
    .content{
        background-size: cover;
        text-align: center;
        justify-content: center;
        flex-wrap: wrap;
        display: flex;
        align-items: center;
        align-content: center;
        margin: 70px;

    }
    .content .title{
        background-size: contain;
        padding: 30px;
        margin: 0 50px 0 50px ;
    }
    .content .loginreg{
        box-shadow: 4px 3px 8px 1px #969696;
        border-radius: 5%;
        background-size: contain;
        padding: 30px 100px;
        margin: 0 50px 0 50px;
        background-color: #ededed
    }
    .footer{
        text-align: center;
        margin-top: auto;
    }
    .footer footer{
        background-size:contain;
        padding: 30px;
        background-color: #003366;
        margin: 0;
    }
    .footer footer .credits{

    }
    #email{
        margin: 2px 0 0 0;
    }
    #password{
        margin: 2px 0 0 0;
    }
    #form{
        margin: 0;
    }
    #isatu{
        color: white;
        text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;
    }
    #alumniportal{
        font-size: 50px;
    }
    button{
        align-items: center;
        background-clip: padding-box;
        background-color: #003366;
        border: 1px solid transparent;
        border-radius: .25rem;
        box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
        box-sizing: border-box;
        color: #fff;
        cursor: pointer;
        display: inline-flex;
        font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
        font-size: 30px;
        font-weight: 600;
        justify-content: center;
        line-height: 1.25;
        margin: 0;
        min-height: 3rem;
        padding: calc(.875rem - 1px) calc(1.5rem - 1px);
        position: relative;
        text-decoration: none;
        transition: all 250ms;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
        vertical-align: baseline;
        width: auto;
    }
    button:hover,
    button:focus {
        background-color: #f9ce00;
        box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
    }
    button:hover {
        transform: translateY(-1px);
        color: #003366;
    }
    #link{
        text-decoration: none;
    }
</style>
<body>
    <div class="header">
        <h1 id="isatu"> Lexi Lore Exclusives</h1>
    </div>
    <div class="header2">
    
    </div>
    <div class="content">
        <div class="title">
            <img src="https://talenthouse-res.cloudinary.com/image/upload/c_limit,f_auto,fl_progressive,h_1280,w_1280/v1583459542/user-1042280/profile/itsoo6ek1isyp5hjfwix.jpg" alt="" style="width:200px; height:auto; border-radius:50%;"> <br>
            <p id="alumniportal">What are you doing stepbro?</p>
        </div>
        <div class="loginreg">
            @if (Route::has('login'))
            @auth
            <div class="home">
                <a id="link" href="{{ url('/home') }}"><button>Home</button></a>
            </div>
            @else
            <div class="login">
                <a id="link" href="{{ url('/home') }}"><button>Log in</button></a>
            </div>
            <hr>or<hr></h3>
            @if (Route::has('register'))
            <div class="register">
                <a id="link" href="{{ route('register') }}"><button>Register</button></a>
            </div>
            @endif
            @endauth
            @endif    
        </div>   
    </div>
    <div class="footer">
    <footer>
        <div class="credits">
            By: Louren Perck Labra
        </div>
    </footer>
    </div>
</body>
</html>
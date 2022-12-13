{{-- Original --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Portal</title>
</head>
<style>
    body{
        background-image: url('/img/bg2.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        margin: 0;
        position: relative;
        height: 100%;
        /* https://img.freepik.com/free-vector/yellow-background-with-circular-shapes_1017-37576.jpg?w=1380&t=st=1669492017~exp=1669492617~hmac=9500417cd92c09b10c0d918c92b0233103c22b9efe5e193293f2d4af7b053db5' */
        background-size: cover;
        overflow: auto;
        font-family: $openSans;
    }
    
    .header{
        flex-wrap: wrap;
        text-align: center;
        padding: 10px;
        background-color: #003366;
        margin: 0;
    }
    #img{

    }
    .header2{
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
        box-shadow: 2px 1px 15px 5px #383737;
        border-radius: 5%;
        background-size: contain;
        padding: 30px 100px;
        margin: 0 50px 0 50px;
        background-color: #ededed95
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
        text-transform: uppercase;
        font-family: 'Gambetta', serif;
        letter-spacing: -3px;
        transition: 700ms ease;
        font-variation-settings: "wght" 311;
        margin-bottom: 0.8rem;
        color: rgb(14, 14, 13);
        outline: none;
        text-align: center;
        font-weight: 900;
        background: linear-gradient(
        to right, 
        hsl(242, 49%, 13%), 
        hsl(62, 49%, 13%)
  );
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-align: center;
    }
    #alumniportal:hover{
        font-variation-settings: "wght" 582; 
        letter-spacing: 1px;
        
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
        box-shadow: inset 200px 0 0 0 #f9ce00;  
    }
    button:hover {
        transform: translateY(-1px);
        color: #003366;
        transition: color .3s ease-in-out, box-shadow .3s ease-in-out;
    }
    #link{
        text-decoration: none;
    }
    
</style>
<body>
    <div id="main"></div>
    <div class="header">
        <h1 id="isatu"> Iloilo Science and Technology University</h1>
    </div>
    <div class="header2">
    
    </div>
    <div class="content">
        <div class="title">
            <img src="/img/logo.png" style="width:200px; height:auto; border-radius:50%; box-shadow: 2px 1px 15px 5px #383737;);"> <br>
            <p id="alumniportal">Alumni Portal</p>
        </div>
        <div class="loginreg">
            @if (Route::has('login'))
            @auth
            <div class="home">
                <a id="link" href="{{ url('/home') }}"><button>Home</button></a>
            </div>
            @else
            <div class="login">
                <a id="link" href="{{ url('/login') }}"><button>Log in</button></a>
            </div>
            <hr><hr>
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
    {{-- <footer>
        <div class="credits">
            Jim Karlo Capero <br>
            Lovely <br>
            eric <br>
            perck <br>
            khim <br>
        </div>
    </footer> --}}
    </div>
</body>

</html>

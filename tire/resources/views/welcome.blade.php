<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
<h1>孙老师修车</h1>
<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="/imgages/tire.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">轮胎</h5>
    <p class="card-text">
      <ul>
        <li>更换轮胎</li>
        <li>更换轮胎</li>
        <li>更换轮胎</li>
        <li>更换轮胎</li>
        <li>更换轮胎</li>
      </ul>
    </p>
    <a href="/tire" class="btn btn-primary">走着</a>
  </div>
</div>
            </div>
        </div>
    </body>
</html>

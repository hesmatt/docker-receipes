
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Security-Policy" content="default-src 'none'; style-src 'unsafe-inline'; img-src data:; connect-src 'self'">
    <title>PHP + MySQL + PHPMyAdmin + Composer</title>
    <style type="text/css" media="screen">
        body {
            background-color: #f1f1f1;
            margin: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        }
        .container { margin: 50px auto 40px auto; width: 600px; text-align: center; }
        a { color: #4183c4; text-decoration: none; }
        a:hover { text-decoration: underline; }
        h1 { width: 800px; position:relative; left: -100px; letter-spacing: -1px; line-height: 60px; font-size: 60px; font-weight: 100; margin: 0px 0 50px 0; text-shadow: 0 1px 0 #fff; }
        p { color: rgba(0, 0, 0, 0.5); margin: 20px 0; line-height: 1.6; }
        ul { list-style: none; margin: 25px 0; padding: 0; }
        li { display: table-cell; font-weight: bold; width: 1%; }
        #suggestions {
            margin-top: 35px;
            color: #ccc;
        }
        #suggestions a {
            color: #666666;
            font-weight: 200;
            font-size: 14px;
            margin: 0 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Hey, it's working!</h1>
    <p><strong>Your project is working, feel free to go into <?= getcwd() ?> and start editing your file!</strong></p>
    <p>
        Shh, this is copied Github 404 page style (don't tell them)
    </p>
    <div id="suggestions">
        <a href="https://github.com/hesmatt/docker-receipes">This projects repository</a> &mdash; <a href="https://github.com/hesmatt">My Github</a>
    </div>
</div>
</body>
</html>

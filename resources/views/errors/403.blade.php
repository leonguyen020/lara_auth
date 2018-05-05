<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet"
          id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>Document</title>
    <style>
        .center {
            text-align: center;
            margin-left: auto;
            margin-right: auto;
            margin-bottom: auto;
            margin-top: auto;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="span12">
            <div class="hero-unit center">
                <h1>Oops
                    <small><font face="Tahoma" color="red">Error 403</font></small>
                </h1>
                <br/>
                <p>You do not have enough permission to view this page.Please contact webmaster to solve this problem. Use your
                    browsers <b>Back</b> button to navigate to the page you have previously come from</p>
                <p><b>Or you could just press this neat little button:</b></p>
                <a href="{{ URL::previous() }}" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Take Me Back</a>
            </div>
            <br/>
        </div>
    </div>
</div>
</body>
</html>
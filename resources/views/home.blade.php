<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->
<head>

    <!-- Global Metas -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Home</title>

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--[if lt IE 9]> HTML5Shiv
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- CSS's -->
    <link rel="stylesheet" href="{{ asset('js/libs/bootstrap/dist/css/bootstrap.min.css') }}"/>

    <!-- Favicons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12" style="margin-top: 20px">
            <h3>Change String</h3>

            <div class="col-sm-5">
                <input type="text" class="form-control before" maxlength="100"/>
            </div>
            <div class="col-sm-2 text-center">
                <button class="btn btn-primary btn-action" rel="{{ url('/change-string') }}">Process</button>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control after" readonly/>
            </div>
        </div>

        <div class="col-sm-12" style="margin-top: 20px">
            <h3>Clear Par</h3>

            <div class="col-sm-5">
                <input type="text" class="form-control before" maxlength="100"/>
            </div>
            <div class="col-sm-2 text-center">
                <button class="btn btn-primary btn-action" rel="{{ url('/clear-par') }}">Process</button>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control after" readonly/>
            </div>
        </div>

        <div class="col-sm-12" style="margin-top: 20px">
            <h3>Complete Range (Separated by ',' and less than 101)</h3>

            <div class="col-sm-5">
                <input type="text" class="form-control before" maxlength="100"/>
            </div>
            <div class="col-sm-2 text-center">
                <button class="btn btn-primary btn-action" rel="{{ url('/complete-range') }}">Process</button>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control after" readonly/>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
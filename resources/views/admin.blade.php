<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Color Library UI Kit</title>
    <link rel="icon" type="image/x-icon" href={{asset("/assets/img/favicon.ico")}}/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href={{asset("bootstrap/css/bootstrap.min.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("assets/css/plugins.css")}} rel="stylesheet" type="text/css" />
    <link href={{asset("assets/css/scrollspyNav.css")}} rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href={{asset("/assets/css/elements/color_library.css")}} rel="stylesheet" type="text/css" />
    <style>
        input[type=file]::file-selector-button {
            margin-right: 20px;
            border: none;
            background: #084cdf;
            padding: 10px 20px;
            border-radius: 10px;
            color: #fff;
            cursor: pointer;
            transition: background .2s ease-in-out;
        }

        input[type=file]::file-selector-button:hover {
            background: #0d45a5;
        }

        .component-card_1 {
            border: 1px solid #e0e6ed;
            border-radius: 6px;
            width: 19rem;
            margin: 0 auto;
            box-shadow: 4px 6px 10px -3px #bfc9d4; }
        .component-card_1 .card-body {
            padding: 28px 25px; }
        .component-card_1 .icon-svg {
            margin-bottom: 20px;
            display: inline-block;
            background: #3b3f5c;
            padding: 12px;
            border-radius: 50%;
            color: #f1f2f3; }
        .component-card_1 svg {
            width: 20px;
            height: 20px; }
        .component-card_1 .card-title {
            font-size: 20px;
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 15px; }
        .component-card_1 .card-text {
            color: #888ea8; }

        .component-card_1 {
            border: 1px solid #e0e6ed;
            border-radius: 6px;
            width: 19rem;
            margin:20px;
            box-shadow: 4px 6px 10px -3px #bfc9d4;
        }
    </style>

</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="140">









<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>
<script>firstUpload = new FileUploadWithPreview('myFirstImage')</script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="assets/js/custom.js"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/js/scrollspyNav.js"></script>
<!-- END PAGE LEVEL SCRIPTS -->
</body>
</html>

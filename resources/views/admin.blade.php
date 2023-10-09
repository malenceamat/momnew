<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - Color Library UI Kit</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/scrollspyNav.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="assets/css/elements/color_library.css" rel="stylesheet" type="text/css" />
    <style>
        .col {
            min-width: auto;
        }
        .create-post {
            border: solid 1px silver;
            border-radius: 10px;
            text-align: center;
        }
    </style>

    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="140">

@include('admin.navbar')


<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">



@include('admin.sidebar')

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">


        </div>




        {{--  Форма отправки текста--}}

     {{--   <div class="container">

            <form method="get" action="">
                <input name="name" type="text" placeholder="Имя"/>
                <input name="text" type="text" placeholder="Текст"/>
                <input type="submit" value="Отправить"/>
            </form>
        </div>--}}

<div class="container">
    <br>
    <div class="create-post">
        <h5>Create Post</h5>
        <form action="" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="what do u think?" name="body">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-success">Send</button>
                </div>
            </div>
        </form>
    </div>
</div>


        {{--Форма отправки изображения--}}
        <div class="container">

        <form method="post" action="/save_reviews.php">
            <h3>Отправить отзыв:</h3>
            <div class="form-row">
                <label>Ваше имя:</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-row">
                <label>Комментарий:</label>
                <input type="text" name="text" required>
            </div>
            <div class="form-row">
                <label>Изображения:</label>
                <div class="img-list" id="js-file-list"></div>
                <input id="js-file" type="file" name="file[]" multiple accept=".jpg,.jpeg,.png,.gif">
            </div>
            <div class="form-submit">
                <input type="submit" name="send" value="Отправить">
            </div>
        </form>
        </div>
    </div>
        <!--  END CONTENT AREA  -->


<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>

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

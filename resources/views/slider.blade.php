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
    <link rel="stylesheet" href="//unpkg.com/a11y-slider@latest/dist/a11y-slider.css" />
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


        .w-100 {
            width: 100%!important;
        }
        .d-block {
            display: block!important;
        }
        img {
            vertical-align: middle;
            border-style: none;
        }
        *, ::after, ::before {
            box-sizing: border-box;
        }

        img {
            overflow-clip-margin: content-box;
            overflow: clip;
        }
        .main-container {
            min-height: 100vh;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start;
        }
    </style>
</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="140">

@include('admin.navbar')
@include('admin.sidebar')

<div class="main-container" id="container">



    <div id="content" class="main-content">
        <div class="card">
            <div class="card-header text-center font-weight-bold">
                <h2> Upload Image </h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <form action="/slider" method="POST" id="text" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="file">
                                    <input type="file" name="image" placeholder="Выбрать изображение" id="image" src="/">
                                </label>
                                @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-12 mb-2">
                            <img id="preview-image-before-upload" src="/images/product_image_not_found.gif"
                                 alt="" style="max-height: 250px;">
                        </div>
                        <div class="container mt-3">
                            <div class="create-post">
                                <div class="containet mt-3">
                                <div class="form-group">
                                    <label>
                                        <input type="text" class="form-control" placeholder="Вспомогательный текст" name="body">
                                    </label>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="text" class="form-control" placeholder="Основной текст" name="text">
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>
                                        <input type="text" class="form-control" name="buttons" placeholder="Текст для кнопок">
                                    </label>
                                </div>
                            </div>
                            <div class="container mt-3">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-success" id="t123ext">Отправить</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
            <script type="text/javascript">

                $(document).ready(function (e) {


                    $('#image').change(function(){

                        let reader = new FileReader();

                        reader.onload = (e) => {

                            $('#preview-image-before-upload').attr('src', e.target.result);
                        }

                        reader.readAsDataURL(this.files[0]);

                    });

                });

            </script>
        </div>
    </div>





       {{-- @foreach($photos as $ph)
            {{$ph['name']}}
            {{$ph['path']}}
            <img src="{{asset('/storage/'. $ph['path'])}}" class="d-block w-100" alt="...">
            @endforeach--}}

    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script src="//unpkg.com/a11y-slider@latest/dist/a11y-slider.js"></script>
    <script>
        $(document).ready(function() {App.init();});</script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/scrollspyNav.js"></script>
</body>
</html>








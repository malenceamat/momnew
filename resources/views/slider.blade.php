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

        .slider {
            display: flex;
        }

        .slider > * {
            width: 100%;
            flex: 0 0 auto;
        }
    </style>




    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="140">

@include('admin.navbar')


<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">



<div class="slider">
    <ul class="slider">
        <li>1</li>
        <li>2</li>
        <li>3</li>
        <li>4</li>
    </ul></div>
    <script>
        const slider = new A11YSlider(document.querySelector('.slider'), {
            adaptiveHeight: true,
            dots: false
        });
    </script>

    @include('admin.sidebar')












    <div id="content" class="main-content">



        <div class="container mt-5">



            <div class="card">

                <div class="card-header text-center font-weight-bold">
                    <h2> Upload Image </h2>
                </div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" id="upload-image" action="{{ url('save') }}" >
                        @csrf
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="file" name="image" placeholder="Выбрать изображение" id="image" src="/">
                                    @error('image')
                                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-12 mb-2">
                                <img id="preview-image-before-upload" src="/images/product_image_not_found.gif"
                                     alt="" style="max-height: 250px;">
                            </div>

                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary" id="submit">Отправить</button>
                            </div>
                          {{--  @foreach($photos as $ph)
                                {{$ph['name']}}
                                {{$ph['path']}}
                                <img src="{{asset('/storage/'. $ph['path'])}}" class="d-block w-100" alt="...">
                            @endforeach--}}
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


            {{--CREATE POST--}}

        {{--<div class="container">
            <br>
            <div class="create-post">
                <h5>Create Post</h5>
                <form action="/post" method="post">
                    @csrf
                    <div class="input-group mb-3">

                        <input type="text" class="form-control" placeholder="what do u think?" name="body">

                        <div class="input-group-append">
                            <button type="submit" class="btn btn-success">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>--}}




           {{-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src='' class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">

                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"  data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Следующий</span>
                </button>
            </div>--}}


</div>








<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY STYLES -->
<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>
    <script src="//unpkg.com/a11y-slider@latest/dist/a11y-slider.js"></script>
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





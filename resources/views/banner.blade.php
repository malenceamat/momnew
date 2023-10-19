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



        ol, li {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .carousel {
            position: relative;
            padding-top: 75%;
            filter: drop-shadow(0 0 10px #0003);
            perspective: 100px;
        }

        .carousel__viewport {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            display: flex;
            overflow-x: scroll;
            counter-reset: item;
            scroll-behavior: smooth;
            scroll-snap-type: x mandatory;
        }

        .carousel__slide {
            position: relative;
            flex: 0 0 100%;
            width: 100%;
            background-color: #f99;
            counter-increment: item;
        }

        .carousel__slide:nth-child(even) {
            background-color: #99f;
        }

        .carousel__slide:before {
            content: counter(item);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate3d(-50%,-40%,70px);
            color: #fff;
            font-size: 2em;
        }

        .carousel__snapper {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            scroll-snap-align: center;
        }

        @media (hover: hover) {
            .carousel__snapper {
                animation-name: tonext, snap;
                animation-timing-function: ease;
                animation-duration: 4s;
                animation-iteration-count: infinite;
            }

            .carousel__slide:last-child .carousel__snapper {
                animation-name: tostart, snap;
            }
        }

        @media (prefers-reduced-motion: reduce) {
            .carousel__snapper {
                animation-name: none;
            }
        }

        .carousel:hover .carousel__snapper,
        .carousel:focus-within .carousel__snapper {
            animation-name: none;
        }

        .carousel__navigation {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            text-align: center;
        }

        .carousel__navigation-list,
        .carousel__navigation-item {
            display: inline-block;
        }

        .carousel__navigation-button {
            display: inline-block;
            width: 1.5rem;
            height: 1.5rem;
            background-color: #333;
            background-clip: content-box;
            border: 0.25rem solid transparent;
            border-radius: 50%;
            font-size: 0;
            transition: transform 0.1s;
        }

        .carousel::before,
        .carousel::after,
        .carousel__prev,
        .carousel__next {
            position: absolute;
            top: 0;
            margin-top: 37.5%;
            width: 4rem;
            height: 4rem;
            transform: translateY(-50%);
            border-radius: 50%;
            font-size: 0;
            outline: 0;
        }

        .carousel::before,
        .carousel__prev {
            left: -1rem;
        }

        .carousel::after,
        .carousel__next {
            right: -1rem;
        }

        .carousel::before,
        .carousel::after {
            content: '';
            z-index: 1;
            background-color: #333;
            background-size: 1.5rem 1.5rem;
            background-repeat: no-repeat;
            background-position: center center;
            color: #fff;
            font-size: 2.5rem;
            line-height: 4rem;
            text-align: center;
            pointer-events: none;
        }

        .carousel::before {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='0,50 80,100 80,0' fill='%23fff'/%3E%3C/svg%3E");
        }

        .carousel::after {
            background-image: url("data:image/svg+xml,%3Csvg viewBox='0 0 100 100' xmlns='http://www.w3.org/2000/svg'%3E%3Cpolygon points='100,50 20,100 20,0' fill='%23fff'/%3E%3C/svg%3E");
        }


        * {
            box-sizing: border-box;
            scrollbar-color: transparent transparent; /* thumb and track color */
            scrollbar-width: 0px;
        }



        *::-webkit-scrollbar {
            width: 0;
        }

        *::-webkit-scrollbar-track {
            background: transparent;
        }

        *::-webkit-scrollbar-thumb {
            background: transparent;
            border: none;
        }

        * {
            -ms-overflow-style: none;
        }



        @keyframes snap {
            96% {
                scroll-snap-align: center;
            }
            97% {
                scroll-snap-align: none;
            }
            99% {
                scroll-snap-align: none;
            }
            100% {
                scroll-snap-align: center;
            }
        }
        @keyframes tonext {
            75% {
                left: 0;
            }
            95% {
                left: 100%;
            }
            98% {
                left: 100%;
            }
            99% {
                left: 0;
            }
        }

        @keyframes tostart {
            75% {
                left: 0;
            }
            95% {
                left: -300%;
            }
            98% {
                left: -300%;
            }
            99% {
                left: 0;
            }
        }



    </style>

    <!--  END CUSTOM STYLE FILE  -->
</head>
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="140">

@include('admin.navbar')


<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">



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





    <div class="container mt-3"
    <ul>




        <section class="carousel" aria-label="Gallery">
            <ol class="carousel__viewport">
                <li id="carousel__slide1"
                    tabindex="0"
                    class="carousel__slide">
                    <div class="carousel__snapper">
                        <a href="#carousel__slide4"
                           class="carousel__prev">Go to last slide</a>
                        <a href="#carousel__slide2"
                           class="carousel__next">Go to next slide</a>
                    </div>
                </li>
                <li id="carousel__slide2"
                    tabindex="0"
                    class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide1"
                       class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide3"
                       class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide3"
                    tabindex="0"
                    class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide2"
                       class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide4"
                       class="carousel__next">Go to next slide</a>
                </li>
                <li id="carousel__slide4"
                    tabindex="0"
                    class="carousel__slide">
                    <div class="carousel__snapper"></div>
                    <a href="#carousel__slide3"
                       class="carousel__prev">Go to previous slide</a>
                    <a href="#carousel__slide1"
                       class="carousel__next">Go to first slide</a>
                </li>
            </ol>
            <aside class="carousel__navigation">
                <ol class="carousel__navigation-list">
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide1"
                           class="carousel__navigation-button">12321321</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide2"
                           class="carousel__navigation-button">Go to slide 2</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide3"
                           class="carousel__navigation-button">Go to slide 3</a>
                    </li>
                    <li class="carousel__navigation-item">
                        <a href="#carousel__slide4"
                           class="carousel__navigation-button">Go to slide 4</a>
                    </li>
                </ol>
            </aside>
        </section>
    </ul>
</div>



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





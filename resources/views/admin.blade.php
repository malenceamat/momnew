<!DOCTYPE html>
<html lang="en">
@include('style')
<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">

<div class="main-container" id="container">
    @include('admin.sidebar')


    <div id="content" class="main-content">
        <div class="container mt-5">

        </div>
        <div id="card_1" class="col-lg-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">

                    <div class="row">


                        <div class="card component-card_1">
                            <div class="card-body">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                                </div>
                                <h5 class="card-title" align="center"><a href="/tablica">banner</a> </h5>
                                <p class="card-text" align="center"><a href="/tablica">Редактировать баннер.</a></p>
                            </div>
                        </div>

                        <div class="card component-card_1">
                            <div class="card-body">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                                </div>
                                <h5 class="card-title" align="center">бананы</h5>
                                <p class="card-text" align="center">Редактировать бананы.</p>
                            </div>
                        </div>
                        <div class="card component-card_1">
                            <div class="card-body">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                                </div>
                                <h5 class="card-title" align="center">text</h5>
                                <p class="card-text" align="center">Редактировать текст.</p>
                            </div>
                        </div>

                        <div class="card component-card_1">
                            <div class="card-body">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                                </div>
                                <h5 class="card-title" align="center">image</h5>
                                <p class="card-text" align="center">Редактировать картинку.</p>
                            </div>
                        </div>

                        <div class="card component-card_1">
                            <div class="card-body">
                                <div class="icon-svg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-droplet"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                                </div>
                                <h5 class="card-title" align="center">buttons</h5>
                                <p class="card-text" align="center">Редактировать кнопки.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

































<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="plugins/highlight/highlight.pack.js"></script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/js/scrollspyNav.js"></script>
<script src="plugins/jquery-step/jquery.steps.min.js"></script>
<script src="plugins/jquery-step/custom-jquery.steps.js"></script>
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src={{asset("bootstrap/js/popper.min.js")}}></script>
<script src={{asset("bootstrap/js/bootstrap.min.js")}}></script>
<script src={{asset("plugins/perfect-scrollbar/perfect-scrollbar.min.js")}}></script>
<script src={{asset("assets/js/app.js")}}></script>
<script>firstUpload = new FileUploadWithPreview('myFirstImage')</script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src={{asset("assets/js/custom.js")}}></script>

<script src={{asset("assets/js/scrollspyNav.js")}}></script>
<script>
</script>
</body>
</html>

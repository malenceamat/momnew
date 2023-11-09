

@extends('admin')
@include('style')
@include('admin.sidebar')


<style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
        border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
</style>
<div class="main-container" id="container">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">



                                <input type="button" onclick="location.href='/createslide';" value="добавить картинку в раздел" class="btn btn-outline-primary mb-2" />
                                <input type="button" onclick="location.href='/galleryedit';" value="Редактировать раздел" class="btn btn-outline-primary mb-2" />
                                <input type="button" onclick="location.href='/createrazdel';" value="Создать раздел" class="btn btn-outline-primary mb-2" />
                                <input type="button" onclick="location.href='/createimage';" value="создать картинку" class="btn btn-outline-primary mb-2" />





                        {{--<div class="container">


                            <h3>Laravel - Image Gallery CRUD Example</h3>
                            <form action="{{ url('gallery') }}" class="form-image-upload" method="POST" enctype="multipart/form-data">


                                @csrf


                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif


                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success alert-block">
                                        <button type="button" class="close" data-dismiss="alert">×</button>
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @endif


                                <div class="row">
                                    <div class="col-md-5">
                                        <strong>Title:</strong>
                                        <input type="text" name="title" class="form-control" placeholder="Title">
                                    </div>
                                    <div class="col-md-5">
                                        <strong>Image:</strong>
                                        <input type="file" name="image" class="form-control">
                                    </div>
                                    <div class="col-md-2">
                                        <br/>
                                        <button type="submit" class="btn btn-success">Upload</button>
                                    </div>
                                </div>


                            </form>


                            <div class="row">
                                <div class='list-group gallery'>


                                    @if($images->count())
                                        @foreach($images as $image)
                                            <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                                                <a class="thumbnail fancybox" rel="ligthbox" href="/{{ $image->image }}">
                                                    <img class="img-responsive" alt="" src="/{{ $image->image }}" />
                                                    <div class='text-center'>
                                                        <small class='text-muted'>{{ $image->title }}</small>
                                                    </div> <!-- text-center / end -->
                                                </a>
                                                <form action="{{ url('gallery',$image->id) }}" method="POST">
                                                    <input type="hidden" name="_method" value="delete">
                                                    @csrf
                                                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                                                </form>
                                            </div>
                                        @endforeach
                                    @endif


                                </div>
                            </div>
                        </div>
--}}








                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>

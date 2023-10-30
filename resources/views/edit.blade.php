@extends('admin')


@include('style')


@include('admin.sidebar')
<div class="main-container" id="container mt-3">
    <div id="content" class="main-content">
        <h1>Update</h1>
        <form action="/edit" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{$data['id']}}">

            <div class="col-md-12">
                <div class="form-group">
                    <label class="file">
                        <input type="file" name="body" value="{{$data['body']}}">

                    </label>
                    @error('image')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>



            <input type="text" name="head" value="{{$data['head']}}"> <br> <br>
            <input type="text" name="support" value="{{$data['support']}}"> <br> <br>
            <input type="text" name="buttons" value="{{$data['buttons']}}"> <br> <br>
            <input type="text" name="mama" value="{{$data['mama']}}"> <br> <br>
            <button type="submit" > Update</button>

        </form>
    </div>
</div>

{{--
<div class="main-container" id="container">
<div id="content" class="main-content">
    <div class="card">
        <div class="card-header text-center font-weight-bold">
            <h2> Upload Image </h2>
        </div>
        <div class="card-body">
            <div class="row">
                <form action="/edit" method="POST" id="text" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <label class="file">
                                <input type="file" name="image" placeholder="Выбрать изображение" id="image" value="{{$data['name']}}}">
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

                            <div class="form-group">

                                    <input type="text" name="head" value="{{$data['head']}}">

                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="text" name="support" value="{{$data['support']}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="text" name="buttons" value="{{$data['buttons']}}">
                                </label>
                            </div>
                            <div class="form-group">
                                <label>
                                    <input type="text" name="mama" value="{{$data['mama']}}">
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
</div>
--}}

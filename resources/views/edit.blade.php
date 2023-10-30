@extends('admin')


@include('style')


    @include('admin.sidebar')
    <div class="card">


            <div class="widget-content widget-content-area br-6">

                    <div id="content" class="main-content">

                            <h1>Update</h1>

                            <div class="main-container" id="container mt-3">
                            <form action="/edit" method="POST" enctype="multipart/form-data">
                               @csrf
                                <label class="file">
                                    <input type="file" name="body" id="image">
                                </label>
                                @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror <br> <br>
                                <div class="col-md-12 mb-2">
                                    <img id="preview-image-before-upload" src={{asset("images/product_image_not_found.gif")}}
                                 alt="" style="max-height: 250px;" alt="">
                                </div>
                                <div class="container mt-3">
                                 <input type="hidden" name="id" value="{{$data['id']}}">
                                <input type="text" name="head" value="{{$data['head']}}"> <br> <br>
                                <input type="text" name="support" value="{{$data['support']}}"> <br> <br>
                                <input type="text" name="buttons" value="{{$data['buttons']}}"> <br> <br>
                                <input type="text" name="mama" value="{{$data['mama']}}"> <br> <br>
                                <button type="submit" > Update</button>
                                </div>
                            </form>
                                <img src="{{asset('/storage/'. $data['body'])}}" class="d-block w-25 float-left width=" alt="...">
                            </div>
                            <div class="container">
                                <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                                <script type="text/javascript">

                                    $(document).ready(function () {


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
</div>


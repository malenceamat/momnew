@extends('admin')
@include('style')
@include('admin.sidebar')





<div class="main-container" id="container">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">





                        <form action="/video" method="POST" id="text" enctype="multipart/form-data">

                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="file">
                                        <input type="file" name="video" placeholder="Выбрать изображение" id="video" src="">
                                    </label>
                                </div>
                            </div>
                            <div class="container">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-success" id="t123ext">Отправить</button>
                                </div>
                            </div>
                        </form>









                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


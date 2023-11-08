@extends('admin')
@include('style')
@include('admin.sidebar')

<div class="main-container" id="container">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">







                        <form action="#" method="POST" id="#" enctype="multipart/form-data">
                        <div class="container">
                            <label>
                                <input type="text" class="form-control" name="razdel" placeholder="Название раздела">
                            </label>
                        </div>
                        <div id="fuMultipleFile" class="col-lg-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Multiple File Upload</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content widget-content-area">
                                    <div class="custom-file-container" data-upload-id="mySecondImage">
                                        <label>Upload (Allow Multiple) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                        <label class="custom-file-container__custom-file" >
                                            <input type="file" class="custom-file-container__custom-file__custom-file-input" multiple>
                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                        </label>
                                        <div class="custom-file-container__image-preview"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="container mt-3">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-success" id="razdel">Отправить</button>
                                </div>
                            </div>
                        </form>































                    </div>
                </div>
            </div>
        </div>
    </div>
</div>











<script> secondUpload = new FileUploadWithPreview('mySecondImage')</script>

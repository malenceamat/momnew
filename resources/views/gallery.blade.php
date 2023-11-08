

@extends('admin')
@include('style')
@include('admin.sidebar')



<div class="main-container" id="container">
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="row layout-top-spacing" id="cancel-row">
                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">



                                <input type="button" onclick="location.href='/createslide';" value="добавить картинку в раздел" class="btn btn-outline-primary mb-2" />
                                <input type="button" onclick="location.href='/createrazdel';" value="создать раздел" class="btn btn-outline-primary mb-2" />
                                <input type="button" onclick="location.href='/galleryedit';" value="Редактировать раздел" class="btn btn-outline-primary mb-2" />






<br>

                        <br>

вывод галереи










                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

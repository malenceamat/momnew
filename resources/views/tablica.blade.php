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
        <div class="layout-px-spacing">

            <div class="row layout-top-spacing" id="cancel-row">

                <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                    <div class="widget-content widget-content-area br-6">
                        <table id="zero-config" class="table dt-table-hover" style="width:100%">
                            <thead>
                            <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>created_at</th>
                                <th>Text</th>
                                <th>Supp Text</th>
                                <th>Buttons</th>
                                <th>Text Buttons</th>
                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                           @foreach($tablica as $key => $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->body}}</td>
                                <td>{{$data->created_at}}</td>
                                <td>{{$data->head}}</td>
                                <td>{{$data->support}}</td>
                                <td>{{$data->buttons}}</td>
                                <td>{{$data->mama}}</td>
                                <td> <form method="POST" action="/tablica/{{$data->id}}">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button type="submit" name="button">Delete</button>
                                    </form>

                                    <form method="GET" action="/slider/{{$data->id}}">

                                        {{csrf_field()}}
                                        <button type="submit">Edit</button>
                                        @endforeach
                                    </form>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
    </div>
</div>

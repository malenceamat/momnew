
@extends('admin')
@include('style')
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
                                <th>Image</th>

                                <th>Text</th>
                                <th>Supp Text</th>
                                <th>Buttons</th>
                                <th>Text Buttons</th>
                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($tablica as $data)
                                <tr>
                                    <td>{{$data->id}}</td>
                                    <td>
                                        <div class="container mt-0" id="sem">


                                            <img src="{{asset('/storage/'. $data['body'])}}" style="float: left; width: 100px; height: 100px; object-fit: cover;">

                                        </div>

                                    <td>{{$data->head}}</td>
                                    <td>{{$data->support}}</td>
                                    <td>{{$data->buttons}}</td>
                                    <td>{{$data->mama}}</td>
                                    <td> <form method="POST" action="/tablica/{{$data->id}}">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                            <button class="btn btn-danger mb-2">Delete</button>
                                        </form>
                                        <form method="POST" action="/edit/{{$data->id}}">

                                            {{csrf_field()}}
                                            <button class="btn btn-primary mb-2">Edit</button>
                                        </form>
                                        @endforeach
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



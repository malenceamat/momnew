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
                                <th>Name</th>

                                <th class="no-content">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>name1</td>
                                <td> <form method="POST" action="#">
                                        @csrf
                                        <button class="btn btn-danger mb-2">Delete</button>
                                    </form>
                                    <form {{--method="POST"--}} action="/redrazdel">
                                        @csrf
                                        <button class="btn btn-primary mb-2">Edit</button>
                                    </form>

                                </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

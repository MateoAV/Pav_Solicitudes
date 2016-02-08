@extends('baseLayout')

@section('title')
    Mis Solicitudes
@stop

@section('content')
    <div class="page-content-wrapper">
        <!-- BEGIN CONTENT BODY -->
        <div class="page-content">
            <!-- BEGIN PAGE HEAD-->
            <div class="page-head">
                <!-- BEGIN PAGE TITLE -->
                <div class="page-title">
                    <h1>Mis Solicitudes
                        <small>Sus solicitudes realizadas</small>
                    </h1>
                </div>
                <!-- END PAGE TITLE -->
            </div>
            <!-- END PAGE HEAD-->
            <!-- BEGIN PAGE BASE CONTENT -->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN EXAMPLE TABLE PORTLET-->
                    <div class="portlet light bordered">
                        <div class="portlet-title">
                            <div class="caption font-dark">
                                <i class="icon-settings font-dark"></i>
                                <span class="caption-subject bold uppercase">Solicitudes</span>
                            </div>
                        </div>
                        <div class="portlet-body">
                            <table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_1">
                                <thead>
                                <tr>
                                    <th>
                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" /> </th>
                                    <th> Id </th>
                                    <th> Proyecto </th>
                                    <th> Fecha </th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="odd gradeX">
                                    <td>
                                        <input type="checkbox" class="checkboxes" value="1" /> </td>
                                    <td> 0021 </td>
                                    <td> Aeropuerto</td>
                                    <td class="center"> 12 Jan 2012 </td>
                                </tr>
                                <tr class="odd gradeX">
                                    <td>
                                        <input type="checkbox" class="checkboxes" value="1" /> </td>
                                    <td> 0021 </td>
                                    <td> Aeropuerto</td>
                                    <td class="center"> 12 Jan 2012 </td>
                                </tr>                                <tr class="odd gradeX">
                                    <td>
                                        <input type="checkbox" class="checkboxes" value="1" /> </td>
                                    <td> 0021 </td>
                                    <td> Aeropuerto</td>
                                    <td class="center"> 12 Jan 2012 </td>
                                </tr>                                <tr class="odd gradeX">
                                    <td>
                                        <input type="checkbox" class="checkboxes" value="1" /> </td>
                                    <td> 0021 </td>
                                    <td> Aeropuerto</td>
                                    <td class="center"> 12 Jan 2012 </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- END EXAMPLE TABLE PORTLET-->
                </div>
            </div>
            <!-- END PAGE BASE CONTENT -->
        </div>
        <!-- END CONTENT BODY -->
    </div>
@stop
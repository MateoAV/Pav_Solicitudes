@extends('baseLayout')

@section('title')
        Nueva Solicitud
@stop

@section('content')

<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEAD-->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>Nueva Solicitud</h1>
                <small id="dateWeek" style="text-align: center; color: rgb(91, 155, 209);"></small>
            </div>
            <!-- END PAGE TITLE -->
        </div>
        <!-- END PAGE HEAD-->
        <!-- BEGIN PAGE BASE CONTENT -->
        <div id="selectconstr" class="row step">
            <div class="col-xs-12" style="text-align:center;">
                <h1>Seleccione la construcción:</h1>
                <div id="error-select"></div>
                <br>
                <form>
                    <select id="selectConstruct" class="image-picker show-html">
                        <option value=""></option>
                        <option id="options-con" data-img-src="http://www.marketingdirecto.com/wp-content/uploads/2011/08/construccion.jpg" value="1">  Construcción 1  </option>
                        <option id="options-con" data-img-src="http://www.marketingdirecto.com/wp-content/uploads/2011/08/construccion.jpg" value="2">  Construcción 2  </option>
                        <option id="options-con" data-img-src="http://www.marketingdirecto.com/wp-content/uploads/2011/08/construccion.jpg" value="3">  Construcción 3  </option>
                        <option id="options-con" data-img-src="http://www.marketingdirecto.com/wp-content/uploads/2011/08/construccion.jpg" value="4">  Construcción 4  </option>
                    </select>
                </form>
            </div>
        </div>
        <div id="calendarioUI" class="row step">
            <div class="col-md-12">
                <div class="portlet light portlet-fit bordered calendar">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-green"></i>
                            <span class="caption-subject font-green sbold uppercase">Calendario</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div id="calendar" class="has-toolbar"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="Addelementmodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             <h3 id="myModalLabel1">Añadir elemento</h3>
                    </div>
            <div class="modal-body">
                <form id="createAppointmentForm" class="form-horizontal">
                    <div class="control-group">
                        <label class="control-label" for="inputPatient">Patient:</label>
                        <div class="controls">
                            <input type="text" name="patientName" id="patientName" tyle="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Value 1&quot;,&quot;Value 2&quot;,&quot;Value 3&quot;]">
                            <input type="hidden" id="apptStartTime"/>
                            <input type="hidden" id="apptEndTime"/>
                            <input type="hidden" id="apptAllDay" />
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="when">When:</label>
                        <div class="controls controls-row" id="when" style="margin-top:5px;">
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Cancel</button>
                <button type="submit" class="btn btn-primary" id="submitButton" data-dismiss="modal">Save</button>
            </div>
        </div>
        </div>
        </div>

        <!-- END PAGE BASE CONTENT -->
    </div>
    <!-- END CONTENT BODY -->
</div>
<!-- END CONTENT -->
@stop
$('.step').stepify({
    distribution:[1,1]
});

$('.next-step').click(function(){
    $('#calendar').fullCalendar('render');
    console.log('Hecho');
});

$("select").imagepicker();
$("select").data('picker').sync_picker_with_select();

$("#SelectConstruct").change(function(){
    $('#selectconstr').hide();
    $('#calendarioUI').show();
    });

/*
$('.next-step').click(function(){
    if($('#selectConstruct')[0].selectedIndex <= 0) {
        $('#error-select').append('<div class="alert alert-danger"><strong>Seleccione una opción</strong>')
    }
});
*/

$(document).ready(
    function() {
        var formatted_date = function (date) {
            var monthNames = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
            ];
            var m = (monthNames[date.getMonth()]); // En JavaScript el mes empieza en 0.
            var d = ("0" + (date.getDate())).slice(-2); // Anteponer un cero
            var y = date.getFullYear();
            return d + ' de ' + m;
        }

        function nextweek() {
            var today = new Date();
            var nextweek = new Date(today.getFullYear(), today.getMonth(), today.getDate() + 7);
            return nextweek;
        };


        var curr_date = nextweek();

        var dayy = curr_date.getDay();

        var diff = curr_date.getDate() - dayy + (dayy == 0 ? -6 : 1); // 0 para Domingo

        var week_start_tstmp = curr_date.setDate(diff);

        var week_start = new Date(week_start_tstmp);

        var week_start_date = formatted_date(week_start);

        var week_end = new Date(week_start_tstmp);  // first day of week

        week_end = new Date(week_end.setDate(week_end.getDate() + 6));

        var week_end_date = formatted_date(week_end);

        var WeekDate = 'Semana del ' + week_start_date + ' al ' + week_end_date;    // Rango de semana para la próxima
        /*
         var week_end_date =formatted_date(new Date()); // limit current week date range upto current day.
         */

        document.getElementById('dateWeek').innerHTML = WeekDate;
    });

$(document).ready(function()
    {
        $('#calendar').fullCalendar('incrementDate, 0, 0, 7');
    });



$(document).ready(function() {

    var currentDate = moment().add(7, 'day');


    $('#calendar').fullCalendar('destroy'); // destroy the calendar
    $('#calendar').fullCalendar({ //re-initialize the calendar
        firstDay: 1,
        defaultView: 'basicWeek',
        height: 250,
        defaultDate: currentDate,
        slotMinutes: 15,
        editable: true,
        selectable: true,
        select: function(start, end, allDay) {
            endtime = moment(end).format('H:mm A');
            starttime = moment(start).format('ddd, MMM d, H:mm A');
            var mywhen = starttime + ' - ' + endtime;
            $('#Addelementmodal #apptStartTime').val(start);
            $('#Addelementmodal #apptEndTime').val(end);
            $('#Addelementmodal #apptAllDay').val(allDay);
            $('#Addelementmodal #when').text(mywhen);
            $('#Addelementmodal').modal('show');
        }
    });

    $('#submitButton').on('click', function(e){
        // We don't want this to act as a link so cancel the link action
        e.preventDefault();

        doSubmit();
    });

    function doSubmit(){
        $("#createEventModal").modal('hide');
        console.log($('#apptStartTime').val());
        console.log($('#apptEndTime').val());
        console.log($('#apptAllDay').val());
        alert("form submitted");

        $("#calendar").fullCalendar('renderEvent',
            {
                title: $('#patientName').val(),
                start: new Date($('#apptStartTime').val()),
                end: new Date($('#apptEndTime').val()),
                allDay: ($('#apptAllDay').val() == "true"),
            },
            true);
    }
});


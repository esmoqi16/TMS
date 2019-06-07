$(document).ready(function () {
    $('.select-1-parent').click(function () {
        $('.students-table').addClass('open');
        if(!$(this).siblings('.custom-control-input').is(':checked'))
            $(".select-1-child").prop( "checked", true );
        else
            $(".select-1-child").prop( "checked", false );
    });
    $('.select-2-parent').click(function () {
        $('.students-table').addClass('open');
        if(!$(this).siblings('.custom-control-input').is(':checked'))
            $(".select-2-child").prop( "checked", true );
        else
            $(".select-2-child").prop( "checked", false );
    });
});
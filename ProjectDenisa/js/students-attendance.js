$(document).ready(function () {
    $('.editBtn').click(function () {
        var currentTD = $(this).parents('tr').find('td');
        if ($(this).text() == 'Edit') {
            $.each(currentTD, function () {
                $(this).prop('contenteditable', true)
            });
            $(this).parents('td').prop('contenteditable', false);
        } else {
            $.each(currentTD, function () {
                $(this).prop('contenteditable', false)
            });
        }
        $(this).text($(this).text() == 'Edit' ? 'Save' : 'Edit')
    });
});
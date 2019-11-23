$(document).ready(function () {
    $('.addMore').on('click', function () {
        $('form').children('.form-group:last').after($('form').children('.form-group:last').clone()
            .attr({class :'row form-group ingredient can-delete'}));
        $('form').children('.form-group:last').children('div').children('input').val(0);
    });
});

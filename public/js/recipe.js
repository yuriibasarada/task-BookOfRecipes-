$(document).ready(function () {

    $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
    });

    $('.addMore').on('click', function () {
        $('.blockClone').after($(".blockClone:last").clone().attr('class', 'row form-group can-delete'));
    });

    $('#saveChange').on('click', function () {
        let form = $('form');
        console.log(form)

    });

});
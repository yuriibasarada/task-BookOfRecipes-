$(document).ready(function(){
    $(".triger_open").hide();
    $(".triger").click(function(){
        $(".triger_open").show();

    });
    $(".triger_close").click(function(){
        $(".triger_open").hide();
    });
});
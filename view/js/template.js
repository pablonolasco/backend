/**
 * Created victor on 03/11/2018.
 */

//Codigo para la grafica de
$(function () {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
    /* jQueryKnob */
    $('.knob').knob();
    /* SideBar Menu */
    $('.sidebar-menu').tree();
    //Colorpicker
    $('.my-colorpicker').colorpicker();

});


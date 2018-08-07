$(document).ready(function() {
    $(".keypad-btn").on('click', function() {
        let no = $(this).attr('data-no');
        let target = $(this).attr('data-target');
        let str = $(target).val();

        $(target).val(str + no);
    });

    $(".bksp-btn").on('click', function() {
        let target = $(this).attr('data-target');
        let str = $(target).val();
        $(target).val(str.slice(0, -1));
    });
});
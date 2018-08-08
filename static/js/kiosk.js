$(document).ready(function() {
    $(".keypad-btn").on('click', function() {
        var no = $(this).attr('data-no');
        var target = $(this).attr('data-target');
        var str = $(target).val();

        $(target).val(str + no);
    });

    $(".bksp-btn").on('click', function() {
        var target = $(this).attr('data-target');
        var str = $(target).val();
        $(target).val(str.slice(0, -1));
    });

    $("#btn-submit").on('click', function() {
        if($("#noreg").val() !== "")
            showDetails();
    });

    $("#btn-reset").on('click', function() {
        hideDetails();
    })
});

function showDetails() {
    $("#intro").animate({top: "-40px", opacity: 0}, 200);
    $("#details").css("top", "100px").css("opacity", 0).fadeIn(0).animate({top: "0px", opacity: 1}, 200);
    $("#qno").text(Math.floor(100000 + Math.random() * 900000));
    $("#name").text("Lucky Jonathan Chandra");
    $("#rno").text($("#noreg").val());
}

function hideDetails() {
    $("#intro").animate({top: "0px", opacity: 1}, 200);
    $("#details").css("top", "0px").css("opacity", 1).animate({top: "100px", opacity: 0}, 200).fadeOut(0);
    $("#noreg").val("");
}
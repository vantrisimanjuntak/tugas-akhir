$(document).ready(function () {
    $('.search').click(function () {
        if ($("#keyword").val() == '') {
            $("resultKeyword").remove();
            Swal.fire(
                'Kata kunci kosong !',
            );
        } else {
            $("#resultKeyword").show();
            $("#result").html("#keyword");
        }
    });
});
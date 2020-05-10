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

    // function for button submit skripsi

    $('#submitSkripsi').click(function () {
        base_url = '<?= base_url() ?>';
        if ($('.nim').val() != '') {
            $.ajax({
                type: 'post',
                url: base_url + 'skripsi/submitskripsi',
                data: "nim =" + nim,
                success: function (data) {
                    alert('nim tersedia');
                }

            });
        }
    });
});
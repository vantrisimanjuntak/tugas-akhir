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
        $('#nim').change(function () {
            var nim = $('#nim').val();
            if (nim != '') {
                $.ajax({
                    url: "<?php echo site_url('skripsi/home/checknim') ?>",
                    method: 'POST',
                    data: {
                        nim: nim
                    },
                    success: function (data) {
                        $('#nim_result').html(data);
                    }

                });
            }
        })
    });
});
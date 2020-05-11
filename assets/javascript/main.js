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
                    url: 'skripsi/home/checknim',
                    method: 'POST',
                    data: {
                        nim: nim
                    },
                    success: function (data) {
                        if (data) {
                            $('#nim_result').html(data);
                        }
                    }
                });
            }
        })
    });

    // $('#btnSubmit').click(function () {
    //     Swal.fire({
    //         title: 'Perhatian',
    //         text: "Data yang sudah diinput tidak bisa diubah / dihapus",
    //         icon: 'warning',
    //         showCancelButton: true,
    //         cancelButtonText: "Batal",
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Submit'
    //     }).then((result) => {
    //         if (result.value) {
    //             Swal.fire(
    //                 'Deleted!',
    //                 'Your file has been deleted.',
    //                 'success'
    //             )
    //             // $('#submitSkripsi').submit();
    //         }
    //     })
    // });

});
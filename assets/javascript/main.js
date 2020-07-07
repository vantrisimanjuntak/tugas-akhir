$(document).ready(function () {
    $('#nim_result').html('');
    $('#judulskripsi, #abstrak, #dp1, #dp2, #btnSubmit').prop('disabled', 'disabled');

    function showSpesificTitle() {
        $('#result').html('');
        if ($('#keyword').val() == '') {
            Swal.fire('Kata kunci kosong');
        } else {
            let titleInput = $('#keyword').val();

            $.ajax({
                url: `https://core.ac.uk:443/api-v2/articles/search/` + titleInput + ``,
                type: 'GET',
                dataType: 'JSON',
                data: {
                    'apiKey': 'dZFV7OnLgA3XwDMyr9emoxBEzNaHTcsG',
                    // 'page': 10,
                    // 'pageSize': 100
                },
                success: function (result) {
                    if (result.status === "OK") {
                        let returnData = result.data;
                        $.each(returnData, function (i, data) {
                            if (data.publisher == "Sekolah Tinggi Teknologi Adisutjipto Yogyakarta" || data.repositories[0]["id"] == 13749 || data.repositories[0]["id"] == 2432) {
                                $('#wrapper').css("height", "100%");
                                $('#result').append(`
                                        <div class="mt-2 pr-2 pl-2" style="background-color: RGB(0, 255, 255) ;border: 1px solid black; border-radius: 4px; color: #800080">
                                        <h4 style="color: #800080">` + data.title + `</h4>
                                        <h6 style="color: #800080">` + data.authors + `</h6>
                                        <small>` + data.contributors + `--` + data.repositories[0]["name"] + ` </small></div>`);
                            } else {
                                console.log("TIDAK DITEMUKAN");
                            }
                        });
                    }
                }
            });
        }
    }


    $('#btnSearch').click(function () {
        $('#wrapper').css("height", "339px");
        showSpesificTitle();
    });

    $('#keyword').on('keyup', function (e) {
        if (e.keyCode == 13) {
            showSpesificTitle();
        }
    });

    //check available NIM
    $('#nim').change(function () {
        var nim = $('#nim').val();
        if (nim != '') {
            $.ajax({
                url: "skripsi/home/checknim",
                method: "POST",
                data: {
                    nim: nim
                },
                success: function (data) {
                    $('#nim_result').html(data);
                }
            });
        } else {
            $('#nim_result').html('NIM KOSONG');
        }
    });

    // cek DP1 DP2
    $('select').change(function () {
        var dp1 = $('#dp1').find(":selected").text();
        var dp2 = $('#dp2').find(":selected").text();
        if (dp1 == dp2) {
            Swal.fire(
                'Terjadi kesalahan',
                'Dosen Pembimbing Tidak Boleh Sama',
                'error'
            );
            $('#btnSubmit').prop('disabled', 'disabled');
        } else {
            $('#btnSubmit').prop('disabled', false);
        }
    });


    // submit Skripsi
    $('#btnSubmit').click(function () {
        Swal.fire({
            title: 'Apakah anda yakin?',
            text: "Skripsi yang sudah di input tidak bisa diubah!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Submit',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.value) {
                $('#submitSkripsi').submit();
                Swal.fire(
                    'Berhasil!',
                    'Skripsi berhasil dikumpul',
                    'success'
                )
            }
        })
    });

    // input only number page Lecture
    $('#nip').keypress(function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });

});
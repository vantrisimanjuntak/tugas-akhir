$(document).ready(function () {

    // $('#collapsibleNavbar').css("color: yellow");
    // var prevScrollpos = window.pageYOffset;
    // var nav = $('nav');
    // window.onscroll = function () {
    //     var currentScrollPos = window.pageYOffset;
    //     if (prevScrollpos > currentScrollPos) {
    //         nav.addClass("fixed-top").show(400);
    //     } else {
    //         nav.hide(200);
    //         // console.log("DOWN");
    //         // nav.hide();
    //         // nav.style.top = "-50px";
    //     }
    //     prevScrollpos = currentScrollPos;
    // }


    $('#nim_result').html('');
    $('#judulskripsi, #abstrak, #dp_satu, #dp_dua, #btnSubmit').prop('disabled', 'disabled');

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

    function GetTitleFromDb() {
        var keyword = $('#keyword').val();
        if (keyword != '') {
            $.ajax({
                url: "dashboard/home/searchtitle",
                method: "POST",
                data: {
                    judul_skripsi: keyword,
                },
                success: function (data) {
                    $('#wrapper').css("height", "100%", "border", "3px solid black").show("slow", 1000);
                    $('#result').html(data).show(1500);
                },
            });
        } else {
            Swal.fire('Kata kunci kosong');
        }
    }


    $('#btnSearch').click(function () {
        GetTitleFromDb();
    });

    $('#keyword').on('keyup', function (e) {
        if (e.keyCode == 13) {
            GetTitleFromDb();
        }
    });

    //check available NIM
    $('#nim').change(function () {
        var nim = $('#nim').val();
        if (nim != '') {
            $.ajax({
                url: "control/checknim",
                method: "POST",
                data: {
                    nim: nim
                },
                success: function (data) {
                    $('#nim_result').html(data);
                }
            });
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

    // input only number in Skripsi page
    $('#nim').keypress(function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });

    $('#nim_mhs').keypress(function (e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });




    $('#nip').change(function () {
        var nip = $('#nip').val();
        if (nip != '') {
            $.ajax({
                url: "control/checknip",
                method: "POST",
                data: {
                    nip: nip
                },
                success: function (data) {
                    $('#nip_result').html(data);
                }
            });
        }
    });


    $('#nim_mhs').change(function () {
        var nim_mhs = $('#nim_mhs').val();
        if (nim_mhs != '') {
            $.ajax({
                url: "control/checkNIMBeforeAdd",
                method: "POST",
                data: {
                    nim: nim_mhs
                },
                success: function (data) {
                    $('#nim_result').html(data);
                }
            });
        }
    });


});

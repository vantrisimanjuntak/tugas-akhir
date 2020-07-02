$(document).ready(function () {
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
        showSpesificTitle();
    });

    $('#keyword').on('keyup', function (e) {
        if (e.keyCode == 13) {
            showSpesificTitle();
        }
    });
});
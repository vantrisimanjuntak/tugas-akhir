$(document).ready(function () {
    function showSpesificTitle() {
        $('#result').html('');
        if ($('#keyword').val() == '') {
            Swal.fire('Kata kunci kosong');
        } else {
            let titleInput = $('#keyword').val();

            var settings = {
                "url": "https://core.ac.uk:443/api-v2/articles/search/" + titleInput + "?apiKey=dZFV7OnLgA3XwDMyr9emoxBEzNaHTcsG",
                "method": "GET",
                "timeout": 0,
            };

            $.ajax(settings).done(function (response) {
                let titlePaper = response.data;
                $.each(titlePaper, function (i, data) {
                    $('#wrapper').css("height", "100%");
                    $('#result').append(`
                       <div class="mt-2" style="border: 1px solid black"> <h4>` + data.title + `</h4>
                       <h5>` + data.authors + `</h5>
                       </div>
                    `);
                });
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
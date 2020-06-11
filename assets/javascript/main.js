$(document).ready(function () {

    // Show All Title
    function showTitle() {
        $.getJSON('assets/api/hero.json', function (data) {
            let allTitle = data.papers;
            // console.log(allTitle);

            $.each(allTitle, function (i, data) {
                $('#wrapper').css("height", "100%");
                $('#result').append(`<div class="container col-md-4 mt-3 pb-3" >` + data.title + `</div>`);
            });
        });
    }
    // End Show All Title

    // Show Spesific Title
    function showSpesificTitle() {
        if ($('#keyword').val() == '') {
            // showTitle();
            Swal.fire('Kata kunci kosong!');
        } else {

            let titleInput = $('#keyword').val();

            $.getJSON('assets/api/hero.json', function (data) {
                let titlePaper = data.papers;
                let content = '';

                $.each(titlePaper, function (i, data) {
                    if (data.title == titleInput) {
                        content += '<h4>' + data.title + '</h4>';
                    } else {
                        content += $('#result').html("NOT FOUND");
                    }
                });
                $('#result').html(content);
            });
            $('#keyword').val('');
        }
    }
    // End Show Spesific Title


    $('.search').click(function () {
        showSpesificTitle();
    });


});
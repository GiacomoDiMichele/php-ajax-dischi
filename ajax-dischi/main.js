$(document).ready(function() {
    //leggo e prendo lo script per l'handlebars
    const script_album = $('#album-template').html();
    const template = Handlebars.compile(script_album);

    //faccio la chiamata ajax per prendere i dati di ogni singolo album
    if($("#chiamata-ajax").length) {

        $.ajax({
            url: '/boolean/esercizi/php-ajax-dischi/ajax-dischi/dati_dischi_due.php',
            method: 'GET',
            success: function(album) {

                var list_genres = [];
                for (var i = 0; i < album.length; i++) {
                    var context = {
                        'poster': album[i].poster,
                        'title': album[i].title,
                        'author': album[i].author,
                        'year': album[i].year
                    };
                    var html = template(context);
                    $('.singolo_album').append(html);

                    var current_genre = album[i].genre;
                    if(!list_genres.includes(current_genre)) {
                        list_genres.push(current_genre);
                    }
                }

                for (var i = 0; i < list_genres.length; i++) {
                    $('#select-genres').append(`
                        <option value="${list_genres[i]}">
                            ${list_genres[i]}
                        </option>`);
                }
            },
        });
    }
});

$(document).ready(function(){
    $('#PokemonButton').click(function(){
        $.ajax({
            url: '/pokemon',
            type: 'GET',
            success: function (data) {
                // Manejar la respuesta de la API
                $('#pokemonData').html(JSON.stringify(data, null, 2));
            },
            error: function (error) {
                console.error('Error al obtener datos de Pokemon:', error);
            }
        });
    });
});

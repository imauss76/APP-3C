window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     encrypted: true
// });
<!-- Script para a Ordenação de Tabelas -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    <script>
        $(document).ready (() =>{
            $('th').each(function(columna){
                $(this).hover(function(){
                    $(this).addClass('resaltar');                        
                }, function(){
                    $(this).removeClass('resaltar');
                });
        $(this).click(function(){
            let registros = $('table').find('tbody > tr').get();
            registros.sort(function(a,b){
                let valor1 = $(a).children('td').eq(columna).text().toUpperCase();
                let valor2 = $(b).children('td').eq(columna).text().toUpperCase();

                return valor1 < valor2 ? -1 : valor1 > valor2 ? 1 : 0;
            });
        $.each(registros, function(indice, elemento){
            $('tbody').append(elemento);
        });
        });
            });
        });
    </script>
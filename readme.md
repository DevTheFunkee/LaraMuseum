# Laravel PHP Framework


[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)

[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

#Descrizione dell'Applicazione:

LaraMuseum è un complesso sistema di booking per eventi e spettacoli, sviluppato utilizzando Laravel 5.2 nel quale convivono diverse tabelle: una per le sedi, una per i visitatori, una tabella per gli eventi ed un'altra per i ticket, tutte con le rispettive chiavi esterne e relazioni. In LaraMuseum il focus è basato sui controlli che l'applicazione dovrà svolgere prima di poter emettere lo store del ticket. Il primissimo controllo è sulla data d'apertura e chiusura dello spettacolo, ovviamente gli spettacoli chiusi non vengono visualizzati mentre per gli altri, la scelta del giorno, avviene grazie ad un comodo Jquery Ui Datepicker settato per avere il range di giorni corretto. Dopodichè l'app farà un successivo controllo sulla capienza delle sedi in relazione alla fascia oraria scelta. Sono presenti 5 fasce orarie disponibili tra le quali scegliere, ognuna con capienza massima relativà alla sede dello spettacolo in questione. Quindi il ticket per essere emesso, dovrà superare il controllo sulla capienza in relazione alla fascia oraria scelta, solo allora lo store del biglietto sarà convalidato.

#Configurare l'Applicazione:

Requisiti fondamentali, Composer installato.


Inserire nel file .env il nome del database di destinazione con username e password di phpmyadmin.
Dopodichè per installare l'app, clonare la repo aprire il terminale nella cartella di destinazione è digitare php artisan migrate --seed.

## Official Documentation

Documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

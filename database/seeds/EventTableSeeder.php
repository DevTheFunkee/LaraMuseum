<?php

use Illuminate\Database\Seeder;
use App\Event;


class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        Event::create([

           'TITOLO'=>'Dagli impressionisti a Picasso  ',
           'DATA_INIZIO'=>'2015-09-25',
           'DATA_FINE'=>' 2016-10-04',
           'PREZZO'=>'13,00',
           'avenue_id' => \App\Avenue::orderByRaw('RAND()')->first()->id
           ]);
        Event::create([
           'TITOLO'=>'Sebastião Salgado',
           'DATA_INIZIO'=>' 2016-02-27',
           'DATA_FINE'=>'2016-09-26',
           'PREZZO'=>'11,00',
           'avenue_id' => \App\Avenue::orderByRaw('RAND()')->first()->id
           ]);
        Event::create([
           'TITOLO'=>'Orlando furioso 500 anni',
           'DATA_INIZIO'=>'2016-09-24',
           'DATA_FINE'=>' 2017-08-01',
           'PREZZO'=>'11,00',
           'avenue_id' => \App\Avenue::orderByRaw('RAND()')->first()->id
          ]);
        Event::create([
           'TITOLO'=>'Leonardo3 - Il Mondo di Leonardo',
           'DATA_INIZIO'=>' 2016-01-01',
           'DATA_FINE'=>' 2016-12-31',
           'PREZZO'=>'13,50',
           'avenue_id' => \App\Avenue::orderByRaw('RAND()')->first()->id
          ]);
        Event::create([
           'TITOLO'=>'Egitto. Splendore millenario ',
           'DATA_INIZIO'=>' 2015-10-16 ',
           'DATA_FINE'=>' 2016-07-17',
           'PREZZO'=>'14,50',
           'avenue_id' => \App\Avenue::orderByRaw('RAND()')->first()->id
        ]);
        Event::create([
           'TITOLO'=>'Rappresentare il mondo',
           'DATA_INIZIO'=>' 2015-05-21 ',
           'DATA_FINE'=>'2016-12-31',
           'PREZZO'=>'15,00',
           'avenue_id' => \App\Avenue::orderByRaw('RAND()')->first()->id
          ]);
        Event::create([
           'TITOLO'=>' L arte della bellezza ',
           'DATA_INIZIO'=>'  2015-03-21',
           'DATA_FINE'=>'2016-12-31',
           'PREZZO'=>'20,00',
           'avenue_id' => \App\Avenue::orderByRaw('RAND()')->first()->id
         ]);
        
    }
}

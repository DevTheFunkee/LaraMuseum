<?php

use Illuminate\Database\Seeder;
use App\Visitor;
class VisitorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Visitor::create ([
                             'COGNOME' => 'Alfieri',
                             'NOME' => 'Valeria',
                             'TELEFONO' => '011/432834',
                             'LOGIN' => 'Alfieri',
                             'EMAIL' => 'alf@libero.it',
                             'password' => \Hash::make ('Alfieri_01') ]);

        Visitor::create  (['COGNOME' => 'Bellotti',
                             'NOME' => 'Cinzia',
                             'TELEFONO' => '011/798766',
                             'LOGIN' => 'Bellotti',
                             'EMAIL' => 'bel@tin.it',
                             'password' => \Hash::make ('Bellotti_02') ]);
        Visitor::create  ([ 'COGNOME' => 'Giuseppe',
                             'NOME' => 'Morgeri ',
                             'TELEFONO' => '011/76547648',
                             'LOGIN' => 'Morgeri',
                             'EMAIL' => 'dig@email.it',
                             'password' => \Hash::make ('Morgeri_03') ]);
        Visitor::create ([  'COGNOME' => 'Bastioni',
                             'NOME' => 'Gianluca',
                             'TELEFONO' => '011/765865',
                             'LOGIN' => 'Bastioni',
                             'EMAIL' => 'fai@virgilio.it',
                             'password' =>\Hash::make ('Bastioni_04') ]);
        Visitor::create ([      'COGNOME' => 'Francini Massimilia',
                             'NOME' => ' Massimilia',
                             'TELEFONO' => '011/543326',
                             'LOGIN' => 'Francini ',
                             'EMAIL' => 'fra@libero.it',
                             'password' => \Hash::make ('Arancini_0') ]);
        Visitor::create ([       'COGNOME' => 'Mattone',
                             'NOME' => ' Fabrizio',
                             'TELEFONO' => '011/987657',
                             'LOGIN' => '     Mattone',
                             'EMAIL' => 'gat@tin.it',
                             'password' => \Hash::make ('Mattone_0') ]);
        Visitor::create ([     'COGNOME' => 'Maistoni ',
                             'NOME' => 'Ivan',
                             'TELEFONO' => ' 011/548367 8',
                             'LOGIN' => ' Maistoni ',
                             'EMAIL' => 'mai@email.it',
                             'password' => \Hash::make ('Maistoni_0') ]);
        Visitor::create ([    'COGNOME' => ' Parenti',
                             'NOME' => ' Michele ',
                             'TELEFONO' => '011/536754 8',
                             'LOGIN' => 'Parenti ',
                             'EMAIL' => ' mik@tin.it    ',
                             'password' => \Hash::make ('Parenti_08') ]);
        Visitor::create ([      'COGNOME' => 'Morrini  ',
                             'NOME' => 'Marco',
                             'TELEFONO' => '011/536458 72',
                             'LOGIN' => 'Morrini',
                             'EMAIL' => 'mor@libero.i t',
                             'password' => \Hash::make ('Murrini_09') ]);
        Visitor::create ([  'COGNOME' => 'Pagini',
                             'NOME' => 'Giuliana ',
                             'TELEFONO' => '011/783634 59',
                             'LOGIN' => 'Pagini ',
                             'EMAIL' => 'pag@yahoo.i t',
                             'password' =>\Hash::make ('Pagini_10') ]);
        Visitor::create ([   'COGNOME' => 'Picati',
                             'NOME' => 'Annamaria',
                             'TELEFONO' => '011/675987 21',
                             'LOGIN' => ' Picati',
                             'EMAIL' => 'pic@email.it ',
                             'password' => \Hash::make ('Picati_11') ]);
        Visitor::create ([     'COGNOME' => 'Rugliese',
                             'NOME' => 'Antonio',
                             'TELEFONO' => ' 011/367846 5',
                             'LOGIN' => 'Ruglies e',
                             'EMAIL' => 'pug@tin.it  ',
                             'password' => \Hash::make ('Pugliese_12') ]);
        Visitor::create ([     'COGNOME' => 'Romanotti',
                             'NOME' => 'Davide',
                             'TELEFONO' => '011/342543 67',
                             'LOGIN' => 'Romano tti',
                             'EMAIL' => 'rom@libero.i t',
                             'password' => \Hash::make ('Romanotti_13') ]);
        Visitor::create ([   'COGNOME' => 'Straniti',
                             'NOME' => 'Annamari a',
                             'TELEFONO' => '011/845673 865',
                             'LOGIN' => 'Straniti',
                             'EMAIL' => 'str@libero.it ',
                             'password' => \Hash::make ('Straniti_14') ]);
                            
       
    }
}

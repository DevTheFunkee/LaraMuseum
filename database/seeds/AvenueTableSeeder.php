<?php

use Illuminate\Database\Seeder;
use App\Avenue;
class AvenueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {
        Avenue::create([
                      'NOME'=>'Palazzo Ducale',
                        'INDIRIZZO'=>'Piazza Matteotti 9',
                        'CITTA'=>'Genova',
                        'PROVINCIA'=>'GE',
                        'TELEFONO'=>'010/8171600',
                        'CAPIENZA'=>'300']);
        Avenue::create([   'NOME'=>'Palazzo dei Diamanti',
                        'INDIRIZZO'=>'C.so Porta mare 9',
                        'CITTA'=>'Ferrara',
                        'PROVINCIA'=>'FE',
                        'TELEFONO'=>'0532/20998',
                        'CAPIENZA'=>'200']);
        Avenue::create([  'NOME'=>'Sale del Re',
                        'INDIRIZZO'=>'Piazza Scala',
                        'CITTA'=>'Milano ',
                        'PROVINCIA'=>'MI',
                        'TELEFONO'=>'02/89058297 ',
                        'CAPIENZA'=>'250']);
        Avenue::create([ 'NOME'=>'Museo Civico Archeologico',
                        'INDIRIZZO'=>'via dell Arciginnasio 2',
                        'CITTA'=>'Bologna',
                        'PROVINCIA'=>'BO',
                        'TELEFONO'=>'051/2757211 ',
                        'CAPIENZA'=>'150']);
        Avenue::create([  'NOME'=>'La Venaria Reale',
                        'INDIRIZZO'=>'Piazza della Repubblica',
                        'CITTA'=>'Venaria',
                        'PROVINCIA'=>' TO',
                        'TELEFONO'=>'011/4992333',
                        'CAPIENZA'=>'120']);

    }
}

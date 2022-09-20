<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'titulo' => '13 Increibles lugares que debes visitar si viajas a la Guajira-Colombia.',
                'body'=>'<p><span class="firstcharacter">S</span>i estás buscando qué hacer en La Guajira colombiana, no te puedes perder los planes que te recomendamos en este post. Se trata de recorridos ideales para toda la familia, en los que podrán conocer los atractivos de este departamento, su cultura y sobre todo disfrutar del contacto con sus maravillas naturales.</p>
              <p>El departamento de La Guajira es el hogar de la comunidad indígena más grande de Colombia: los wayuu, pero también posee una naturaleza impresionante, ideal para que planees tus próximas vacaciones si quieres vivir una experiencia inolvidable.</p>
              <p>Desiertos, playas y paisajes dignos de las mejores postales son solo algunos de sus principales atractivos; nuestra intención es ofrecerte alternativas para que escojas cómo deseas disfrutar de la oferta eco-turística de esta región según el tiempo y presupuesto que tengas disponible. Echa un vistazo a estas recomendaciones.</p>
              <p>En esta ciudad puedes recrearte al visitar el paseo marítimo y el Parque Plaza Padilla, disfrutar la vida nocturna que tiene lugar en el muelle principal y participar en una auténtica parranda vallenata colombiana.</p>
              <p>Las playas de Mayapo son ideales para practicar deportes acuáticos como el kitesurfing, windsurfing y más. Puedes alquilar el equipo por horas y sumergirte en sus deliciosas aguas azules.</p>
              <p></p>
              <p></p>',
            ],
        ]);
    }
}

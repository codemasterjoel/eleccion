<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Parroquia;

class ParroquiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Parroquia::insert([
            ['id' => '11', 'nombre' => '23 DE ENERO', 'parroquia_id' => '10111', 'municipio_id' => '101', 'electores' => '71022', 'meta' => '24765', 'centros'=> '51'], 
            ['id' => '1', 'nombre' => 'ALTAGRACIA', 'parroquia_id' => '10101', 'municipio_id' => '101', 'electores' => '38702', 'meta' => '8617', 'centros'=> '21'],
            ['id' => '12', 'nombre' => 'ANTIMANO', 'parroquia_id' => '10112', 'municipio_id' => '101', 'electores' => '102120', 'meta' => '37969', 'centros'=> '82'],
            ['id' => '2', 'nombre' => 'CANDELARIA', 'parroquia_id' => '10102', 'municipio_id' => '101', 'electores' => '53342', 'meta' => '7817', 'centros'=> '21'],
            ['id' => '17', 'nombre' => 'CARICUAO', 'parroquia_id' => '10117', 'municipio_id' => '101', 'electores' => '106743', 'meta' => '29397', 'centros'=> '68'],
            ['id' => '3', 'nombre' => 'CATEDRAL', 'parroquia_id' => '10103', 'municipio_id' => '101', 'electores' => '20601', 'meta' => '5879', 'centros'=> '11'],
            ['id' => '19', 'nombre' => 'COCHE', 'parroquia_id' => '10119', 'municipio_id' => '101', 'electores' => '62675', 'meta' => '17660', 'centros'=> '40'],
            ['id' => '18', 'nombre' => 'EL JUNQUITO', 'parroquia_id' => '10118', 'municipio_id' => '101', 'electores' => '47871', 'meta' => '11308', 'centros'=> '31'],
            ['id' => '22', 'nombre' => 'EL PARAISO', 'parroquia_id' => '10122', 'municipio_id' => '101', 'electores' => '96278', 'meta' => '18234', 'centros'=> '53'],
            ['id' => '13', 'nombre' => 'EL RECREO', 'parroquia_id' => '10113', 'municipio_id' => '101', 'electores' => '102511', 'meta' => '17722', 'centros'=> '50'],
            ['id' => '14', 'nombre' => 'EL VALLE', 'parroquia_id' => '10114', 'municipio_id' => '101', 'electores' => '128355', 'meta' => '39632', 'centros'=> '59'],
            ['id' => '04', 'nombre' => 'LA PASTORA', 'parroquia_id' => '10104', 'municipio_id' => '101', 'electores' => '69626', 'meta' => '18368', 'centros'=> '47'],
            ['id' => '15', 'nombre' => 'LA VEGA', 'parroquia_id' => '10115', 'municipio_id' => '101', 'electores' => '106664', 'meta' => '30708', 'centros'=> '63'],
            ['id' => '16', 'nombre' => 'MACARAO', 'parroquia_id' => '10116', 'municipio_id' => '101', 'electores' => '51222', 'meta' => '18539', 'centros'=> '35'],
            ['id' => '5', 'nombre' => 'SAN AGUSTIN', 'parroquia_id' => '10105', 'municipio_id' => '101', 'electores' => '40026', 'meta' => '12616', 'centros'=> '21'],
            ['id' => '21', 'nombre' => 'SAN BERNARDINO', 'parroquia_id' => '10121', 'municipio_id' => '101', 'electores' => '28156', 'meta' => '4304', 'centros'=> '17'],
            ['id' => '6', 'nombre' => 'SAN JOSE', 'parroquia_id' => '10106', 'municipio_id' => '101', 'electores' => '34060', 'meta' => '7814', 'centros'=> '14'],
            ['id' => '7', 'nombre' => 'SAN JUAN', 'parroquia_id' => '10107', 'municipio_id' => '101', 'electores' => '85650', 'meta' => '22731', 'centros'=> '50'],
            ['id' => '20', 'nombre' => 'SAN PEDRO', 'parroquia_id' => '10120', 'municipio_id' => '101', 'electores' => '59220', 'meta' => '8199', 'centros'=> '29'],
            ['id' => '8', 'nombre' => 'SANTA ROSALIA', 'parroquia_id' => '10108', 'municipio_id' => '101', 'electores' => '95409', 'meta' => '25989', 'centros'=> '60'],
            ['id' => '9', 'nombre' => 'SANTA TERESA', 'parroquia_id' => '10109', 'municipio_id' => '101', 'electores' => '22472', 'meta' => '4523', 'centros'=> '14'],
            ['id' => '10', 'nombre' => 'SUCRE', 'parroquia_id' => '10110', 'municipio_id' => '101', 'electores' => '295608', 'meta' => '93096', 'centros'=> '194']
        ]);
    }
}

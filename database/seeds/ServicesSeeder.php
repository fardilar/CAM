<?php

use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            'Servicio' => "Gestión de Deuda (Morosidad)",
            'Observacion' => "Administración de convenios de pago con los clientes que mantienen deuda.",
            'Region' => "Andina",
            'Valor' => '3000000',
        ]);
        DB::table('services')->insert([
            'Servicio' => "Gestión de Deuda (Morosidad)",
            'Observacion' => "Administración de convenios de pago con los clientes que mantienen deuda.",
            'Region' => "Caribe",
            'Valor' => '4000000',
        ]);
        DB::table('services')->insert([
            'Servicio' => "Gestión de Deuda (Morosidad)",
            'Observacion' => "Administración de convenios de pago con los clientes que mantienen deuda.",
            'Region' => "Orinoquia",
            'Valor' => '5000000',
        ]);

        DB::table('services')->insert([
            'Servicio' => "Nuevas Conexiones",
            'Observacion' => "Gestión y conexión de nuevos empalmes.",
            'Region' => "Andina",
            'Valor' => '1500000',
        ]);
        DB::table('services')->insert([
            'Servicio' => "Nuevas Conexiones",
            'Observacion' => "Gestión y conexión de nuevos empalmes.",
            'Region' => "Caribe",
            'Valor' => '1800000',
        ]);
        DB::table('services')->insert([
            'Servicio' => "Nuevas Conexiones",
            'Observacion' => "Gestión y conexión de nuevos empalmes.",
            'Region' => "Orinoquia",
            'Valor' => '2200000',
        ]);
        DB::table('services')->insert([
            'Servicio' => "Laboratorio de Equipos",
            'Observacion' => "Laboratorio de ensayo y calibración de equipos eléctricos, elementos de protección personal y transformadores de potencia y de medida.",
            'Region' => "Andina",
            'Valor' => '6000000',
        ]);
        DB::table('services')->insert([
            'Servicio' => "Laboratorio de Equipos",
            'Observacion' => "Laboratorio de ensayo y calibración de equipos eléctricos, elementos de protección personal y transformadores de potencia y de medida.",
            'Region' => "Caribe",
            'Valor' => '7000000',
        ]);
        DB::table('services')->insert([
            'Servicio' => "Laboratorio de Equipos",
            'Observacion' => "Laboratorio de ensayo y calibración de equipos eléctricos, elementos de protección personal y transformadores de potencia y de medida.",
            'Region' => "Orinoquia",
            'Valor' => '8000000',
        ]);
    }
}

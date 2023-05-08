<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sale extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sales')->insert([
            'nombre_empleado'=> 'Veronica',
            'nombre_cliente'=> 'Luz',
            'nombre_producto'=> 'Revista',
            'precio'=> '300',
            'fecha_compra'=> now(),
            'created_at'=> now(),
            'update_at'=> now(),
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class MakeDefaultCategory extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [ 'name'=>'adminita','password'=>bcrypt('666666'),'email'=>'vanphi.sasu@gmail.com','level'=>1];        
        DB::table('ita_user')->insert($data);
    }
}

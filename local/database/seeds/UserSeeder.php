<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            [
                'email'=>'leanhkhoa2205@gmail.com',
                'password'=>bcrypt('anhkhoa'),
                'level'=>0
            ],
            [
                'email'=>'5851071036@st.utc2.edu.vn',
                'password'=>bcrypt('anhkhoa'),
                'level'=>1
            ]
        ];
        DB::table('user')->insert($data);
    }
}

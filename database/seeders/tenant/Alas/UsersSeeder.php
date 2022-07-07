<?php

namespace Database\Seeders\Tenant\Alas;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class UsersSeeder extends Seeder
{
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run()
        {
                $user = User::create([
                        'name' => 'Jhasmany',
                        'ap_paterno' => 'Paz',
                        'ap_materno' => 'Perez',
                        'ci' => 8235900,
                        'fecha_nac' => '1995-7-4',
                        'telefono' => 79080600,
                        'domicilio' =>'2375 Pennsylvania Ave',
                        'email' => 'jhasmany1@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Asesor de Credito');

                $user = User::create([
                        'name' => 'Mariela',
                        'ap_paterno' => 'Cruz',
                        'ap_materno' => 'Perez',
                        'ci' => 8235901,
                        'fecha_nac' => '1995-8-3',
                        'telefono' => 79080601,
                        'domicilio' =>'2375 Pennsylvania Ave',
                        'email' => 'mariela2@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Asesor de Credito');

                $user = User::create([
                        'name' => 'Jhasmany',
                        'ap_paterno' => 'Torrez',
                        'ap_materno' => 'Guerra',
                        'ci' => 8235902,
                        'fecha_nac' => '1995-8-25',
                        'telefono' => 79080602,
                        'domicilio' =>'2375 Pennsylvania Ave',
                        'email' => 'jhasmany3@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Oficial de Credito');

                $user = User::create([
                        'name' => 'Kevin',
                        'ap_paterno' => 'Perez',
                        'ap_materno' => 'Jarpa',
                        'ci' => 8235903,
                        'fecha_nac' => '1995-8-10',
                        'telefono' => 79080603,
                        'domicilio' =>'2375 Pennsylvania Ave',
                        'email' => 'kevin4@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Oficial de Credito');

                $user = User::create([
                        'name' => 'Julia',
                        'ap_paterno' => 'Chavez',
                        'ap_materno' => 'Jarpa',
                        'ci' => 8235904,
                        'fecha_nac' => '1995-9-3',
                        'telefono' => 79080604,
                        'domicilio' =>'2375 Pennsylvania Ave',
                        'email' => 'julia5@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Comité de Credito');

                $user = User::create([
                        'name' => 'Kevin',
                        'ap_paterno' => 'Paco',
                        'ap_materno' => 'Chavez',
                        'ci' => 8235905,
                        'fecha_nac' => '1995-9-4',
                        'telefono' => 79080605,
                        'domicilio' =>'2375 Pennsylvania Ave',
                        'email' => 'kevin6@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Comité de Credito');

                $user = User::create([
                        'name' => 'Edson',
                        'ap_paterno' => 'Paz',
                        'ap_materno' => 'Perez',
                        'ci' => 8235906,
                        'fecha_nac' => '1995-10-27',
                        'telefono' => 79080606,
                        'domicilio' =>'2375 Pennsylvania Ave',
                        'email' => 'edson7@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Departamento Legal');

                $user = User::create([
                        'name' => 'Paola',
                        'ap_paterno' => 'Paz',
                        'ap_materno' => 'Jarpa',
                        'ci' => 8235907,
                        'fecha_nac' => '1995-12-22',
                        'telefono' => 79080607,
                        'domicilio' =>'2375 Pennsylvania Ave',
                        'email' => 'paola8@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Departamento Legal');

                $user = User::create([
                        'name' => 'Marco',
                        'ap_paterno' => 'Chavez',
                        'ap_materno' => 'Cruz',
                        'ci' => 8235908,
                        'fecha_nac' => '1995-12-3',
                        'telefono' => 79080608,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'marco9@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Pedro',
                        'ap_paterno' => 'Torrez',
                        'ap_materno' => 'Solar',
                        'ci' => 8235909,
                        'fecha_nac' => '1995-1-10',
                        'telefono' => 79080609,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'pedro10@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Jhasmany',
                        'ap_paterno' => 'Jarpa',
                        'ap_materno' => 'Perez',
                        'ci' => 8235910,
                        'fecha_nac' => '1995-8-1',
                        'telefono' => 79080610,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'jhasmany11@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Pedro',
                        'ap_paterno' => 'Jarpa',
                        'ap_materno' => 'Paz',
                        'ci' => 8235911,
                        'fecha_nac' => '1995-9-24',
                        'telefono' => 79080611,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'pedro12@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Pedro',
                        'ap_paterno' => 'Cruz',
                        'ap_materno' => 'Solar',
                        'ci' => 8235912,
                        'fecha_nac' => '1995-9-3',
                        'telefono' => 79080612,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'pedro13@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Paola',
                        'ap_paterno' => 'Guerra',
                        'ap_materno' => 'Cruz',
                        'ci' => 8235913,
                        'fecha_nac' => '1995-12-19',
                        'telefono' => 79080613,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'paola14@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Juana',
                        'ap_paterno' => 'Torrez',
                        'ap_materno' => 'Chavez',
                        'ci' => 8235914,
                        'fecha_nac' => '1995-2-5',
                        'telefono' => 79080614,
                        'domicilio' =>'Calle Las Ninfas No. 18, esquina con Los Helios',
                        'email' => 'juana15@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Mariela',
                        'ap_paterno' => 'Paz',
                        'ap_materno' => 'Solar',
                        'ci' => 8235915,
                        'fecha_nac' => '1995-9-27',
                        'telefono' => 79080615,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'mariela16@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Marco',
                        'ap_paterno' => 'Perez',
                        'ap_materno' => 'Guerra',
                        'ci' => 8235916,
                        'fecha_nac' => '1995-5-25',
                        'telefono' => 79080616,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'marco17@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Luis',
                        'ap_paterno' => 'Cruz',
                        'ap_materno' => 'Guerra',
                        'ci' => 8235917,
                        'fecha_nac' => '1995-4-23',
                        'telefono' => 79080617,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'luis18@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Kevin',
                        'ap_paterno' => 'Torrez',
                        'ap_materno' => 'Paco',
                        'ci' => 8235918,
                        'fecha_nac' => '1995-1-18',
                        'telefono' => 79080618,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'kevin19@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Jhon',
                        'ap_paterno' => 'Paz',
                        'ap_materno' => 'Chavez',
                        'ci' => 8235919,
                        'fecha_nac' => '1995-7-17',
                        'telefono' => 79080619,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'jhon20@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Jhon',
                        'ap_paterno' => 'Torrez',
                        'ap_materno' => 'Paz',
                        'ci' => 8235920,
                        'fecha_nac' => '1995-4-11',
                        'telefono' => 79080620,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'jhon21@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Marco',
                        'ap_paterno' => 'Cruz',
                        'ap_materno' => 'Solar',
                        'ci' => 8235921,
                        'fecha_nac' => '1995-4-3',
                        'telefono' => 79080621,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'marco22@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Juan',
                        'ap_paterno' => 'Guerra',
                        'ap_materno' => 'Perez',
                        'ci' => 8235922,
                        'fecha_nac' => '1995-1-11',
                        'telefono' => 79080622,
                        'domicilio' =>'5055 Wilshire Blvd., Suite 960, Los Angeles',
                        'email' => 'juan23@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Luis',
                        'ap_paterno' => 'Perez',
                        'ap_materno' => 'Chavez',
                        'ci' => 8235923,
                        'fecha_nac' => '1995-12-13',
                        'telefono' => 79080623,
                        'domicilio' =>'Paseo de la Reina Elisenda de Montcada',
                        'email' => 'luis24@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Jhon',
                        'ap_paterno' => 'Paco',
                        'ap_materno' => 'Perez',
                        'ci' => 8235924,
                        'fecha_nac' => '1995-3-16',
                        'telefono' => 79080624,
                        'domicilio' =>'Paseo de la Reina Elisenda de Montcada',
                        'email' => 'jhon25@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Rocio',
                        'ap_paterno' => 'Paco',
                        'ap_materno' => 'Perez',
                        'ci' => 8235925,
                        'fecha_nac' => '1995-4-12',
                        'telefono' => 79080625,
                        'domicilio' =>'Paseo de la Reina Elisenda de Montcada',
                        'email' => 'rocio26@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Kevin',
                        'ap_paterno' => 'Perez',
                        'ap_materno' => 'Solar',
                        'ci' => 8235926,
                        'fecha_nac' => '1995-7-24',
                        'telefono' => 79080626,
                        'domicilio' =>'Paseo de la Reina Elisenda de Montcada',
                        'email' => 'kevin27@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Luis',
                        'ap_paterno' => 'Perez',
                        'ap_materno' => 'Perez',
                        'ci' => 8235927,
                        'fecha_nac' => '1995-9-8',
                        'telefono' => 79080627,
                        'domicilio' =>'Paseo de la Reina Elisenda de Montcada',
                        'email' => 'luis28@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Luis',
                        'ap_paterno' => 'Torrez',
                        'ap_materno' => 'Jarpa',
                        'ci' => 8235928,
                        'fecha_nac' => '1995-10-8',
                        'telefono' => 79080628,
                        'domicilio' =>'Paseo de la Reina Elisenda de Montcada',
                        'email' => 'luis29@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Kevin',
                        'ap_paterno' => 'Jarpa',
                        'ap_materno' => 'Paco',
                        'ci' => 8235929,
                        'fecha_nac' => '1995-7-13',
                        'telefono' => 79080629,
                        'domicilio' =>'Paseo de la Reina Elisenda de Montcada',
                        'email' => 'kevin30@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Juan',
                        'ap_paterno' => 'Torrez',
                        'ap_materno' => 'Paz',
                        'ci' => 8235930,
                        'fecha_nac' => '1995-5-22',
                        'telefono' => 79080630,
                        'domicilio' =>'Paseo de la Reina Elisenda de Montcada',
                        'email' => 'juan31@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Rocio',
                        'ap_paterno' => 'Paco',
                        'ap_materno' => 'Perez',
                        'ci' => 8235931,
                        'fecha_nac' => '1995-8-5',
                        'telefono' => 79080631,
                        'domicilio' =>'Paseo de la Reina Elisenda de Montcada',
                        'email' => 'rocio32@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Jhon',
                        'ap_paterno' => 'Guerra',
                        'ap_materno' => 'Paco',
                        'ci' => 8235932,
                        'fecha_nac' => '1995-8-4',
                        'telefono' => 79080632,
                        'domicilio' =>'Paseo de la Reina Elisenda de Montcada',
                        'email' => 'jhon33@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Mariela',
                        'ap_paterno' => 'Solar',
                        'ap_materno' => 'Solar',
                        'ci' => 8235933,
                        'fecha_nac' => '1995-4-3',
                        'telefono' => 79080633,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'mariela34@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Paola',
                        'ap_paterno' => 'Cruz',
                        'ap_materno' => 'Paco',
                        'ci' => 8235934,
                        'fecha_nac' => '1995-6-7',
                        'telefono' => 79080634,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'paola35@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Juan',
                        'ap_paterno' => 'Solar',
                        'ap_materno' => 'Jarpa',
                        'ci' => 8235935,
                        'fecha_nac' => '1995-5-19',
                        'telefono' => 79080635,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'juan36@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Mariela',
                        'ap_paterno' => 'Cruz',
                        'ap_materno' => 'Jarpa',
                        'ci' => 8235936,
                        'fecha_nac' => '1995-12-5',
                        'telefono' => 79080636,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'mariela37@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Rocio',
                        'ap_paterno' => 'Chavez',
                        'ap_materno' => 'Chavez',
                        'ci' => 8235937,
                        'fecha_nac' => '1995-12-16',
                        'telefono' => 79080637,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'rocio38@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Rocio',
                        'ap_paterno' => 'Perez',
                        'ap_materno' => 'Paz',
                        'ci' => 8235938,
                        'fecha_nac' => '1995-6-15',
                        'telefono' => 79080638,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'rocio39@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Marco',
                        'ap_paterno' => 'Paz',
                        'ap_materno' => 'Chavez',
                        'ci' => 8235939,
                        'fecha_nac' => '1995-7-15',
                        'telefono' => 79080639,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'marco40@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Luis',
                        'ap_paterno' => 'Chavez',
                        'ap_materno' => 'Guerra',
                        'ci' => 8235940,
                        'fecha_nac' => '1995-1-10',
                        'telefono' => 79080640,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'luis41@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Maria',
                        'ap_paterno' => 'Paz',
                        'ap_materno' => 'Solar',
                        'ci' => 8235941,
                        'fecha_nac' => '1995-4-6',
                        'telefono' => 79080641,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'maria42@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Rocio',
                        'ap_paterno' => 'Jarpa',
                        'ap_materno' => 'Jarpa',
                        'ci' => 8235942,
                        'fecha_nac' => '1995-1-9',
                        'telefono' => 79080642,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'rocio43@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Luis',
                        'ap_paterno' => 'Chavez',
                        'ap_materno' => 'Paz',
                        'ci' => 8235943,
                        'fecha_nac' => '1995-6-22',
                        'telefono' => 79080643,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'luis44@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Juana',
                        'ap_paterno' => 'Perez',
                        'ap_materno' => 'Paz',
                        'ci' => 8235944,
                        'fecha_nac' => '1995-11-18',
                        'telefono' => 79080644,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'juana45@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Edson',
                        'ap_paterno' => 'Guerra',
                        'ap_materno' => 'Solar',
                        'ci' => 8235945,
                        'fecha_nac' => '1995-8-14',
                        'telefono' => 79080645,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'edson46@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Julia',
                        'ap_paterno' => 'Jarpa',
                        'ap_materno' => 'Cruz',
                        'ci' => 8235946,
                        'fecha_nac' => '1995-5-4',
                        'telefono' => 79080646,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'julia47@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Julia',
                        'ap_paterno' => 'Guerra',
                        'ap_materno' => 'Cruz',
                        'ci' => 8235947,
                        'fecha_nac' => '1995-6-16',
                        'telefono' => 79080647,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'julia48@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Rocio',
                        'ap_paterno' => 'Jarpa',
                        'ap_materno' => 'Chavez',
                        'ci' => 8235948,
                        'fecha_nac' => '1995-11-2',
                        'telefono' => 79080648,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'rocio49@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Pedro',
                        'ap_paterno' => 'Perez',
                        'ap_materno' => 'Perez',
                        'ci' => 8235949,
                        'fecha_nac' => '1995-3-19',
                        'telefono' => 79080649,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'pedro50@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Pedro',
                        'ap_paterno' => 'Paz',
                        'ap_materno' => 'Paz',
                        'ci' => 8235950,
                        'fecha_nac' => '1995-7-2',
                        'telefono' => 79080650,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'pedro51@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Edson',
                        'ap_paterno' => 'Perez',
                        'ap_materno' => 'Chavez',
                        'ci' => 8235951,
                        'fecha_nac' => '1995-1-20',
                        'telefono' => 79080651,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'edson52@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Pedro',
                        'ap_paterno' => 'Perez',
                        'ap_materno' => 'Chavez',
                        'ci' => 8235952,
                        'fecha_nac' => '1995-3-5',
                        'telefono' => 79080652,
                        'domicilio' =>'Calle Serrano 75, Madrid',
                        'email' => 'pedro53@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Juana',
                        'ap_paterno' => 'Torrez',
                        'ap_materno' => 'Chavez',
                        'ci' => 8235953,
                        'fecha_nac' => '1995-3-9',
                        'telefono' => 79080653,
                        'domicilio' =>'Calle Leonardo da Vinci',
                        'email' => 'juana54@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Pedro',
                        'ap_paterno' => 'Paco',
                        'ap_materno' => 'Torrez',
                        'ci' => 8235954,
                        'fecha_nac' => '1995-5-3',
                        'telefono' => 79080654,
                        'domicilio' =>'Calle Leonardo da Vinci',
                        'email' => 'pedro55@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Edson',
                        'ap_paterno' => 'Jarpa',
                        'ap_materno' => 'Torrez',
                        'ci' => 8235955,
                        'fecha_nac' => '1995-5-13',
                        'telefono' => 79080655,
                        'domicilio' =>'Calle Leonardo da Vinci',
                        'email' => 'edson56@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Bianca',
                        'ap_paterno' => 'Perez',
                        'ap_materno' => 'Solar',
                        'ci' => 8235956,
                        'fecha_nac' => '1995-1-9',
                        'telefono' => 79080656,
                        'domicilio' =>'Calle Las Ninfas No. 18, esquina con Los Helios',
                        'email' => 'bianca57@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Pedro',
                        'ap_paterno' => 'Chavez',
                        'ap_materno' => 'Torrez',
                        'ci' => 8235957,
                        'fecha_nac' => '1995-12-24',
                        'telefono' => 79080657,
                        'domicilio' =>'Calle Las Ninfas No. 18, esquina con Los Helios',
                        'email' => 'pedro58@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Cliente');

                $user = User::create([
                        'name' => 'Alma',
                        'ap_paterno' => 'Marcela',
                        'ap_materno' => 'Gozo',
                        'ci' => 8235957,
                        'fecha_nac' => '1995-12-24',
                        'telefono' => 79080657,
                        'domicilio' =>'Calle Las Ninfas No. 18, esquina con Los Helios',
                        'email' => 'admin_alas@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Admin');
        }
}

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
                        'email' => 'admin_alas@gmail.com',
                        'password' => bcrypt('12345678')
                ])->assignRole('Admin');
        }
}

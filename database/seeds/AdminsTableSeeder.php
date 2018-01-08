<?php

use Illuminate\Database\Seeder;

use App\Modules\Admin\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new Admin();
        $user->first_name = "Carl Anthony";
        $user->last_name = "Magumpara";
        $user->email = "magumparacarlanthony@gmail.com";
        $user->password = crypt("09071995","");
        $user->save();

        $user = new Admin();
        $user->first_name = "Marlon";
        $user->last_name = "Valderama";
        $user->email = "attymarlonvalderama@gmail.com";
        $user->password = crypt("1234567890","");
        $user->save();

    }
}

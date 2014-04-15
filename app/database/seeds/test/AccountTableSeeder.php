<?php
use Illuminate\Support\Facades\Hash;

class AccountTableSeeder extends Seeder
{

    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        // DB::table('account')->truncate();
        $account = array(
            array(
                'account_id' => 'admin',
                'account_password' => Hash::make('admin'),
                'account_name' => 'システム管理者'
            )
        );
        DB::table('account')->insert($account);
    }
}

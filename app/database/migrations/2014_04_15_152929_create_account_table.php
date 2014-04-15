<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // run "php artisan migrate:make create_account_table"
        Schema::create('account', function (Blueprint $table)
        {
            $table->increments('user_id');
            $table->string('account_id', 100);
            $table->string('account_password', 100);
            $table->string('account_name', 100);
            $table->integer('sex')->default(0);
            $table->boolean('administrator')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('account');
    }
}

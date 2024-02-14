<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsNameLastnameHasCriminalRecord extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasColumns('users',['lastname','has_criminal_record'])){
            Schema::table('users', function (Blueprint $table){
                $table->string('lastname');
                $table->boolean('has_criminal_record')->default(false);
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasColumns('users',['lastname','has_criminal_record'])){
            Schema::table('users', function (Blueprint $table){
                $table->dropColumn(['lastname','has_criminal_record']);
            });
        }
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPassportToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('passport')->after('Adress')->nullable();
            $table->string('issuedBy')->after('passport')->nullable();
            $table->string('dateOfIssue')->after('issuedBy')->nullable();
            $table->string('unitCode')->after('dateOfIssue')->nullable();
            $table->string('placeOfRegistration')->after('unitCode')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}

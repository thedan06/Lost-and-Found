<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_name')->after('name');
            $table->string('last_name')->after('first_name');

            $table->bigInteger('phone_number')->comment('Phone Number')->after('email');
            $table->text('location')->nullable()->comment('Location');
            $table->string('gender', 10)->nullable()->comment('Gender')->after('phone_number');
            $table->text('description')->nullable()->comment('Description (if any)');
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
            $table->dropColumn(['first_name', 'last_name', 'phone_number', 'location', 'gender', 'description']);
        });
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMoreColumnsToItemCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('item_category', function (Blueprint $table) {
            $table->string('created_by')->after('description');
            $table->timestamps();

            $table->dropColumn(['create_date']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('item_category', function (Blueprint $table) {
            $table->dateTime('create_date');
            $table->dropColumn(['created_by', 'created_at', 'updated_at']);
        });
    }
}

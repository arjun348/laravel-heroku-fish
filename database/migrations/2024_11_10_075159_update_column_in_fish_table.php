<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('fishes', function (Blueprint $table) {
            $table->renameColumn('image1', 'image');
        });
    }

    public function down()
    {
        Schema::table('fishes', function (Blueprint $table) {
            $table->renameColumn('image', 'image1');
        });
    }
};

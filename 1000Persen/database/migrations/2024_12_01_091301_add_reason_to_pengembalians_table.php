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
        Schema::table('pengembalians', function (Blueprint $table) {
            $table->text('reason')->nullable()->after('denda');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('pengembalians', function (Blueprint $table) {
            $table->dropColumn('reason');
        });
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BarangkeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('barangkeluar')) {
            Schema::create('barangkeluar', function (Blueprint $table) {
                $table->id();
                $table->date('tgl_keluar')->notNull();
                $table->smallInteger('qty_keluar')->notNull()->default(1);
                $table->unsignedBigInteger('barang_id')->notNull();
                $table->timestamps();
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
        Schema::dropIfExists('barangkeluar');
    }
}

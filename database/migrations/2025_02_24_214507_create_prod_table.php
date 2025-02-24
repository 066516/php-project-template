<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            //
            $table->id();
            $table->string('name');
            $table->string(column: 'description');
            $table->decimal('price', 8, 2);
            $table->integer('stock');
            $table->string('status')->check(['available', 'unavailable']);
            $table->string('image');
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
        Schema::table('product', function (Blueprint $table) {
            //
            Schema::dropIfExists('product');
            
        });
    }
};

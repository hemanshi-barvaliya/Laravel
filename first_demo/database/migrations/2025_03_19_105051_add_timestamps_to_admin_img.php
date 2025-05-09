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
        Schema::table('admin_img', function (Blueprint $table) {
            $table->timestamps(); 
        });
    }
    
    public function down()
    {
        Schema::table('admin_img', function (Blueprint $table) {
            $table->dropColumn(['created_at', 'updated_at']);
        });
    }
        
};

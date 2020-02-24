<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyCoordinatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_coordinator', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_id');
            $table->string('user_id');
            $table->timestamps();
        });
        Schema::table('organizations', function (Blueprint $table){
            $table->foreign('user_id')->references('id')->on('users')->onCascade('delete');
            $table->foreign('company_id')->references('id')->on('company')->onCascade('delete');
          });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_coordinator');
    }
}

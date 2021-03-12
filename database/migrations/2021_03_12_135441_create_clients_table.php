<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->longText("description");
            $table->string("business_name");
            $table->string("legal_status");
            $table->float("capital");
            $table->string("siret");
            $table->string("naf_code");
            $table->string("country");
            $table->text("adress");
            $table->string("postal_code");
            $table->string("city");
            $table->foreignId("user_id")->constrained("users");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}

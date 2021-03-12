<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('manager_name');
            $table->string('manager_surname');
            $table->string('phone_number');
            $table->string('manager_email');
            $table->string('title');
            $table->longText('description');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->string('status');
            $table->integer('days_sold');
            $table->foreignId("client_id")->constrained("clients");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}

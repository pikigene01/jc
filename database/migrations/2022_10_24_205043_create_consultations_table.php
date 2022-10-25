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
        Schema::enableForeignKeyConstraints();

        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->date('Date');
            $table->timestamp('time');
            $table->text('message');
            $table->unsignedBigInteger('Consultant_id')->unsigned();
            $table->unsignedBigInteger('customer_id')->unsigned();
            // $table->foreign('Consultant_id')
            // ->references('id')->on('consultants')
            // ->onDelete('cascade');
            $table->foreignId('Admin_id')
            ->references('id')->on('adminstrators')
            ->onDelete('cascade');
            // $table->foreign('customer_id')
            // ->references('id')->on('customers')
            // ->onDelete('cascade');
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

        Schema::dropIfExists('consultations');
    }
};

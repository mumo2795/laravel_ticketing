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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->nullable();
            $table->string('ticket_type')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('warehouse_id')->nullable();
            $table->string('location')->nullable();
            $table->string('category')->nullable();
            $table->string('sub_category')->nullable();
            $table->text('body')->nullable();
            $table->string('file_name')->nullable();
            $table->boolean('approval')->nullable();
            $table->boolean('has_approved')->nullable();
            $table->string('approver')->nullable();
            $table->timestamp('date_created')->nullable();
            $table->datetime('date_approved')->nullable();
            $table->datetime('date_completed')->nullable();
            $table->integer('duration')->nullable();
            $table->string('status')->nullable();
            $table->text('remark')->nullable();
            $table->string('closed_by')->nullable();

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
        //
    }
};

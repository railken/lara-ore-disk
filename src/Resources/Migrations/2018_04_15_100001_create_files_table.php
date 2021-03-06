<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ore_files', function ($table) {
            $table->increments('id');
            $table->integer('disk_id')->unsigned();
            $table->foreign('disk_id')->references('id')->on('ore_disks');
            $table->string('path');
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('ext')->nullable();
            $table->string('content_type')->nullable();
            $table->string('checksum');
            $table->string('access')->default('public');
            $table->string('permission')->nullable();
            $table->timestamp('expire_at')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('ore_files');
    }
}

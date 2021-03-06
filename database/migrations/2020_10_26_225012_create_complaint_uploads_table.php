<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintUploadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaint_uploads', function (Blueprint $table) {
            $table->unsignedBigInteger('complaint_id');
            $table->foreign('complaint_id')->references('id')->on('complaints')->onDelete('cascade');
            $table->string('affidavit');
            $table->string('passport');
            $table->string('others');
            $table->string('month');
            $table->string('year');
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
        Schema::dropIfExists('complaint_uploads');
    }
}

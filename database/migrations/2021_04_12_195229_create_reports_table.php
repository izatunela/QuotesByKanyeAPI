<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string("url");
            $table->string("content_type");
            $table->integer("http_code"); 
            $table->integer("header_size"); 
            $table->integer("request_size"); 
            $table->integer("filetime"); 
            $table->integer("ssl_verify_result"); 
            $table->integer("redirect_count"); 
            $table->float("total_time"); 
            $table->float("namelookup_time"); 
            $table->float("connect_time"); 
            $table->float("pretransfer_time"); 
            $table->float("size_upload"); 
            $table->float("size_download"); 
            $table->float("speed_download"); 
            $table->float("speed_upload"); 
            $table->float("download_content_length");
            $table->float("upload_content_length"); 
            $table->float("starttransfer_time"); 
            $table->float("redirect_time"); 
            $table->string("redirect_url"); 
            $table->string("primary_ip"); 
            $table->integer("primary_port"); 
            $table->string("local_ip"); 
            $table->integer("local_port"); 
            $table->integer("http_version"); 
            $table->integer("protocol"); 
            $table->integer("ssl_verifyresult"); 
            $table->string("scheme");
            $table->integer("appconnect_time_us");
            $table->integer("connect_time_us"); 
            $table->integer("namelookup_time_us"); 
            $table->integer("pretransfer_time_us"); 
            $table->integer("redirect_time_us");
            $table->integer("starttransfer_time_us"); 
            $table->integer("total_time_us"); 
            $table->string("appconnect_time"); 
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
        Schema::dropIfExists('reports');
    }
}

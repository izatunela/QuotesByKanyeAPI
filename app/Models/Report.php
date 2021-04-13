<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        "url" ,
        "content_type" ,
        "http_code" ,
        "header_size" ,
        "request_size" ,
        "filetime" ,
        "ssl_verify_result" ,
        "redirect_count" ,
        "total_time" ,
        "namelookup_time" ,
        "connect_time" ,
        "pretransfer_time" ,
        "size_upload" ,
        "size_download" ,
        "speed_download" ,
        "speed_upload" ,
        "download_content_length" ,
        "upload_content_length" ,
        "starttransfer_time" ,
        "redirect_time" ,
        "redirect_url" ,
        "primary_ip" ,
        "primary_port" ,
        "local_ip" ,
        "local_port" ,
        "http_version" ,
        "protocol" ,
        "ssl_verifyresult" ,
        "scheme" ,
        "appconnect_time_us" ,
        "connect_time_us" ,
        "namelookup_time_us" ,
        "pretransfer_time_us" ,
        "redirect_time_us" ,
        "starttransfer_time_us" ,
        "total_time_us" ,
        "appconnect_time" ,
        "created_at",
        "updated_at"
    ];
}

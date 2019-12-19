<?php
/**
 * Created by PhpStorm.
 * User: anasi
 * Date: 9/12/2019
 * Time: 12:37 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Codes extends Model{
    protected $table = 'it_codes';
    protected $primaryKey = 'code_id';
    protected $fillable = [
        'code', 'name', 'description'
    ];
}
<?php
/**
 * Created by PhpStorm.
 * User: anasi
 * Date: 9/12/2019
 * Time: 11:48 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class User_details extends Model{
    /**
     * primaryKey
     *
     * @var integer
     * @access protected
     */
//    protected $primaryKey = null;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
//    public $incrementing = false;


    protected $table = 'user_detail';
    protected $fillable = [
        'user_id', 'code_id', 'value'
    ];
    public $timestamps = false;
}
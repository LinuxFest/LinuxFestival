<?php
/**
 * Created by IntelliJ IDEA.
 * User: Amir
 * Date: 5/10/2016
 * Time: 9:25 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;
use Moloquent\Eloquent\Model as Moloquent;

Class LiveMessage extends Moloquent {
    protected $table = 'live_messages';
    protected $guarded = [];
}
<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Travel
 * @package App\Models
 * @version October 28, 2021, 10:38 am UTC
 *
 * @property string $Place
 * @property string $Country
 * @property integer $Zip code
 * @property string $date
 */
class Travel extends Model
{
    

    use HasFactory;

    public $table = 'travel';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'Place',
        'Country',
        
        'date'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'Place' => 'string',
        'Country' => 'string',
        
        'date' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'Place' => 'required|string|max:255',
        'Country' => 'required|string|max:255',
    
        'date' => 'required',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}

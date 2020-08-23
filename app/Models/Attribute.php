<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    /**
    * @var string
    */
    protected $table = 'attributes';

    /**
    * @var array
    */
    protected $fillable = [
    	'code', 'name', 'frontend_type', 'is_fillable', 'is_required'
    ];

    /**
    * @var array
    */
    protected $casts = [
    	'is_filterable'		=>	'boolean',
    	'is_required'		=>	'boolean'
    ];

    /**
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
    public function values(){
    	// $attribute->values
    	return $this->hasMany(AttributeValue::class);
    }

}
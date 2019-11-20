<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attribute guarded the ID.
     *
     * @var array
     */
    protected $guarded = ['id', 'name'];

	/**
     * Relationships with another Models, and too in the Database
     */
    public function invoices()
    {
    	return $this->hasMany('App\Invoice');
    }
}

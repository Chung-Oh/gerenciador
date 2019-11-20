<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    /**
     * The attribute guarded the ID.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'category_id'];

    /**
     * The attributes that are dates.
     *
     * @var array
     */
    protected $dates = ['created_at'];

    /**
     * Relationships with another Models, and too in the Database
     */
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    /**
     * Defining An Accessor, Date Handler
     */
    public function getCreatedAtAttribute()
    {
        $date = $this->attributes['created_at'];
        $time = substr($date, 11, 3) . substr($date, 14, 3) . substr($date, 17, 2) . ' - ';
        $date = substr($date, 8, 2) . '/' . substr($date, 5, 2) . '/' . $year = substr($date, 0, 4);

        return $time . $date;
    }
}

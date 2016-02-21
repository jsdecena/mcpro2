<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'province_id'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * Get the post that owns the comment.
     */
    public function province()
    {
        return $this->belongsTo('App\Models\Province');
    }    

    /**
     * Get the comments for the blog post.
     */
    public function zones()
    {
        return $this->hasMany('App\Models\Area');
    }

    /**
     * Get the comments for the blog post.
     */
    public function barangays()
    {
        return $this->hasMany('App\Models\Barangay');
    }    
}

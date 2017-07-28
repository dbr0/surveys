<?php

namespace dbr0\surveys;

/**
 * @property $name
 * @property $slug
 * @property $description
 * */
use Illuminate\Database\Eloquent\Model;
class Survey extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
<<<<<<< HEAD
    protected $table = 'dbr0_surveys';
=======
    protected $table = 'surveys';
>>>>>>> d8d600ee9c95bb909f59d8b8a1828440da662690

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'parent_id',
    ];

    /**
     * Get Parent this Survey belongs to
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo('App\\'.config('dbr0-surveys.main.owner_model') ?: 'User','parent_id');
    }
}

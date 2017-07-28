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
    protected $table = 'dbr0_surveys';

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
        return $this->belongsTo(config('dbr0-surveys.main.owner_model') ? str_replace('/','\\', config('dbr0-surveys.main.owner_model')) : 'App\\User','parent_id');
    }
}
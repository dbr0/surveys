<?php

namespace dbr0\surveys;

/**
 * @property $survey_id
 * @property $type_id
 * @property $option_id
 * */
use Illuminate\Database\Eloquent\Model;

class SurveyConnector extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dbr0_surveys_connectors';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'survey_id',
        'type_id',
        'option_id',
    ];

    /**
     * Get Survey of this Connector
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function survey()
    {
        return $this->belongsTo('App\\Survey','survey_id');
    }
}
<?php

namespace dbr0\surveys;

/**
 * @property $question
 * @property $connector_id
 * */
use Illuminate\Database\Eloquent\Model;

class SurveyQuestion extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dbr0_surveys_questions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question',
        'connector_id',
    ];

    /**
     * Get Connector of this Question
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function connector()
    {
        return $this->belongsTo('App\\SurveyConnector','connector_id');
    }
}
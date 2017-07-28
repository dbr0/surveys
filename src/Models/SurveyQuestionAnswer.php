<?php

namespace dbr0\surveys;

/**
 * @property $question
 * @property $connector_id
 * */
use Illuminate\Database\Eloquent\Model;

class SurveyQuestionAnswer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'dbr0_surveys_questions_answers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'answer',
        'question_id',
        'user_id',
    ];

    /**
     * Get Question of this Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function question()
    {
        return $this->belongsTo('App\\SurveyQuestion','question_id');
    }

    /**
     * Get Question of this Answer
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\\User','user_id');
    }
}
<?php

namespace dbr0\surveys;

class SurveyOwner
{
    /**
     * Get Surveys
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveys()
    {
        return $this->hasMany('dbr0\surveys\Survey');
    }
}

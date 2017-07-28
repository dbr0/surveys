<?php

namespace dbr0\surveys;

trait SurveyOwner
{
    /**
     * Get Surveys
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function surveys()
    {
        return $this->hasMany('dbr0\surveys\Survey','parent_id');
    }
}

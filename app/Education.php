<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model {
    protected $table = 'educations';

    protected $hidden = ['user_id', 'school_id'];

    public function school() {
        return $this->belongsTo('App\School');
    }

    public function scopeUserLatestOneSchool($query) {
        $query
            ->orderBy('experiences.finished_at', 'desc')
            ->first();
    }
}

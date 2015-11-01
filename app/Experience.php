<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model {
    protected $table = 'experiences';

    protected $hidden = ['user_id', 'company_id'];

    public function company() {
        return $this->belongsTo('App\Company');
    }

    public function scopeUserLatestOneCompany($query) {
        $query
            ->orderBy('experiences.finished_at', 'desc')
            ->first();
    }
}

<?php

namespace App\Http\Controllers;

use App\Repositories\EducationsRepository;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class EducationsController extends Controller
{
    protected $repository;

    public function __construct(EducationsRepository $repository) {
        $this->repository = $repository;
    }

    public function getDetail($id) {
        return $this->repository->scopeQuery(function($query) {
            return $query->leftJoin('schools', 'schools.id', '=', 'educations.school_id');
        })->find($id)->withHidden('degree');
        return $this->repository->find($id);
    }
}

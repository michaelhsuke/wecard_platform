<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\UserRequest;
use App\Repositories\UsersRepository;
use App\Repositories\UsersRepositoryEloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class UsersController extends Controller {

    protected $repository;

    public function __construct(UsersRepository $repository) {
        $this->repository = $repository;
    }

    public function getExperiences() {
        return $this->repository->with('experiences')->paginate();
    }

    public function getEducations() {
        return $this->repository->with('educations')->paginate();
    }

    public function getList() {
        dd(Auth::user());

        return $this->repository->scopeQuery(function ($query) {
            return $query->orderBy('created_at', 'DESC');
        })->paginate();
    }

    public function postCreate(Request $request) {
        $validator = Validator::make($request->all(), ['name' => 'required', 'phone' => 'required']);
        if ($validator->fails()) {
            return redirect('http://www.baidu.com');
        }

        dd($request->all());
        dd(Input::all());
    }

    public function postFoo() {
        dd(Input::all());
    }

    public function getFoo() {
        echo csrf_token();
    }

    public function getDetail($id) {
        return $this->repository->find($id);
    }

    public function getBio($id) {
        return $this->repository
            ->with(['LatestOneEducation', 'LatestOneExperience'])
            ->find($id);
    }
}

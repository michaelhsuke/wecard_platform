<?php
/**
 * Created by PhpStorm.
 * User: xuke
 * Date: 11/1/15
 * Time: 10:09 AM
 */

namespace App\Repositories;


use Prettus\Repository\Eloquent\BaseRepository;
use App\User as User;

class UsersRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model() {
        return User::class;
    }
}
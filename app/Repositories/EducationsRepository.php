<?php
/**
 * Created by PhpStorm.
 * User: xuke
 * Date: 11/1/15
 * Time: 11:47 AM
 */

namespace App\Repositories;


use App\Education;
use Prettus\Repository\Eloquent\BaseRepository;

class EducationsRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model() {
        return Education::class;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: dennys
 * Date: 25/11/15
 * Time: 21:58
 */

namespace CodeProject\Repositories;

use CodeProject\Entities\Client;
use Prettus\Repository\Eloquent\BaseRepository;

class ClientRepositoryEloquent extends BaseRepository implements ClientRepository
{

    public function model()
    {
        return Client::class;
    }

}
<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use App\Modules\CorporatePartnership\Models\BoardOfDirector as Board;

class BoardOfDirectorRepository extends BaseRepository
{
    /**
     * The Model name.
     *
     * @var \Illuminate\Database\Eloquent\Model;
     */
    private $board;

    public function __construct(Board $board)
    {
        $this->model = $board;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getAllByAttributes(array $attributes, $orderBy = '', $sort = '')
    {
        return $this->model->orderBy($orderBy, $sort)->get();
    }

    public function getByAttributes(array $attributes)
    {
        return $this->model->where($attributes)->first();
    }

    /**
     * Paginate the given query.
     *
     * @param The number of models to return for pagination $n integer
     *
     * @return mixed
     */
    public function getPaginate($n)
    {
        return $this->model->paginate($n);
    }

    /**
     * Create a new model and return the instance.
     *
     * @param array $inputs
     *
     * @return Model instance
     */
    public function store(array $inputs)
    {
        return $this->model->create($inputs);
    }

    /**
     * FindOrFail Model and return the instance.
     *
     * @param int $id
     *
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection
     *
     * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
     */
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Update the model in the database.
     *
     * @param $id
     * @param array $inputs
     */
    public function update($id, array $inputs)
    {
        return $this->getById($id)->update($inputs);
    }

    /**
     * Delete the model from the database.
     *
     * @param int $id
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        return $this->getById($id)->delete();
    }
}

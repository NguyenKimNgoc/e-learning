<?php
namespace App\Reponsitories;

use Illuminate\Support\Facades\DB;
use App\Reponsitories\RepositoryInterface;

abstract class BaseRepository implements RepositoryInterface {

    /**
     * @var $model
     * @var $tableName
     */
    protected $model;
    
    protected $tableName;
    
    /**
     * EloquentRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
        
        $this->tableName = $this->model->getTable();
    }

    /**
     * set reponsitory instant
     */
    public function setModel()
    {
        $this->model = app()->make(
            $this->getModel()
        );
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }
    public function getDistinct($columns = array('*') ){

        return $this->model->distinct()->get($columns);
    }

    /**
     * @param array $columns
     * @return mixed
     */
    public function all($orderBy = 'id desc',$columns = array('*'))
    {
        return $this->model->orderByRaw($orderBy)->get($columns);
    }

    /**
     * @param int $perPage Per page
     * @param array $columns Array Columns
     * @return array Return data paginate
     */
    public function paginate($perPage = 15, $columns = array('*'))
    {
        return $this->model->paginate($perPage, $columns);
    }

    /**
     * @param array $data Array data
     * @return void
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * @param array $data Array data
     * @param $id ID
     * @param string $attribute Attribute
     * @return void
     */
    public function update(array $data, $id, $attribute = "id")
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }
    public function updateName(array $data, $id, $attribute = "name")
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }
    
    /**
     * @param array $data Array data
     * @param $id ID
     * @param string $attribute Attribute
     * @return void
     */
    public function updateMultiCondition(array $data, $conditions)
    {
        return $this->model->where($conditions)->update($data);
    }

    /**
     * @param $id ID
     * @return void
     */
    public function delete($id)
    {
        return $this->model->destroy($id);
    }
    
    /**
     * @param $id ID
     * @return void
     */
    public function deleteAll()
    {
        DB::table($this->model->getTable())->delete();
    }
   public function deleteWhere($whereData = array())
    {
       $this->model->where($whereData)->delete();
    }    

    /**
     * @param $id ID
     * @param array $columns Columns
     * @return array Return array
     */
    public function find($id, $columns = array('*'))
    {
        return $this->model->find($id, $columns);
    }

    /**
     * @param $attribute Attribute
     * @param $value Value
     * @param array $columns Columns
     * @return array Array
     */
    public function findBy($attribute, $value, $columns = array('*'))
    {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    public function findByReturnArray($attribute, $value, $columns = array('*'))
    {
        return $this->model->where($attribute, '=', $value)->get($columns);
    }

    public function findByReturnArrayPlug($attribute, $value, $pluck, $columns = array('*') )
    {
        return $this->model->where($attribute, '=', $value)->get($columns)->pluck($pluck);
    }

    public function getManyWhereOrder($whereData = array(), $select=array("*"),  $orderBy = "id asc")
    {

        return $this->model
            ->where($whereData)
            ->select($select)
            ->orderByRaw($orderBy)
            ->get();
    }
    public function getManyWhereOrderLimit($whereData = array(), $select=array("*"))
    {
        return $this->model
            ->where($whereData)
            ->select($select)
            ->first();
    }
    public function getManyWhereOrderPagination($whereData = array(), $select=array("*"),$orderBy = "id desc", $perpage = 10)
    {
        return $this->model
            ->where($whereData)
            ->select($select)
            ->orderByRaw($orderBy)
            ->paginate($perpage);
    }
    
    public function getCountConditions($conditions = []){
        return $this->model
            ->where($conditions)
            ->count();
    }
}

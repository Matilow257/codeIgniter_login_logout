<?php  

namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model{

protected $table = 'codegnit';
protected $primaryKey = 'id' ;

protected $useAutoIncrement = true;
protected $returnType = 'array';//'object';

protected $useSoftDeletes = true;
protected $allowedFields = ['name', 'email', 'password']; //  'created_at', 'updated_at', 'deleted_at
protected $useTimestamps = true; 
protected $createdField = 'created_at'; 
protected $updatedField = 'updated_at';
protected $deletedField = 'deleted_at';

protected $validationRules = [];
protected $validationMessages = [];
protected $skipValidation = false;


}
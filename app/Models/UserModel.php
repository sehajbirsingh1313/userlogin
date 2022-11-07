<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
 {

	protected $table ="user";
	protected $primaryKey = 'id';
	protected $DBGroup='default';
	protected $allowedFields = ['name','email','contact','profile_img','password'];
	protected $validationRules = [
		'name' =>'required|alpha_space|min_length[3]',
		'email'=>'required|valid_email|is_unique[user.email]',
		'contact'=>'required|numeric|min_length[10]',
		'profile_img'=>'required',
		'password'=>'required|min_length[8]',
		'confirm_password'=>'required_with[password]|matches[password]'
	];
	protected $beforeInsert = ['hashPassword'];
	protected $useTimestamps = true;
	protected $createdField = 'created_at';
 	function isValidFileType($filetype) {
		$types=['image/gif','image/png','image/jpg','image/jpeg'];
		return in_array($filetype, $types)?true:false;
	}
 	function hashPassword($data) {
		$data['data']['password'] = password_hash($data['data']['password'], PASSWORD_DEFAULT);
		return $data;
	}
	function isAlreadyRegister($id){
        return $this->getWhere(['id'=>$id])->getRowArray()>0?true:false;
    }
    function updateUserData($data ,$id){
        return $this->update(['login_oauth_id'=>$id], $data);
    }
    function insertUserData($data){
        return $this->insert($data);
    }
 }
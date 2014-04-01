<?php
// app/Model/User.php
App::uses('SimplePasswordHasher', 'Controller/Component/Auth');
class User extends AppModel {
	public $name = 'User';
	public $displayField = 'name';
	public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );

	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}
	public $hasMany = array(
		'Post'=>array(
			'className'=>'Post',)
	);		


/**
	public function beforeSave($options = array()) {
		if (isset($this->data[$this->alias]['password'])) {
			$passwordHasher = new SimplePasswordHasher();
			$this->data[$this->alias]['password'] = $passwordHasher->hash(
				$this->data[$this->alias]['password']
			);
		}
		return true;
	}
	
	public $name = 'User';
	public $displayField = 'name';
	public $validate = array(
		'name'=>array(
			'Please enter your name.'=>array(
				'rule'=>'notEmpty',
				'message'=>'Please enter your name.'
			)
		),	
		
		'email'=>array(
			'Valid email'=>array(
				'rule'=>array('email'),
				'message'=>'Please enter a valid email address'
			)
		),
				
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'A username is required'
            ),
			'That username has already been taken'=>array(
				'rule'=>'isUnique',
				'message'=>'That username has already been taken.'
			)
        ),		
		
        'password' => array(
            'Not empty' => array(
                'rule' => array('notEmpty'),
                'message' => 'A password is required'
            )
        ),
		
		'Match passwords' => array(
			'rule' => array('matchPasswords'),
			'message' => 'Passwords do not match'
		),
		
		'confirm_password' => array(
            'Not empty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Passwords do not match, please confirm'
            )
        ),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
        )
    );
	public function matchPasswords($data){
		if($data['password'] == $this ->data ['User'] ['confirm_password']){
			return true;
		}
		$this -> invalidate('confirm_password', 'Passwords does not match');
			return false;
	}
*/	
}
?>


<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 * @property Desire $Desire
 * @property Education $Education
 * @property Featuredcompany $Featuredcompany
 * @property Featuredjob $Featuredjob
 * @property Personal $Personal
 * @property Post $Post
 * @property Professional $Professional
 * @property Refer $Refer
 */
class User extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

/**
 * Validation rules
 *
 * @var array
 */

	public $actsAs = array(
        'Upload.Upload' => array(
            'photo' => array(
            	'rootDir' => ROOT,
            	'path' => '{ROOT}{DS}app{DS}webroot{DS}files{DS}{model}{DS}{field}{DS}',
                'fields' => array(
                    'dir' => 'photo_dir',
                    'type' => 'photo_type',
                    'size' => 'photo_size',
                )
            )
        ),
        'Search.Searchable'
    );

    public $filterArgs = array(
        'username' => array(
            'type' => 'like',
            'field' => 'username'
        ),
        'firstname' => array(
            'type' => 'like',
            'field' => 'firstname'
        ),
        'active' => array(
            'type' => 'value'
        )
    );

	public $validate = array(
		'username' => array(
			'email' => array(
				'rule' => array('email'),
				'message' => 'Enter valid email address',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'firstname' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'lastname' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'password' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'photo' => array(
            'uploadError' => array(
                'rule' => array('uploadError'),
                'message' => 'The profile image upload failed.',
                'allowEmpty' => TRUE,
            ),
            'mimeType' => array(
                'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
                'message' => 'Please only upload images (gif, png, jpg).',
                'allowEmpty' => TRUE,
            ),
            'fileSize' => array(
                'rule' => array('fileSize', '<=', '1MB'),
                'message' => 'Profile image must be less than 1MB.',
                'allowEmpty' => TRUE,
            ),
        ),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Desire' => array(
			'className' => 'Desire',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Education' => array(
			'className' => 'Education',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Featuredcompany' => array(
			'className' => 'Featuredcompany',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Featuredjob' => array(
			'className' => 'Featuredjob',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Personal' => array(
			'className' => 'Personal',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Post' => array(
			'className' => 'Post',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Professional' => array(
			'className' => 'Professional',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Refer' => array(
			'className' => 'Refer',
			'foreignKey' => 'user_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}

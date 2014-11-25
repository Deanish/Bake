<?php
App::uses('AppModel', 'Model');
App::import('Model', 'Interest');
/**
 * Candidate Model
 *
 * @property User $User
 */
class Candidate extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'title';

/**
 * Validation rules
 *
 * @var array
 */

	public $filterArgs = array(
        'title' => array(
            'type' => 'like',
            'field' => array('title', 'skills', 'qualification')
        ),
        'location' => array(
            'type' => 'like',
            'field' => 'location'
        ),
        'experience' => array(
            'type' => 'like',
            'field' => 'experience'
        )
    );

    public $actsAs = array(
		'Search.Searchable'
	);

	public $validate = array(
		
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Interest' => array(
			'className' => 'Interest',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);	

/*	public $hasMany = array(
		'Interest' => array(
			'className' => 'Interest',
			'foreignKey' => 'post_id',
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
	);*/
}

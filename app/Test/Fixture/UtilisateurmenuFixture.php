<?php
/**
 * UtilisateurmenuFixture
 *
 */
class UtilisateurmenuFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'utilisateur_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'menu_id' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'utilisateur_id' => 1,
			'menu_id' => 1
		),
	);

}

<?php
class UserFixture extends CakeTestFixture {
	
	public $import = array('model' => 'User');
	
	public $records = array(
		array(
			'id' => 'user-1',
			'username' => 'user-1'
		),
		array(
			'id' => 'user-2',
			'username' => 'user-2'
		)
	);
}
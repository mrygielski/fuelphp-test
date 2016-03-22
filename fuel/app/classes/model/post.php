<?php

/* php oil g model post bookname:varchar[50] bookauthor:varchar[50] */

class Model_Post extends \Orm\Model
{
	protected static $_properties = array(
		'id',
		'bookname',
		'bookauthor',
		'created_at',
		'updated_at',
	);

	protected static $_observers = array(
		'Orm\Observer_CreatedAt' => array(
			'events' => array('before_insert'),
			'mysql_timestamp' => false,
		),
		'Orm\Observer_UpdatedAt' => array(
			'events' => array('before_update'),
			'mysql_timestamp' => false,
		),
	);

	protected static $_table_name = 'posts';

}

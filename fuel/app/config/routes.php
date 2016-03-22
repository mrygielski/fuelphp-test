<?php
return array(
		'_root_'  => 'books/index',
		'success'  => 'books/success',
		'error'  => 'books/error',
		'list'  => 'books/list',
		'add' => array(array('POST', new Route('books/add'))),
);

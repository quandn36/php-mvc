<?php

ob_start();
session_start();


/**
 *	db config
 * 	Các thông tin cần thiết để kết nối database
 *	host,port,username,password,dbname
 */

define( 'HOST','localhost' );
define( 'PORT','3306' );
define( 'DBNAME','beanvnco_db' );
define( 'USERNAME','root' );
define( 'PASSWORD','12345' );
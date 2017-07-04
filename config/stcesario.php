<?php


class Settings 
{
	
	function __construct()
	{
		$this->env = $_SERVER['SERVER_NAME'];
	}



	public static function templatesPath()
	{
		return '../resources/views/';
	}


	public static function basePath($file = '')
	{
		return require_once(dirname(__FILE__) . '/' . static::templatesPath() . "base/{$file}");
	}	


	public static function componentPath($file = '')
	{
		return require_once(dirname(__FILE__) . '/' . static::templatesPath() . $file);
	}

}
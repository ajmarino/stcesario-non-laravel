<?php




/**
*
*/
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
		return static::templatesPath() . "base/{$file}";
	}	


	public static function componentPath($file = '')
	{
		return static::templatesPath() . $file;
	}

}
	// /**
	//  * Config Variables
	//  */
	// $env = $_SERVER['SERVER_NAME'];

	
	// $templates = "../templates/";
	// $base      = $templates . "base/";
	// $component = $templates . "components/";
	// $content   = $templates . "components/content/";






	/**
	 * Helpful Debug Functions
	 */
	// function pp($data) {
	// 	echo '<pre>';
	// 	print_r($data);
	// 	echo '</pre>';

	// }
	// function el($data, $label="Error Log") {
	// 	error_log($label.' :'.print_r($data,1));
	// }
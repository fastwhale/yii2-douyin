<?php

	namespace fastwhale\yii2\douyin\components;

	require_once "utils/HttpUtils.php";

	/**
	 * Class HttpUtils
	 * @package fastwhale\yii2\weWork\components
	 */
	class HttpUtils extends \HttpUtils
	{
		/**
		 * Returns the fully qualified name of this class.
		 * @return string The fully qualified name of this class.
		 */
		public static function className ()
		{
			return get_called_class();
		}
	}
<?php defined('SYSPATH') OR die('No direct script access.');

/**
 * Addition of some laravel Text helper functions
 */
class Text extends Kohana_Text {
	/**
	 * Determine if a string starts with a given needle.
	 *
	 * @param  string  $haystack
	 * @param  string|array  $needles
	 * @return bool
	 */
	public static function starts_with($haystack, $needles)
	{
		foreach ((array) $needles as $needle)
		{
			if (strpos($haystack, $needle) === 0) return true;
		}

		return false;
	}

	/**
	 * Determine if a given string ends with a given needle.
	 *
	 * @param string $haystack
	 * @param string|array $needles
	 * @return bool
	 */
	public static function ends_with($haystack, $needles)
	{
		foreach ((array) $needles as $needle)
		{
			if ($needle == substr($haystack, strlen($haystack) - strlen($needle))) return true;
		}

		return false;
	}

	/**
	 * Return the length of the given string.
	 *
	 * @param  string  $value
	 * @return int
	 */
	public static function length($value)
	{
		return mb_strlen($value);
	}

	/**
	 * Determine if a given string contains a given sub-string.
	 *
	 * @param  string        $haystack
	 * @param  string|array  $needle
	 * @return bool
	 */
	public static function contains($haystack, $needle)
	{
		foreach ((array) $needle as $n)
		{
			if (strpos($haystack, $n) !== false) return true;
		}

		return false;
	}
}

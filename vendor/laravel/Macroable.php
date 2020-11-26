<?php  

namespace Laravel;

trait Macroable
{
	private static $macros = [];

	public function hasMacro($method)
	{
		return isset(static::$macros[$method]);
	}

	public function macro($method, \Closure $macro)
	{
		static::$macros[$method] = $macro;
	}

	public function __call($method, array $arguments)
	{
		if (static::hasMacro($method)) {
			//var_dump(static::$macros[$method], $arguments);
			return call_user_func_array(
				static::$macros[$method]->bindTo($this, static::class), 
				$arguments
			);
		}
		throw new \BadMethodCallException("The method {$method} does no exist");
	}
}

?>
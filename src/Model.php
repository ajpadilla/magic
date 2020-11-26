<?php  

namespace Styde;

abstract class Model
{
	protected $attributes = [];

	public function __construct(array $attributes = [])
	{
		$this->fill($attributes);
	}	

	public function fill(array $attributes = [])
	{
		$this->attributes = $attributes;
	}

	public function getAttributes()
	{
		return $this->attributes;
	}

	public function getAttribute($name)
	{
		$value = $this->getAttributeValue($name);
		if ($this->hasGetMutator($name)) {
			return $this->mutateAttribute($name,$value);
		}
		return $value;
	}

	protected function hasGetMutator($name)
	{
		$method = 'get'.Str::studly($name).'Attribute';
		return method_exists($this, $method);
	}

	protected function mutateAttribute($name, $value)
	{
		return $this->{'get'.Str::studly($name).'Attribute'}($value);
	}

	public function getAttributeValue($name)
	{
		if (array_key_exists($name, $this->attributes)) 
		{
			return $this->attributes[$name];
		}

		return null;
	}

	public function setAttribute($name, $value)
	{
		$this->attributes[$name] = $value;
	}

	public function __set($name, $value)
	{
		$this->setAttribute($name,$value);
	}

	//retorna valores para una propiedad que es pasada en el array attributes
	public function __get($name)
	{
		return $this->getAttribute($name);
	}

	public function hasAttribute($name)
	{
		return isset($this->attributes[$name]);
	}

	public function __isset($name)
	{
		return $this->hasAttribute($name);
	}

	public function deleteAttribute($name)
	{
		unset($this->attributes[$name]);
	}

	public function __unset($name)
	{
		$this->deleteAttribute($name);
	}

}

?>
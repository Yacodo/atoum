<?php

namespace mageekguy\atoum\php;

class call
{
	protected $function = '';
	protected $arguments = null;
	protected $object = null;
	protected $decorator = null;

	public function __construct($function, array $arguments = null, $object = null)
	{
		$this->function = $function;
		$this->arguments = $arguments;
		$this->object = $object;

		$this->setDecorator(new call\decorator());
	}

	public function __toString()
	{
		return $this->decorator->decorate($this);
	}

	public function setFunction($function)
	{
		$this->function = $function;

		return $this;
	}

	public function getFunction()
	{
		return $this->function;
	}

	public function setArguments(array $arguments)
	{
		$this->arguments = $arguments;

		return $this;
	}

	public function getArguments()
	{
		return $this->arguments;
	}

	public function unsetArguments()
	{
		$this->arguments = null;

		return $this;
	}

	public function setObject($object)
	{
		$this->object = $object;

		return $this;
	}

	public function getObject()
	{
		return $this->object;
	}

	public function setDecorator(call\decorator $decorator)
	{
		$this->decorator = $decorator;

		return $this;
	}

	public function getDecorator()
	{
		return $this->decorator;
	}
}

?>

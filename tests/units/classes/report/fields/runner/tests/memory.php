<?php

namespace mageekguy\atoum\tests\units\report\fields\runner\tests;

use
	mageekguy\atoum
;

require_once __DIR__ . '/../../../../../runner.php';

abstract class memory extends atoum\test
{
	abstract public function testSetWithRunner();
}

?>

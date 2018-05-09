<?php

namespace Railken\LaraOre\Storage\Tests\Traits;

trait ApiTestCommonTrait
{
    public function commonTest($manager, $parameters)
    {   
        
        $result = $manager->create($parameters);
        $this->assertEquals(true, $result->ok());

        $resource = $result->getResource();

    }
}

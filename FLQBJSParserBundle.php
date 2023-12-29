<?php

namespace FL\QBJSParserBundle;

use FL\QBJSParserBundle\DependencyInjection\FLQBJSParserExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class FLQBJSParserBundle extends Bundle
{
    public function getContainerExtension(): FLQBJSParserExtension
    {
        if (null === $this->extension) {
            $this->extension = new FLQBJSParserExtension();
        }

        return $this->extension;
    }
}

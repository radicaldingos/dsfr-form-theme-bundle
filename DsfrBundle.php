<?php

namespace RadicalDingos\DsfrBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Bundle integrating "Système de Design de l'État" (DSFR) for use with the Symfony 4+ framework
 */
class DsfrBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
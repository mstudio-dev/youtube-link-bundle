<?php

use Contao\CoreBundle\ContaoCoreBundle;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class MstudioYoutubeLinkBundle extends Bundle
{
    public function getBundleDependencies(): array
    {
        return [
            ContaoCoreBundle::class
        ];
    }
}

<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

class EmbeddedContainer
{
    private $hoofdvestiging;
    private $eigenaar;

    public function __construct(Eigenaar $eigenaar, ?Vestiging $hoofdvestiging)
    {
        $this->hoofdvestiging = $hoofdvestiging;
        $this->eigenaar = $eigenaar;
    }

    public function getHoofdvestiging(): ?Vestiging
    {
        return $this->hoofdvestiging;
    }

    public function getEigenaar(): Eigenaar
    {
        return $this->eigenaar;
    }
}

<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model\Company;

class EmbeddedContainer
{
    /** @var Vestiging */
    private $hoofdvestiging;

    /** @var Eigenaar */
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

    public function toArray(): array
    {
        $hoofdvestigingArray = $this->hoofdvestiging ? $this->hoofdvestiging->toArray() : null;
        $eigenaarArray = $this->eigenaar->toArray();

        return [
            'hoofdvestiging' => $hoofdvestigingArray,
            'eigenaar' => $eigenaarArray,
        ];
    }
}

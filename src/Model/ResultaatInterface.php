<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

interface ResultaatInterface
{
    public function getVolgende(): ?string;
    public function getVorige(): ?string;
}

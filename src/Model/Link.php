<?php

declare(strict_types=1);

namespace Appvise\KvkApi\Model;

class Link
{
    private $rel;
    private $href;
    private $hreflang;
    private $media;
    private $title;
    private $type;
    private $deprecation;
    private $profile;
    private $name;

    public function __construct(
        ?string $rel,
        ?string $href,
        ?string $hreflang,
        ?string $media,
        ?string $title,
        ?string $type,
        ?string $deprecation,
        ?string $profile,
        ?string $name
    ) {
        $this->rel = $rel;
        $this->href = $href;
        $this->hreflang = $hreflang;
        $this->media = $media;
        $this->title = $title;
        $this->type = $type;
        $this->deprecation = $deprecation;
        $this->profile = $profile;
        $this->name = $name;
    }

    public function getRel(): ?string
    {
        return $this->rel;
    }

    public function getHref(): ?string
    {
        return $this->href;
    }

    public function getHreflang(): ?string
    {
        return $this->hreflang;
    }

    public function getMedia(): ?string
    {
        return $this->media;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function getDeprecation(): ?string
    {
        return $this->deprecation;
    }

    public function getProfile(): ?string
    {
        return $this->profile;
    }

    public function getName(): ?string
    {
        return $this->name;
    }
}

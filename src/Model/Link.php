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

    public function getRel()
    {
        return $this->rel;
    }

    public function getHref()
    {
        return $this->href;
    }

    public function getHreflang()
    {
        return $this->hreflang;
    }

    public function getMedia()
    {
        return $this->media;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getDeprecation()
    {
        return $this->deprecation;
    }

    public function getProfile()
    {
        return $this->profile;
    }

    public function getName()
    {
        return $this->name;
    }
}

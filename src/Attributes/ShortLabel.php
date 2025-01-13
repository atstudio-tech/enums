<?php

namespace ATStudio\Enums\Attributes;

use Attribute;

#[Attribute(Attribute::TARGET_CLASS_CONSTANT)]
class ShortLabel
{
    public function __construct(private readonly string $label) {}

    public function label(): string
    {
        return $this->label;
    }
}

<?php

namespace App\Entity;

interface EntityInterface
{
    public function toArray(): array;
    public function getId(): ?int;
}

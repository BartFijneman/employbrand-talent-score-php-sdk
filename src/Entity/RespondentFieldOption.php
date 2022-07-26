<?php

namespace EmploybrandTS\Entity;


class RespondentFieldOption extends AbstractEntity
{

    public ?int $id = null;

    public array $name = [];

    public ?int $from = null;

    public ?int $until = null;

    public array $options = [];

    public ?string $updatedAt = null;

    public ?string $createdAt = null;

}

<?php

namespace EmploybrandTS\Entity;


class RespondentFieldOption extends AbstractEntity
{

    public int $id;

    public array $name;

    public ?int $from;

    public ?int $until;

    public string $updatedAt;

    public string $createdAt;

}

<?php

namespace EmploybrandTS\Entity;


class RespondentField extends AbstractEntity
{

    public ?int $id = null;

    public array $name = [];

    public array $filterName = [];

    public ?string $type = null;

    public array $options = [];

    public ?string $updatedAt = null;

    public ?string $createdAt = null;


    public function build(array $parameters): void
    {
        parent::build($parameters);

        $this->options = \array_map(function ($entity) {
            return new RespondentFieldOption($entity);
        }, $parameters[ 'options' ]);
    }

}

<?php

namespace EmploybrandTS\Entity;


class RespondentField extends AbstractEntity
{

    public int $id;

    public array $name;

    public array $filterName;

    public string $type;

    public array $options;

    public string $updatedAt;

    public string $createdAt;


    public function build(array $parameters): void
    {
        parent::build($parameters);

        $this->options = \array_map(function ($entity) {
            return new RespondentFieldOption($entity);
        }, $parameters[ 'options' ]);
    }

}

<?php

namespace EmploybrandTS\Entity;


class Respondent extends AbstractEntity
{

    public int $id;

    public string $firstName;

    public ?string $lastName;

    public ?string $phone;

    public string $email;

    public bool $signedOff;

    public bool $personalDataAllowed;

    public string $type;

    public int $environmentId;

    public ?string $candidateSince;

    public ?string $candidateRejectedAt;

    public ?string $candidateInterviewedAt;

    public ?string $candidateAcceptedAt;

    public ?string $employeeSince;

    public ?string $employeeFunctionSince;

    public ?string $formerEmployeeSince;

    public ?string $personalDataAllowedAt;

    public ?string $signedOffAt;

    public bool $inactive;

    public ?string $inactiveSince;

    public ?string $expectedDeletionDate;

    public string $updatedAt;

    public string $createdAt;

    public array $data;

}

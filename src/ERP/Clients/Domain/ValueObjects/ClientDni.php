<?php

declare(strict_types=1);

namespace Medine\ERP\Clients\Domain\ValueObjects;

use Illuminate\Http\JsonResponse;
use Medine\ERP\Shared\Domain\ValueObjects\StringValueObject;

final class ClientDni extends StringValueObject
{
    protected $exceptionMessage = "Client dni can't be empty";
    protected $exceptionCode = JsonResponse::HTTP_BAD_REQUEST;

    public function __construct(string $value)
    {
        $this->notEmpty($value);

        parent::__construct($value);
    }
}

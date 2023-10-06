<?php

declare(strict_types=1);

namespace wjezowski\Library\StandardizedJsonResponses\Alert;

class AlertDto implements \JsonSerializable
{
    public function __construct(
        public readonly string $message,
        public readonly AlertSeverityEnum $alertSeverityEnum
    ) {}

    public function jsonSerialize(): object
    {
        return (object) [
            'message' => $this->message,
            'severity' => $this->alertSeverityEnum->name
        ];
    }
}
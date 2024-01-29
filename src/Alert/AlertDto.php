<?php

declare(strict_types=1);

namespace wjezowski\Library\StandardizedJsonResponses\Alert;

final readonly class AlertDto implements \JsonSerializable
{
    public function __construct(
        public string            $message,
        public AlertSeverityEnum $alertSeverityEnum
    ) {}

    public function jsonSerialize(): object
    {
        return (object) [
            'message' => $this->message,
            'severity' => $this->alertSeverityEnum->name
        ];
    }
}
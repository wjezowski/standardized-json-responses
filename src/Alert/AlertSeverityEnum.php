<?php

declare(strict_types=1);

namespace wjezowski\Library\StandardizedJsonResponses\Alert;

enum AlertSeverityEnum: string
{
    case Error = 'error';
    case Info = 'info';
    case Success = 'success';
    case Warning = 'warning';
}

<?php

declare(strict_types=1);

namespace wjezowski\Library\StandardizedJsonResponses\Response;

class JsonResponseInternalServerError extends StandardizedJsonResponse
{
    /**
     * @inheritDoc
     */
    public function __construct(
        array $alerts = [],
        array $data = [],
        array $headers = [],
        bool $json = false
    ) {
        parent::__construct(self::HTTP_INTERNAL_SERVER_ERROR, $alerts, $data, $headers, $json);
    }
}
<?php

declare(strict_types=1);

namespace wjezowski\Library\StandardizedJsonResponses\Response;

final class JsonResponseOk extends StandardizedJsonResponse
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
        parent::__construct(self::HTTP_OK, $alerts, $data, $headers, $json);
    }
}
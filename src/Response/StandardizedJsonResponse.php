<?php

declare(strict_types=1);

namespace wjezowski\Library\StandardizedJsonResponses\Response;

use Symfony\Component\HttpFoundation\JsonResponse;
use wjezowski\Library\StandardizedJsonResponses\Alert\AlertDto;

class StandardizedJsonResponse extends JsonResponse
{
    /**
     * @param AlertDto[] $alerts
     */
    public function __construct(
        int $status,
        array $alerts = [],
        array $data = [],
        array $headers = [],
        bool $json = false
    ) {
        parent::__construct(
            (object) [
                'alerts' => $alerts,
                'data' => $data,
            ],
            $status,
            $headers,
            $json
        );
    }
}
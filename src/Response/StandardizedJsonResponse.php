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
        $this->checkAlerts($alerts);

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

    protected function checkAlerts(array $alerts): void
    {
        foreach ($alerts as $alert) {
            if (!is_a($alert, AlertDto::class)) {
                throw new \InvalidArgumentException('Given array contain element different than ' . AlertDto::class .'. Given element type: ' . get_class($alert));
            }
        }
    }
}
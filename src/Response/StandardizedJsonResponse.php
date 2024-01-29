<?php

declare(strict_types=1);

namespace wjezowski\Library\StandardizedJsonResponses\Response;

use Symfony\Component\HttpFoundation\JsonResponse;
use wjezowski\Library\StandardizedJsonResponses\Alert\AlertDto;

class StandardizedJsonResponse extends JsonResponse
{
    /** @var AlertDto[] $alerts */
    private array $alerts;
    private array $standardizedJsonResponseData;

    /**
     * @param AlertDto[] $alerts
     * @throws \InvalidArgumentException
     */
    public function __construct(
        int $status,
        array $alerts = [],
        array $data = [],
        array $headers = [],
        bool $json = false
    ) {
        $this->standardizedJsonResponseData = $data;

        $this->checkAlerts($alerts);
        $this->alerts = $alerts;

        parent::__construct(
            $this->prepareData(),
            $status,
            $headers,
            $json
        );
    }

    /**
     * @param AlertDto[] $alerts
     * @throws \InvalidArgumentException
     */
    final public function setAlerts(array $alerts): void
    {
        $this->checkAlerts($alerts);

        $this->alerts = $alerts;

        $this->setData($this->prepareData());
    }

    /**
     * @return AlertDto[]
     */
    final public function getAlerts(): array
    {
        return $this->alerts;
    }

    /**
     * @param AlertDto[] $alerts
     * @throws \InvalidArgumentException
     */
    final protected function checkAlerts(array $alerts): void
    {
        foreach ($alerts as $alert) {
            if (!is_a($alert, AlertDto::class)) {
                throw new \InvalidArgumentException('Given array contain element different than ' . AlertDto::class .'. Given element type: ' . get_class($alert));
            }
        }
    }

    final protected function prepareData(): object
    {
        return (object) [
            'alerts' => $this->alerts,
            'data' => $this->standardizedJsonResponseData,
        ];
    }
}
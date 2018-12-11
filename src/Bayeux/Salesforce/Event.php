<?php
/**
 * Created by PhpStorm.
 * User: alex.boyce
 * Date: 9/7/18
 * Time: 5:45 PM
 */

namespace AE\SalesforceRestSdk\Bayeux\Salesforce;

use JMS\Serializer\Annotation as JMS;

/**
 * Class Event
 *
 * @package AE\SalesforceRestSdk\Bayeux\Salesforce
 * @JMS\ExclusionPolicy("NONE")
 */
class Event
{
    /**
     * @var \DateTimeImmutable
     * @JMS\Type("string")
     */
    private $createdDate;

    /**
     * @var int
     * @JMS\Type("int")
     */
    private $replayId;

    /**
     * @var string|null
     * @JMS\Type("string")
     */
    private $type;

    /**
     * @return string
     */
    public function getCreatedDate(): ?string
    {
        return $this->createdDate;
    }

    /**
     * @param string $createdDate
     *
     * @return Event
     */
    public function setCreatedDate(?string $createdDate): Event
    {
        $this->createdDate = $createdDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getReplayId(): int
    {
        return $this->replayId;
    }

    /**
     * @param int $replayId
     *
     * @return Event
     */
    public function setReplayId(int $replayId): Event
    {
        $this->replayId = $replayId;

        return $this;
    }

    /**
     * @return null|string
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @param null|string $type
     *
     * @return Event
     */
    public function setType(?string $type): Event
    {
        $this->type = $type;

        return $this;
    }
}

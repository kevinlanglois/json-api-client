<?php

namespace Swis\JsonApi\Client\Relations;

abstract class AbstractRelation
{
    /**
     * @var \Swis\JsonApi\Client\Interfaces\DataInterface|null
     */
    protected $included;

    /**
     * @var bool
     */
    protected $omitIncluded = false;

    /**
     * @return $this
     */
    public function dissociate()
    {
        $this->included = null;

        return $this;
    }

    /**
     * @param bool $omitIncluded
     *
     * @return $this
     */
    public function setOmitIncluded(bool $omitIncluded)
    {
        $this->omitIncluded = $omitIncluded;

        return $this;
    }

    /**
     * @return bool
     */
    public function shouldOmitIncluded(): bool
    {
        return $this->omitIncluded;
    }
}

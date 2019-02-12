<?php

namespace Tinderbox\Clickhouse\Common;

/**
 * Container to server options.
 */
class ServerOptions
{
    /**
     * Connection timeout.
     *
     * @var float
     */
    protected $timeout = 5.0;

    /**
     * Protocol.
     *
     * @var string
     */
    protected $protocol = 'http';

    /**
     * Sets protocol.
     *
     * @param string $protocol
     *
     * @return ServerOptions
     */
    public function setProtocol(string $protocol): self
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * Returns protocol.
     *
     * @return string
     */
    public function getProtocol(): string
    {
        return $this->protocol;
    }

    /**
     * Sets timeout.
     *
     * @param float $timeout
     *
     * @return \Tinderbox\Clickhouse\Common\ServerOptions
     */
    public function setTimeout(float $timeout): self
    {
        $this->timeout = $timeout;

        return $this;
    }

    /**
     * Returns timeout.
     *
     * @return float
     */
    public function getTimeout(): float
    {
        return $this->timeout;
    }


    protected $distributed_aggregation_memory_efficient = 1;

    protected $socket_timeout = 90000;

    protected $keepAliveTimeout = 90000;

    protected $max_distributed_processing_threads = 10;

    protected $max_bytes_before_external_group_by = 10000000000;

    protected $max_memory_usage = 20000000000;

    protected $max_query_size = 624290;

    /**
     * @return int
     */
    public function getDistributedAggregationMemoryEfficient(): int
    {
        return $this->distributed_aggregation_memory_efficient;
    }

    /**
     * @param int $distributed_aggregation_memory_efficient
     */
    public function setDistributedAggregationMemoryEfficient(int $distributed_aggregation_memory_efficient): self
    {
        $this->distributed_aggregation_memory_efficient = $distributed_aggregation_memory_efficient;
        return $this;
    }

    /**
     * @return int
     */
    public function getSocketTimeout(): int
    {
        return $this->socket_timeout;
    }

    /**
     * @param int $socket_timeout
     */
    public function setSocketTimeout(int $socket_timeout): self
    {
        $this->socket_timeout = $socket_timeout;
        return $this;
    }

    /**
     * @return int
     */
    public function getKeepAliveTimeout(): int
    {
        return $this->keepAliveTimeout;
    }

    /**
     * @param int $keepAliveTimeout
     */
    public function setKeepAliveTimeout(int $keepAliveTimeout): self
    {
        $this->keepAliveTimeout = $keepAliveTimeout;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxDistributedProcessingThreads(): int
    {
        return $this->max_distributed_processing_threads;
    }

    /**
     * @param int $max_distributed_processing_threads
     */
    public function setMaxDistributedProcessingThreads(int $max_distributed_processing_threads): self
    {
        $this->max_distributed_processing_threads = $max_distributed_processing_threads;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxBytesBeforeExternalGroupBy(): int
    {
        return $this->max_bytes_before_external_group_by;
    }

    /**
     * @param int $max_bytes_before_external_group_by
     */
    public function setMaxBytesBeforeExternalGroupBy(int $max_bytes_before_external_group_by): self
    {
        $this->max_bytes_before_external_group_by = $max_bytes_before_external_group_by;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxMemoryUsage(): int
    {
        return $this->max_memory_usage;
    }

    public function getMaxQuerySize(): int
    {
        return $this->max_query_size;
    }

    /**
     * @param int $max_memory_usege
     */
    public function setMaxMemoryUsage(int $max_memory_usage): self
    {
        $this->max_memory_usege = $max_memory_usege;
        return $this;
    }
}

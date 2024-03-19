<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteMidocoTaskQueueRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteMidocoTaskQueueRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskQueue
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoTaskQueue
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue
     */
    protected \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue $MidocoTaskQueue;
    /**
     * Constructor method for DeleteMidocoTaskQueueRequest
     * @uses DeleteMidocoTaskQueueRequest::setMidocoTaskQueue()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue $midocoTaskQueue
     */
    public function __construct(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue $midocoTaskQueue)
    {
        $this
            ->setMidocoTaskQueue($midocoTaskQueue);
    }
    /**
     * Get MidocoTaskQueue value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue
     */
    public function getMidocoTaskQueue(): \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue
    {
        return $this->MidocoTaskQueue;
    }
    /**
     * Set MidocoTaskQueue value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue $midocoTaskQueue
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskQueueRequest
     */
    public function setMidocoTaskQueue(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue $midocoTaskQueue): self
    {
        $this->MidocoTaskQueue = $midocoTaskQueue;
        
        return $this;
    }
}

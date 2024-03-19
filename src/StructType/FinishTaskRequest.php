<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FinishTaskRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class FinishTaskRequest extends AbstractStructBase
{
    /**
     * The MidocoTask
     * Meta information extracted from the WSDL
     * - ref: MidocoTask
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\Task|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\Task $MidocoTask = null;
    /**
     * Constructor method for FinishTaskRequest
     * @uses FinishTaskRequest::setMidocoTask()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\Task $midocoTask
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\Task $midocoTask = null)
    {
        $this
            ->setMidocoTask($midocoTask);
    }
    /**
     * Get MidocoTask value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\Task|null
     */
    public function getMidocoTask(): ?\Pggns\MidocoApi\WorkflowSD\StructType\Task
    {
        return $this->MidocoTask;
    }
    /**
     * Set MidocoTask value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\Task $midocoTask
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\FinishTaskRequest
     */
    public function setMidocoTask(?\Pggns\MidocoApi\WorkflowSD\StructType\Task $midocoTask = null): self
    {
        $this->MidocoTask = $midocoTask;
        
        return $this;
    }
}

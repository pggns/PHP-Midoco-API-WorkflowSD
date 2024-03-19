<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskViewStatusRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskViewStatusRequest extends AbstractStructBase
{
    /**
     * The TaskViewContext
     * Meta information extracted from the WSDL
     * - ref: TaskViewContext
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContext|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContext $TaskViewContext = null;
    /**
     * Constructor method for GetTaskViewStatusRequest
     * @uses GetTaskViewStatusRequest::setTaskViewContext()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContext $taskViewContext
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContext $taskViewContext = null)
    {
        $this
            ->setTaskViewContext($taskViewContext);
    }
    /**
     * Get TaskViewContext value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContext|null
     */
    public function getTaskViewContext(): ?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContext
    {
        return $this->TaskViewContext;
    }
    /**
     * Set TaskViewContext value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContext $taskViewContext
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetTaskViewStatusRequest
     */
    public function setTaskViewContext(?\Pggns\MidocoApi\WorkflowSD\StructType\TaskViewContext $taskViewContext = null): self
    {
        $this->TaskViewContext = $taskViewContext;
        
        return $this;
    }
}

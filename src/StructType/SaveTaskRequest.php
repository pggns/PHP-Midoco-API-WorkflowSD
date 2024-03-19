<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTaskRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTaskRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskList
     * Meta information extracted from the WSDL
     * - ref: MidocoTaskList
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskList|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskList $MidocoTaskList = null;
    /**
     * Constructor method for SaveTaskRequest
     * @uses SaveTaskRequest::setMidocoTaskList()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskList $midocoTaskList
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskList $midocoTaskList = null)
    {
        $this
            ->setMidocoTaskList($midocoTaskList);
    }
    /**
     * Get MidocoTaskList value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskList|null
     */
    public function getMidocoTaskList(): ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskList
    {
        return $this->MidocoTaskList;
    }
    /**
     * Set MidocoTaskList value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskList $midocoTaskList
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveTaskRequest
     */
    public function setMidocoTaskList(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskList $midocoTaskList = null): self
    {
        $this->MidocoTaskList = $midocoTaskList;
        
        return $this;
    }
}

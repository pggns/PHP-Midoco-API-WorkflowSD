<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteTaskViewRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DeleteTaskViewRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskView
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoTaskView
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView
     */
    protected \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $MidocoTaskView;
    /**
     * Constructor method for DeleteTaskViewRequest
     * @uses DeleteTaskViewRequest::setMidocoTaskView()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $midocoTaskView
     */
    public function __construct(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $midocoTaskView)
    {
        $this
            ->setMidocoTaskView($midocoTaskView);
    }
    /**
     * Get MidocoTaskView value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView
     */
    public function getMidocoTaskView(): \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView
    {
        return $this->MidocoTaskView;
    }
    /**
     * Set MidocoTaskView value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $midocoTaskView
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\DeleteTaskViewRequest
     */
    public function setMidocoTaskView(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $midocoTaskView): self
    {
        $this->MidocoTaskView = $midocoTaskView;
        
        return $this;
    }
}

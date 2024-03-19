<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveTaskViewResponse StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveTaskViewResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskView
     * Meta information extracted from the WSDL
     * - ref: MidocoTaskView
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $MidocoTaskView = null;
    /**
     * Constructor method for SaveTaskViewResponse
     * @uses SaveTaskViewResponse::setMidocoTaskView()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $midocoTaskView
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $midocoTaskView = null)
    {
        $this
            ->setMidocoTaskView($midocoTaskView);
    }
    /**
     * Get MidocoTaskView value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView|null
     */
    public function getMidocoTaskView(): ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView
    {
        return $this->MidocoTaskView;
    }
    /**
     * Set MidocoTaskView value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $midocoTaskView
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveTaskViewResponse
     */
    public function setMidocoTaskView(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $midocoTaskView = null): self
    {
        $this->MidocoTaskView = $midocoTaskView;
        
        return $this;
    }
}

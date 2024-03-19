<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetTaskViewbyTimeRestrictionRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetTaskViewbyTimeRestrictionRequest extends AbstractStructBase
{
    /**
     * The MidocoTaskViewUser
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - ref: MidocoTaskViewUser
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskViewUser
     */
    protected \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskViewUser $MidocoTaskViewUser;
    /**
     * Constructor method for GetTaskViewbyTimeRestrictionRequest
     * @uses GetTaskViewbyTimeRestrictionRequest::setMidocoTaskViewUser()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskViewUser $midocoTaskViewUser
     */
    public function __construct(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskViewUser $midocoTaskViewUser)
    {
        $this
            ->setMidocoTaskViewUser($midocoTaskViewUser);
    }
    /**
     * Get MidocoTaskViewUser value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskViewUser
     */
    public function getMidocoTaskViewUser(): \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskViewUser
    {
        return $this->MidocoTaskViewUser;
    }
    /**
     * Set MidocoTaskViewUser value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskViewUser $midocoTaskViewUser
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetTaskViewbyTimeRestrictionRequest
     */
    public function setMidocoTaskViewUser(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskViewUser $midocoTaskViewUser): self
    {
        $this->MidocoTaskViewUser = $midocoTaskViewUser;
        
        return $this;
    }
}

<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessibleComponentsByRoleRequest StructType
 * @subpackage Structs
 */
class GetAccessibleComponentsByRoleRequest extends AbstractStructBase
{
    /**
     * The MidocoAccessibleComponentByRole
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: MidocoAccessibleComponentByRole
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoAccessibleComponentByRoleType
     */
    protected \Pggns\MidocoApi\WorkflowSD\StructType\MidocoAccessibleComponentByRoleType $MidocoAccessibleComponentByRole;
    /**
     * Constructor method for GetAccessibleComponentsByRoleRequest
     * @uses GetAccessibleComponentsByRoleRequest::setMidocoAccessibleComponentByRole()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     */
    public function __construct(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole)
    {
        $this
            ->setMidocoAccessibleComponentByRole($midocoAccessibleComponentByRole);
    }
    /**
     * Get MidocoAccessibleComponentByRole value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoAccessibleComponentByRoleType
     */
    public function getMidocoAccessibleComponentByRole(): \Pggns\MidocoApi\WorkflowSD\StructType\MidocoAccessibleComponentByRoleType
    {
        return $this->MidocoAccessibleComponentByRole;
    }
    /**
     * Set MidocoAccessibleComponentByRole value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetAccessibleComponentsByRoleRequest
     */
    public function setMidocoAccessibleComponentByRole(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoAccessibleComponentByRoleType $midocoAccessibleComponentByRole): self
    {
        $this->MidocoAccessibleComponentByRole = $midocoAccessibleComponentByRole;
        
        return $this;
    }
}

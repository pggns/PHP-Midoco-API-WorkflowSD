<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveMidocoOrgUnitGuiAttributeRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveMidocoOrgUnitGuiAttributeRequest extends AbstractStructBase
{
    /**
     * The MidocoOrgunitGuiAttribute
     * Meta information extracted from the WSDL
     * - ref: MidocoOrgunitGuiAttribute
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrgunitGuiAttribute|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrgunitGuiAttribute $MidocoOrgunitGuiAttribute = null;
    /**
     * Constructor method for SaveMidocoOrgUnitGuiAttributeRequest
     * @uses SaveMidocoOrgUnitGuiAttributeRequest::setMidocoOrgunitGuiAttribute()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute = null)
    {
        $this
            ->setMidocoOrgunitGuiAttribute($midocoOrgunitGuiAttribute);
    }
    /**
     * Get MidocoOrgunitGuiAttribute value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrgunitGuiAttribute|null
     */
    public function getMidocoOrgunitGuiAttribute(): ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrgunitGuiAttribute
    {
        return $this->MidocoOrgunitGuiAttribute;
    }
    /**
     * Set MidocoOrgunitGuiAttribute value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoOrgUnitGuiAttributeRequest
     */
    public function setMidocoOrgunitGuiAttribute(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoOrgunitGuiAttribute $midocoOrgunitGuiAttribute = null): self
    {
        $this->MidocoOrgunitGuiAttribute = $midocoOrgunitGuiAttribute;
        
        return $this;
    }
}

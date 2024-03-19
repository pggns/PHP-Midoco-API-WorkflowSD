<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveRuleCriteriaOrderRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class SaveRuleCriteriaOrderRequest extends AbstractStructBase
{
    /**
     * The unitName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $unitName;
    /**
     * The MidocoRuleCriteriaOrder
     * Meta information extracted from the WSDL
     * - ref: MidocoRuleCriteriaOrder
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\RuleCriteriaOrderDTO|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\RuleCriteriaOrderDTO $MidocoRuleCriteriaOrder = null;
    /**
     * Constructor method for SaveRuleCriteriaOrderRequest
     * @uses SaveRuleCriteriaOrderRequest::setUnitName()
     * @uses SaveRuleCriteriaOrderRequest::setMidocoRuleCriteriaOrder()
     * @param string $unitName
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\RuleCriteriaOrderDTO $midocoRuleCriteriaOrder
     */
    public function __construct(string $unitName, ?\Pggns\MidocoApi\WorkflowSD\StructType\RuleCriteriaOrderDTO $midocoRuleCriteriaOrder = null)
    {
        $this
            ->setUnitName($unitName)
            ->setMidocoRuleCriteriaOrder($midocoRuleCriteriaOrder);
    }
    /**
     * Get unitName value
     * @return string
     */
    public function getUnitName(): string
    {
        return $this->unitName;
    }
    /**
     * Set unitName value
     * @param string $unitName
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveRuleCriteriaOrderRequest
     */
    public function setUnitName(string $unitName): self
    {
        // validation for constraint: string
        if (!is_null($unitName) && !is_string($unitName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($unitName, true), gettype($unitName)), __LINE__);
        }
        $this->unitName = $unitName;
        
        return $this;
    }
    /**
     * Get MidocoRuleCriteriaOrder value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\RuleCriteriaOrderDTO|null
     */
    public function getMidocoRuleCriteriaOrder(): ?\Pggns\MidocoApi\WorkflowSD\StructType\RuleCriteriaOrderDTO
    {
        return $this->MidocoRuleCriteriaOrder;
    }
    /**
     * Set MidocoRuleCriteriaOrder value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\RuleCriteriaOrderDTO $midocoRuleCriteriaOrder
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\SaveRuleCriteriaOrderRequest
     */
    public function setMidocoRuleCriteriaOrder(?\Pggns\MidocoApi\WorkflowSD\StructType\RuleCriteriaOrderDTO $midocoRuleCriteriaOrder = null): self
    {
        $this->MidocoRuleCriteriaOrder = $midocoRuleCriteriaOrder;
        
        return $this;
    }
}

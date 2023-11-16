<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMidocoTaskDefinitionDescriptionResponse StructType
 * @subpackage Structs
 */
class GetMidocoTaskDefinitionDescriptionResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskDefinitonDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskDefinitonDescription
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription[]
     */
    protected array $MidocoTaskDefinitonDescription = [];
    /**
     * Constructor method for GetMidocoTaskDefinitionDescriptionResponse
     * @uses GetMidocoTaskDefinitionDescriptionResponse::setMidocoTaskDefinitonDescription()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription[] $midocoTaskDefinitonDescription
     */
    public function __construct(array $midocoTaskDefinitonDescription = [])
    {
        $this
            ->setMidocoTaskDefinitonDescription($midocoTaskDefinitonDescription);
    }
    /**
     * Get MidocoTaskDefinitonDescription value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription[]
     */
    public function getMidocoTaskDefinitonDescription(): array
    {
        return $this->MidocoTaskDefinitonDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTaskDefinitonDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskDefinitonDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskDefinitonDescriptionForArrayConstraintsFromSetMidocoTaskDefinitonDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMidocoTaskDefinitionDescriptionResponseMidocoTaskDefinitonDescriptionItem) {
            // validation for constraint: itemType
            if (!$getMidocoTaskDefinitionDescriptionResponseMidocoTaskDefinitonDescriptionItem instanceof \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription) {
                $invalidValues[] = is_object($getMidocoTaskDefinitionDescriptionResponseMidocoTaskDefinitonDescriptionItem) ? get_class($getMidocoTaskDefinitionDescriptionResponseMidocoTaskDefinitonDescriptionItem) : sprintf('%s(%s)', gettype($getMidocoTaskDefinitionDescriptionResponseMidocoTaskDefinitonDescriptionItem), var_export($getMidocoTaskDefinitionDescriptionResponseMidocoTaskDefinitonDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskDefinitonDescription property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskDefinitonDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription[] $midocoTaskDefinitonDescription
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionDescriptionResponse
     */
    public function setMidocoTaskDefinitonDescription(array $midocoTaskDefinitonDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskDefinitonDescriptionArrayErrorMessage = self::validateMidocoTaskDefinitonDescriptionForArrayConstraintsFromSetMidocoTaskDefinitonDescription($midocoTaskDefinitonDescription))) {
            throw new InvalidArgumentException($midocoTaskDefinitonDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskDefinitonDescription = $midocoTaskDefinitonDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskDefinitonDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription $item
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionDescriptionResponse
     */
    public function addToMidocoTaskDefinitonDescription(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskDefinitonDescription property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskDefinitonDescription, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskDefinitonDescription[] = $item;
        
        return $this;
    }
}

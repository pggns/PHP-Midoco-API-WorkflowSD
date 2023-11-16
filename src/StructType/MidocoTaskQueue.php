<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoTaskQueue StructType
 * @subpackage Structs
 */
class MidocoTaskQueue extends TaskQueueDTO
{
    /**
     * The unitNames
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var string[]
     */
    protected array $unitNames = [];
    /**
     * The MidocoTaskQueueDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskQueueDescription
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO[]
     */
    protected array $MidocoTaskQueueDescription = [];
    /**
     * Constructor method for MidocoTaskQueue
     * @uses MidocoTaskQueue::setUnitNames()
     * @uses MidocoTaskQueue::setMidocoTaskQueueDescription()
     * @param string[] $unitNames
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO[] $midocoTaskQueueDescription
     */
    public function __construct(array $unitNames = [], array $midocoTaskQueueDescription = [])
    {
        $this
            ->setUnitNames($unitNames)
            ->setMidocoTaskQueueDescription($midocoTaskQueueDescription);
    }
    /**
     * Get unitNames value
     * @return string[]
     */
    public function getUnitNames(): array
    {
        return $this->unitNames;
    }
    /**
     * This method is responsible for validating the values passed to the setUnitNames method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnitNames method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnitNamesForArrayConstraintsFromSetUnitNames(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTaskQueueUnitNamesItem) {
            // validation for constraint: itemType
            if (!is_string($midocoTaskQueueUnitNamesItem)) {
                $invalidValues[] = is_object($midocoTaskQueueUnitNamesItem) ? get_class($midocoTaskQueueUnitNamesItem) : sprintf('%s(%s)', gettype($midocoTaskQueueUnitNamesItem), var_export($midocoTaskQueueUnitNamesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unitNames property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unitNames value
     * @throws InvalidArgumentException
     * @param string[] $unitNames
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue
     */
    public function setUnitNames(array $unitNames = []): self
    {
        // validation for constraint: array
        if ('' !== ($unitNamesArrayErrorMessage = self::validateUnitNamesForArrayConstraintsFromSetUnitNames($unitNames))) {
            throw new InvalidArgumentException($unitNamesArrayErrorMessage, __LINE__);
        }
        $this->unitNames = $unitNames;
        
        return $this;
    }
    /**
     * Add item to unitNames value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue
     */
    public function addToUnitNames(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The unitNames property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->unitNames[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoTaskQueueDescription value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO[]
     */
    public function getMidocoTaskQueueDescription(): array
    {
        return $this->MidocoTaskQueueDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTaskQueueDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskQueueDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskQueueDescriptionForArrayConstraintsFromSetMidocoTaskQueueDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoTaskQueueMidocoTaskQueueDescriptionItem) {
            // validation for constraint: itemType
            if (!$midocoTaskQueueMidocoTaskQueueDescriptionItem instanceof \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO) {
                $invalidValues[] = is_object($midocoTaskQueueMidocoTaskQueueDescriptionItem) ? get_class($midocoTaskQueueMidocoTaskQueueDescriptionItem) : sprintf('%s(%s)', gettype($midocoTaskQueueMidocoTaskQueueDescriptionItem), var_export($midocoTaskQueueMidocoTaskQueueDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskQueueDescription property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskQueueDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO[] $midocoTaskQueueDescription
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue
     */
    public function setMidocoTaskQueueDescription(array $midocoTaskQueueDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskQueueDescriptionArrayErrorMessage = self::validateMidocoTaskQueueDescriptionForArrayConstraintsFromSetMidocoTaskQueueDescription($midocoTaskQueueDescription))) {
            throw new InvalidArgumentException($midocoTaskQueueDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskQueueDescription = $midocoTaskQueueDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskQueueDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO $item
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskQueue
     */
    public function addToMidocoTaskQueueDescription(\Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskQueueDescription property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\TaskQueueDescriptionDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskQueueDescription[] = $item;
        
        return $this;
    }
}

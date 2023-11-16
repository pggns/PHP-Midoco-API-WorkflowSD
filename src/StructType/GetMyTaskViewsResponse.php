<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMyTaskViewsResponse StructType
 * @subpackage Structs
 */
class GetMyTaskViewsResponse extends AbstractStructBase
{
    /**
     * The MidocoTaskView
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoTaskView
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView[]
     */
    protected array $MidocoTaskView = [];
    /**
     * Constructor method for GetMyTaskViewsResponse
     * @uses GetMyTaskViewsResponse::setMidocoTaskView()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView[] $midocoTaskView
     */
    public function __construct(array $midocoTaskView = [])
    {
        $this
            ->setMidocoTaskView($midocoTaskView);
    }
    /**
     * Get MidocoTaskView value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView[]
     */
    public function getMidocoTaskView(): array
    {
        return $this->MidocoTaskView;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoTaskView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoTaskView method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoTaskViewForArrayConstraintsFromSetMidocoTaskView(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMyTaskViewsResponseMidocoTaskViewItem) {
            // validation for constraint: itemType
            if (!$getMyTaskViewsResponseMidocoTaskViewItem instanceof \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView) {
                $invalidValues[] = is_object($getMyTaskViewsResponseMidocoTaskViewItem) ? get_class($getMyTaskViewsResponseMidocoTaskViewItem) : sprintf('%s(%s)', gettype($getMyTaskViewsResponseMidocoTaskViewItem), var_export($getMyTaskViewsResponseMidocoTaskViewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoTaskView property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoTaskView value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView[] $midocoTaskView
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMyTaskViewsResponse
     */
    public function setMidocoTaskView(array $midocoTaskView = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoTaskViewArrayErrorMessage = self::validateMidocoTaskViewForArrayConstraintsFromSetMidocoTaskView($midocoTaskView))) {
            throw new InvalidArgumentException($midocoTaskViewArrayErrorMessage, __LINE__);
        }
        $this->MidocoTaskView = $midocoTaskView;
        
        return $this;
    }
    /**
     * Add item to MidocoTaskView value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $item
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\GetMyTaskViewsResponse
     */
    public function addToMidocoTaskView(\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView) {
            throw new InvalidArgumentException(sprintf('The MidocoTaskView property can only contain items of type \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTaskView, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoTaskView[] = $item;
        
        return $this;
    }
}
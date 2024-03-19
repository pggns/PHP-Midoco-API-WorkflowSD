<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\WorkflowSD\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelTssClientRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CancelTssClientRequest extends AbstractStructBase
{
    /**
     * The MidocoTssClient
     * Meta information extracted from the WSDL
     * - ref: MidocoTssClient
     * @var \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTssClient|null
     */
    protected ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTssClient $MidocoTssClient = null;
    /**
     * Constructor method for CancelTssClientRequest
     * @uses CancelTssClientRequest::setMidocoTssClient()
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTssClient $midocoTssClient
     */
    public function __construct(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTssClient $midocoTssClient = null)
    {
        $this
            ->setMidocoTssClient($midocoTssClient);
    }
    /**
     * Get MidocoTssClient value
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTssClient|null
     */
    public function getMidocoTssClient(): ?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTssClient
    {
        return $this->MidocoTssClient;
    }
    /**
     * Set MidocoTssClient value
     * @param \Pggns\MidocoApi\WorkflowSD\StructType\MidocoTssClient $midocoTssClient
     * @return \Pggns\MidocoApi\WorkflowSD\StructType\CancelTssClientRequest
     */
    public function setMidocoTssClient(?\Pggns\MidocoApi\WorkflowSD\StructType\MidocoTssClient $midocoTssClient = null): self
    {
        $this->MidocoTssClient = $midocoTssClient;
        
        return $this;
    }
}

<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/WorkflowSDService.wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://midoffice.midoco.net/ws/wsdl/WorkflowSDService.wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => \Pggns\MidocoApi\WorkflowSD\ClassMap::get(),
];
/**
 * Samples for Save ServiceType
 */
$save = new \Pggns\MidocoApi\WorkflowSD\ServiceType\Save($options);
$save->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for saveMidocoTaskDefinition operation/method
 */
if ($save->saveMidocoTaskDefinition(new \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskDefinitionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoTaskPriority operation/method
 */
if ($save->saveMidocoTaskPriority(new \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskPriorityRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoTaskDefinitionDescription operation/method
 */
if ($save->saveMidocoTaskDefinitionDescription(new \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskDefinitionDescriptionRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveMidocoTaskQueue operation/method
 */
if ($save->saveMidocoTaskQueue(new \Pggns\MidocoApi\WorkflowSD\StructType\SaveMidocoTaskQueueRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Sample call for saveTaskView operation/method
 */
if ($save->saveTaskView(new \Pggns\MidocoApi\WorkflowSD\StructType\SaveTaskViewRequest()) !== false) {
    print_r($save->getResult());
} else {
    print_r($save->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \Pggns\MidocoApi\WorkflowSD\ServiceType\Get($options);
$get->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for getMidocoTaskDefinition operation/method
 */
if ($get->getMidocoTaskDefinition(new \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoTaskPriority operation/method
 */
if ($get->getMidocoTaskPriority(new \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskPriorityRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoTaskDefinitionDescription operation/method
 */
if ($get->getMidocoTaskDefinitionDescription(new \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskDefinitionDescriptionRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getMidocoTaskQueue operation/method
 */
if ($get->getMidocoTaskQueue(new \Pggns\MidocoApi\WorkflowSD\StructType\GetMidocoTaskQueueRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for getTaskView operation/method
 */
if ($get->getTaskView(new \Pggns\MidocoApi\WorkflowSD\StructType\GetTaskViewRequest()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Samples for Delete ServiceType
 */
$delete = new \Pggns\MidocoApi\WorkflowSD\ServiceType\Delete($options);
$delete->setSoapHeaderMidocoCredentials($MidocoCredentials);
/**
 * Sample call for deleteMidocoTaskDefinition operation/method
 */
if ($delete->deleteMidocoTaskDefinition(new \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskDefinitionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoTaskPriority operation/method
 */
if ($delete->deleteMidocoTaskPriority(new \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskPriorityRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoTaskDefinitionDescription operation/method
 */
if ($delete->deleteMidocoTaskDefinitionDescription(new \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskDefinitionDescriptionRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteMidocoTaskQueue operation/method
 */
if ($delete->deleteMidocoTaskQueue(new \Pggns\MidocoApi\WorkflowSD\StructType\DeleteMidocoTaskQueueRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}
/**
 * Sample call for deleteTaskView operation/method
 */
if ($delete->deleteTaskView(new \Pggns\MidocoApi\WorkflowSD\StructType\DeleteTaskViewRequest()) !== false) {
    print_r($delete->getResult());
} else {
    print_r($delete->getLastError());
}

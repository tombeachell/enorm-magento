<?php
namespace Magento\Webapi\Model\ServiceMetadata;

/**
 * Interceptor class for @see \Magento\Webapi\Model\ServiceMetadata
 */
class Interceptor extends \Magento\Webapi\Model\ServiceMetadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Webapi\Model\Config $config, \Magento\Webapi\Model\Cache\Type\Webapi $cache, \Magento\Webapi\Model\Config\ClassReflector $classReflector, \Magento\Framework\Reflection\TypeProcessor $typeProcessor, \Magento\Framework\Serialize\SerializerInterface $serializer = null)
    {
        $this->___init();
        parent::__construct($config, $cache, $classReflector, $typeProcessor, $serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function getServiceName($interfaceName, $version, $preserveVersion = true)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getServiceName');
        if (!$pluginInfo) {
            return parent::getServiceName($interfaceName, $version, $preserveVersion);
        } else {
            return $this->___callPlugins('getServiceName', func_get_args(), $pluginInfo);
        }
    }
}

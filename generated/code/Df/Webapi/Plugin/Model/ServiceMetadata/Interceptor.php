<?php
namespace Df\Webapi\Plugin\Model\ServiceMetadata;

/**
 * Interceptor class for @see \Df\Webapi\Plugin\Model\ServiceMetadata
 */
class Interceptor extends \Df\Webapi\Plugin\Model\ServiceMetadata implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
        parent::__construct();
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

<?php
namespace Magento\Ups\Block\Backend\System\CarrierConfig;

/**
 * Interceptor class for @see \Magento\Ups\Block\Backend\System\CarrierConfig
 */
class Interceptor extends \Magento\Ups\Block\Backend\System\CarrierConfig implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Ups\Helper\Config $carrierConfig, \Magento\Store\Model\Website $websiteModel, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $carrierConfig, $websiteModel, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getModuleName()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getModuleName');
        if (!$pluginInfo) {
            return parent::getModuleName();
        } else {
            return $this->___callPlugins('getModuleName', func_get_args(), $pluginInfo);
        }
    }
}

<?php
namespace Magento\Shipping\Block\Tracking\Link;

/**
 * Interceptor class for @see \Magento\Shipping\Block\Tracking\Link
 */
class Interceptor extends \Magento\Shipping\Block\Tracking\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Shipping\Helper\Data $shippingData, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $shippingData, $data);
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

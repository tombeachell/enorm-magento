<?php
namespace Magento\Dhl\Block\Adminhtml\Unitofmeasure;

/**
 * Interceptor class for @see \Magento\Dhl\Block\Adminhtml\Unitofmeasure
 */
class Interceptor extends \Magento\Dhl\Block\Adminhtml\Unitofmeasure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Dhl\Model\Carrier $carrierDhl, \Magento\Shipping\Helper\Carrier $carrierHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $carrierDhl, $carrierHelper, $data);
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

<?php
namespace Magento\Shipping\Block\Adminhtml\View\Form;

/**
 * Interceptor class for @see \Magento\Shipping\Block\Adminhtml\View\Form
 */
class Interceptor extends \Magento\Shipping\Block\Adminhtml\View\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Sales\Helper\Admin $adminHelper, \Magento\Shipping\Model\CarrierFactory $carrierFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $adminHelper, $carrierFactory, $data);
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

<?php
namespace Mollie\Payment\Block\Adminhtml\Render\Header;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Adminhtml\Render\Header
 */
class Interceptor extends \Mollie\Payment\Block\Adminhtml\Render\Header implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Mollie\Payment\Helper\General $general)
    {
        $this->___init();
        parent::__construct($context, $general);
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

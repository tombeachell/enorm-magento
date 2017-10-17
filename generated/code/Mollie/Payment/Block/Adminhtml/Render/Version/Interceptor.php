<?php
namespace Mollie\Payment\Block\Adminhtml\Render\Version;

/**
 * Interceptor class for @see \Mollie\Payment\Block\Adminhtml\Render\Version
 */
class Interceptor extends \Mollie\Payment\Block\Adminhtml\Render\Version implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Mollie\Payment\Helper\General $mollieHelper)
    {
        $this->___init();
        parent::__construct($context, $mollieHelper);
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

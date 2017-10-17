<?php
namespace Magento\Checkout\Block\Cart\Link;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Cart\Link
 */
class Interceptor extends \Magento\Checkout\Block\Cart\Link implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Module\Manager $moduleManager, \Magento\Checkout\Helper\Cart $cartHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $moduleManager, $cartHelper, $data);
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

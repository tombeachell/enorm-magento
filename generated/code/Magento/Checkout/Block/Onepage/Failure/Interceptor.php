<?php
namespace Magento\Checkout\Block\Onepage\Failure;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Onepage\Failure
 */
class Interceptor extends \Magento\Checkout\Block\Onepage\Failure implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $data);
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

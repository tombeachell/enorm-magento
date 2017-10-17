<?php
namespace Magento\Multishipping\Block\Checkout\Billing\Items;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\Billing\Items
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\Billing\Items implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, \Magento\Checkout\Model\Session $checkoutSession, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $multishipping, $checkoutSession, $data);
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

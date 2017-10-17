<?php
namespace Magento\Checkout\Block\Cart\Shipping;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Cart\Shipping
 */
class Interceptor extends \Magento\Checkout\Block\Cart\Shipping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Checkout\Model\CompositeConfigProvider $configProvider, array $layoutProcessors = array(), array $data = array(), \Magento\Framework\Serialize\Serializer\Json $serializer = null)
    {
        $this->___init();
        parent::__construct($context, $customerSession, $checkoutSession, $configProvider, $layoutProcessors, $data, $serializer);
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

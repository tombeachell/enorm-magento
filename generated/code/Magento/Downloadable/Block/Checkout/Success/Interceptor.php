<?php
namespace Magento\Downloadable\Block\Checkout\Success;

/**
 * Interceptor class for @see \Magento\Downloadable\Block\Checkout\Success
 */
class Interceptor extends \Magento\Downloadable\Block\Checkout\Success implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Sales\Model\Order\Config $orderConfig, \Magento\Framework\App\Http\Context $httpContext, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $orderConfig, $httpContext, $currentCustomer, $data);
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

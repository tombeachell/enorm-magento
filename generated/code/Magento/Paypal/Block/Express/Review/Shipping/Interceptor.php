<?php
namespace Magento\Paypal\Block\Express\Review\Shipping;

/**
 * Interceptor class for @see \Magento\Paypal\Block\Express\Review\Shipping
 */
class Interceptor extends \Magento\Paypal\Block\Express\Review\Shipping implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Model\Session $customerSession, \Magento\Checkout\Model\Session $resourceSession, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\App\Http\Context $httpContext, \Magento\Quote\Model\Quote\AddressFactory $addressFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $customerSession, $resourceSession, $customerRepository, $httpContext, $addressFactory, $data);
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

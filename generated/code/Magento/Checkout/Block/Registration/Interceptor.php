<?php
namespace Magento\Checkout\Block\Registration;

/**
 * Interceptor class for @see \Magento\Checkout\Block\Registration
 */
class Interceptor extends \Magento\Checkout\Block\Registration implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Checkout\Model\Session $checkoutSession, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\Registration $registration, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Sales\Api\OrderRepositoryInterface $orderRepository, \Magento\Sales\Model\Order\Address\Validator $addressValidator, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $checkoutSession, $customerSession, $registration, $accountManagement, $orderRepository, $addressValidator, $data);
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

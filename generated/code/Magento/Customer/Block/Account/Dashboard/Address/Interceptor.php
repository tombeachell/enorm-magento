<?php
namespace Magento\Customer\Block\Account\Dashboard\Address;

/**
 * Interceptor class for @see \Magento\Customer\Block\Account\Dashboard\Address
 */
class Interceptor extends \Magento\Customer\Block\Account\Dashboard\Address implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, \Magento\Customer\Helper\Session\CurrentCustomerAddress $currentCustomerAddress, \Magento\Customer\Model\Address\Config $addressConfig, \Magento\Customer\Model\Address\Mapper $addressMapper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $currentCustomer, $currentCustomerAddress, $addressConfig, $addressMapper, $data);
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

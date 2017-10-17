<?php
namespace Magento\Multishipping\Block\Checkout\Address\Select;

/**
 * Interceptor class for @see \Magento\Multishipping\Block\Checkout\Address\Select
 */
class Interceptor extends \Magento\Multishipping\Block\Checkout\Address\Select implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Multishipping\Model\Checkout\Type\Multishipping $multishipping, \Magento\Customer\Helper\Address $customerAddressHelper, \Magento\Customer\Model\Address\Mapper $addressMapper, \Magento\Customer\Api\AddressRepositoryInterface $addressRepository, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Api\FilterBuilder $filterBuilder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $multishipping, $customerAddressHelper, $addressMapper, $addressRepository, $searchCriteriaBuilder, $filterBuilder, $data);
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

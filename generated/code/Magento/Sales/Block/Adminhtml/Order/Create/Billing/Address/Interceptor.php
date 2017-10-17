<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Billing\Address;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Billing\Address
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Billing\Address implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Session\Quote $sessionQuote, \Magento\Sales\Model\AdminOrder\Create $orderCreate, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Framework\Reflection\DataObjectProcessor $dataObjectProcessor, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Customer\Model\Metadata\FormFactory $customerFormFactory, \Magento\Customer\Model\Options $options, \Magento\Customer\Helper\Address $addressHelper, \Magento\Customer\Api\AddressRepositoryInterface $addressService, \Magento\Framework\Api\SearchCriteriaBuilder $criteriaBuilder, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Customer\Model\Address\Mapper $addressMapper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $sessionQuote, $orderCreate, $priceCurrency, $formFactory, $dataObjectProcessor, $directoryHelper, $jsonEncoder, $customerFormFactory, $options, $addressHelper, $addressService, $criteriaBuilder, $filterBuilder, $addressMapper, $data);
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

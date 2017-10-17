<?php
namespace Magento\Weee\Model\Tax;

/**
 * Interceptor class for @see \Magento\Weee\Model\Tax
 */
class Interceptor extends \Magento\Weee\Model\Tax implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Eav\Model\Entity\AttributeFactory $attributeFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Tax\Model\CalculationFactory $calculationFactory, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Api\AccountManagementInterface $accountManagement, \Magento\Tax\Helper\Data $taxData, \Magento\Weee\Model\ResourceModel\Tax $resource, \Magento\Weee\Model\Config $weeeConfig, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $attributeFactory, $storeManager, $calculationFactory, $customerSession, $accountManagement, $taxData, $resource, $weeeConfig, $priceCurrency, $resourceCollection, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function afterSave()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'afterSave');
        if (!$pluginInfo) {
            return parent::afterSave();
        } else {
            return $this->___callPlugins('afterSave', func_get_args(), $pluginInfo);
        }
    }
}

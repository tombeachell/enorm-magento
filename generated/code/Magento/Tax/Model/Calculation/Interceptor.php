<?php
namespace Magento\Tax\Model\Calculation;

/**
 * Interceptor class for @see \Magento\Tax\Model\Calculation
 */
class Interceptor extends \Magento\Tax\Model\Calculation implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig, \Magento\Tax\Model\Config $taxConfig, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Session $customerSession, \Magento\Customer\Model\CustomerFactory $customerFactory, \Magento\Tax\Model\ResourceModel\TaxClass\CollectionFactory $classesFactory, \Magento\Tax\Model\ResourceModel\Calculation $resource, \Magento\Customer\Api\AccountManagementInterface $customerAccountManagement, \Magento\Customer\Api\GroupManagementInterface $customerGroupManagement, \Magento\Customer\Api\GroupRepositoryInterface $customerGroupRepository, \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Api\FilterBuilder $filterBuilder, \Magento\Tax\Api\TaxClassRepositoryInterface $taxClassRepository, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $scopeConfig, $taxConfig, $storeManager, $customerSession, $customerFactory, $classesFactory, $resource, $customerAccountManagement, $customerGroupManagement, $customerGroupRepository, $customerRepository, $priceCurrency, $searchCriteriaBuilder, $filterBuilder, $taxClassRepository, $resourceCollection, $data);
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

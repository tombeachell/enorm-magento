<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Price\Tier;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Price\Tier
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Price\Tier implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Customer\Api\GroupRepositoryInterface $groupRepository, \Magento\Directory\Helper\Data $directoryHelper, \Magento\Framework\Module\Manager $moduleManager, \Magento\Framework\Registry $registry, \Magento\Customer\Api\GroupManagementInterface $groupManagement, \Magento\Framework\Api\SearchCriteriaBuilder $searchCriteriaBuilder, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $groupRepository, $directoryHelper, $moduleManager, $registry, $groupManagement, $searchCriteriaBuilder, $localeCurrency, $data);
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

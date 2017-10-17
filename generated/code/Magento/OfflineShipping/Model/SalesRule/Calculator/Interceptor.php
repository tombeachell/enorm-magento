<?php
namespace Magento\OfflineShipping\Model\SalesRule\Calculator;

/**
 * Interceptor class for @see \Magento\OfflineShipping\Model\SalesRule\Calculator
 */
class Interceptor extends \Magento\OfflineShipping\Model\SalesRule\Calculator implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\SalesRule\Model\ResourceModel\Rule\CollectionFactory $collectionFactory, \Magento\Catalog\Helper\Data $catalogData, \Magento\SalesRule\Model\Utility $utility, \Magento\SalesRule\Model\RulesApplier $rulesApplier, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\SalesRule\Model\Validator\Pool $validators, \Magento\Framework\Message\ManagerInterface $messageManager, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $collectionFactory, $catalogData, $utility, $rulesApplier, $priceCurrency, $validators, $messageManager, $resource, $resourceCollection, $data);
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

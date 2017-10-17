<?php
namespace Magento\Reports\Model\Product\Index\Viewed;

/**
 * Interceptor class for @see \Magento\Reports\Model\Product\Index\Viewed
 */
class Interceptor extends \Magento\Reports\Model\Product\Index\Viewed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\Context $context, \Magento\Framework\Registry $registry, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Customer\Model\Visitor $customerVisitor, \Magento\Customer\Model\Session $customerSession, \Magento\Framework\Session\Generic $reportSession, \Magento\Catalog\Model\Product\Visibility $productVisibility, \Magento\Framework\Stdlib\DateTime $dateTime, \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null, \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $registry, $storeManager, $customerVisitor, $customerSession, $reportSession, $productVisibility, $dateTime, $resource, $resourceCollection, $data);
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

<?php
namespace Magento\Newsletter\Block\Adminhtml\Subscriber\Grid\Filter\Website;

/**
 * Interceptor class for @see \Magento\Newsletter\Block\Adminhtml\Subscriber\Grid\Filter\Website
 */
class Interceptor extends \Magento\Newsletter\Block\Adminhtml\Subscriber\Grid\Filter\Website implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\DB\Helper $resourceHelper, \Magento\Store\Model\ResourceModel\Website\CollectionFactory $websitesFactory, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $resourceHelper, $websitesFactory, $storeManager, $registry, $data);
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

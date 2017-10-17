<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Widget\Chooser;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Widget\Chooser
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Widget\Chooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Catalog\Model\CategoryFactory $categoryFactory, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $collectionFactory, \Magento\Catalog\Model\ResourceModel\Category $resourceCategory, \Magento\Catalog\Model\ResourceModel\Product $resourceProduct, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $categoryFactory, $collectionFactory, $resourceCategory, $resourceProduct, $data);
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

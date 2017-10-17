<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Attributes\Search;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Attributes\Search
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Attributes\Search implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\DB\Helper $resourceHelper, \Magento\Catalog\Model\ResourceModel\Product\Attribute\CollectionFactory $collectionFactory, \Magento\Framework\Registry $registry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $resourceHelper, $collectionFactory, $registry, $data);
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

<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Related;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Related
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Edit\Tab\Related implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Catalog\Model\Product\LinkFactory $linkFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Set\CollectionFactory $setsFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Model\Product\Type $type, \Magento\Catalog\Model\Product\Attribute\Source\Status $status, \Magento\Catalog\Model\Product\Visibility $visibility, \Magento\Framework\Registry $coreRegistry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $linkFactory, $setsFactory, $productFactory, $type, $status, $visibility, $coreRegistry, $data);
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

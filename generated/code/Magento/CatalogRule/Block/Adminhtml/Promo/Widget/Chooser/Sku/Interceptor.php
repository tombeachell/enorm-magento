<?php
namespace Magento\CatalogRule\Block\Adminhtml\Promo\Widget\Chooser\Sku;

/**
 * Interceptor class for @see \Magento\CatalogRule\Block\Adminhtml\Promo\Widget\Chooser\Sku
 */
class Interceptor extends \Magento\CatalogRule\Block\Adminhtml\Promo\Widget\Chooser\Sku implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Set\CollectionFactory $eavAttSetCollection, \Magento\Catalog\Model\ResourceModel\Product\CollectionFactory $cpCollection, \Magento\Catalog\Model\Product\Type $catalogType, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $eavAttSetCollection, $cpCollection, $catalogType, $data);
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

<?php
namespace Magento\Catalog\Block\Adminhtml\Product\Grid;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Adminhtml\Product\Grid
 */
class Interceptor extends \Magento\Catalog\Block\Adminhtml\Product\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Store\Model\WebsiteFactory $websiteFactory, \Magento\Eav\Model\ResourceModel\Entity\Attribute\Set\CollectionFactory $setsFactory, \Magento\Catalog\Model\ProductFactory $productFactory, \Magento\Catalog\Model\Product\Type $type, \Magento\Catalog\Model\Product\Attribute\Source\Status $status, \Magento\Catalog\Model\Product\Visibility $visibility, \Magento\Framework\Module\Manager $moduleManager, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $websiteFactory, $setsFactory, $productFactory, $type, $status, $visibility, $moduleManager, $data);
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

<?php
namespace Magento\Reports\Block\Adminhtml\Wishlist\Grid;

/**
 * Interceptor class for @see \Magento\Reports\Block\Adminhtml\Wishlist\Grid
 */
class Interceptor extends \Magento\Reports\Block\Adminhtml\Wishlist\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Reports\Model\ResourceModel\Wishlist\Product\CollectionFactory $productsFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $productsFactory, $data);
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

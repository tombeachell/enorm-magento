<?php
namespace Magento\Reports\Block\Adminhtml\Wishlist;

/**
 * Interceptor class for @see \Magento\Reports\Block\Adminhtml\Wishlist
 */
class Interceptor extends \Magento\Reports\Block\Adminhtml\Wishlist implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Reports\Model\ResourceModel\Wishlist\CollectionFactory $wishlistFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $wishlistFactory, $data);
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

<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Tab\Reviews;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Tab\Reviews
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Tab\Reviews implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Review\Model\ReviewFactory $reviewFactory, \Magento\Review\Model\ResourceModel\Review\Product\CollectionFactory $productsFactory, \Magento\Review\Helper\Data $reviewData, \Magento\Review\Helper\Action\Pager $reviewActionPager, \Magento\Framework\Registry $coreRegistry, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $reviewFactory, $productsFactory, $reviewData, $reviewActionPager, $coreRegistry, $data);
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

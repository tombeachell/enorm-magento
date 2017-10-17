<?php
namespace Magento\Customer\Block\Adminhtml\Edit\Tab\View\Cart;

/**
 * Interceptor class for @see \Magento\Customer\Block\Adminhtml\Edit\Tab\View\Cart
 */
class Interceptor extends \Magento\Customer\Block\Adminhtml\Edit\Tab\View\Cart implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, \Magento\Quote\Api\CartRepositoryInterface $quoteRepository, \Magento\Framework\Data\CollectionFactory $dataCollectionFactory, \Magento\Framework\Registry $coreRegistry, \Magento\Quote\Model\QuoteFactory $quoteFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $quoteRepository, $dataCollectionFactory, $coreRegistry, $quoteFactory, $data);
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

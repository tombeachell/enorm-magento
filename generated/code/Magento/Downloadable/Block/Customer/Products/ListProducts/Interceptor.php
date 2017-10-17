<?php
namespace Magento\Downloadable\Block\Customer\Products\ListProducts;

/**
 * Interceptor class for @see \Magento\Downloadable\Block\Customer\Products\ListProducts
 */
class Interceptor extends \Magento\Downloadable\Block\Customer\Products\ListProducts implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Customer\Helper\Session\CurrentCustomer $currentCustomer, \Magento\Downloadable\Model\ResourceModel\Link\Purchased\CollectionFactory $linksFactory, \Magento\Downloadable\Model\ResourceModel\Link\Purchased\Item\CollectionFactory $itemsFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $currentCustomer, $linksFactory, $itemsFactory, $data);
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

<?php
namespace Magento\Sales\Block\Order\Items;

/**
 * Interceptor class for @see \Magento\Sales\Block\Order\Items
 */
class Interceptor extends \Magento\Sales\Block\Order\Items implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Registry $registry, array $data = array(), \Magento\Sales\Model\ResourceModel\Order\Item\CollectionFactory $itemCollectionFactory = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $data, $itemCollectionFactory);
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

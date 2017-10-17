<?php
namespace Magento\Downloadable\Block\Sales\Order\Item\Renderer\Downloadable;

/**
 * Interceptor class for @see \Magento\Downloadable\Block\Sales\Order\Item\Renderer\Downloadable
 */
class Interceptor extends \Magento\Downloadable\Block\Sales\Order\Item\Renderer\Downloadable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\Stdlib\StringUtils $string, \Magento\Catalog\Model\Product\OptionFactory $productOptionFactory, \Magento\Downloadable\Model\Link\PurchasedFactory $purchasedFactory, \Magento\Downloadable\Model\ResourceModel\Link\Purchased\Item\CollectionFactory $itemsFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $string, $productOptionFactory, $purchasedFactory, $itemsFactory, $data);
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

<?php
namespace Magento\Downloadable\Block\Sales\Order\Email\Items\Downloadable;

/**
 * Interceptor class for @see \Magento\Downloadable\Block\Sales\Order\Email\Items\Downloadable
 */
class Interceptor extends \Magento\Downloadable\Block\Sales\Order\Email\Items\Downloadable implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Downloadable\Model\Link\PurchasedFactory $purchasedFactory, \Magento\Downloadable\Model\ResourceModel\Link\Purchased\Item\CollectionFactory $itemsFactory, \Magento\Framework\Url $frontendUrlBuilder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $purchasedFactory, $itemsFactory, $frontendUrlBuilder, $data);
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

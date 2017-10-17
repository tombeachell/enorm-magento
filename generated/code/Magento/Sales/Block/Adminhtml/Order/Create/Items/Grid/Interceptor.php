<?php
namespace Magento\Sales\Block\Adminhtml\Order\Create\Items\Grid;

/**
 * Interceptor class for @see \Magento\Sales\Block\Adminhtml\Order\Create\Items\Grid
 */
class Interceptor extends \Magento\Sales\Block\Adminhtml\Order\Create\Items\Grid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Model\Session\Quote $sessionQuote, \Magento\Sales\Model\AdminOrder\Create $orderCreate, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Wishlist\Model\WishlistFactory $wishlistFactory, \Magento\GiftMessage\Model\Save $giftMessageSave, \Magento\Tax\Model\Config $taxConfig, \Magento\Tax\Helper\Data $taxData, \Magento\GiftMessage\Helper\Message $messageHelper, \Magento\CatalogInventory\Api\StockRegistryInterface $stockRegistry, \Magento\CatalogInventory\Api\StockStateInterface $stockState, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $sessionQuote, $orderCreate, $priceCurrency, $wishlistFactory, $giftMessageSave, $taxConfig, $taxData, $messageHelper, $stockRegistry, $stockState, $data);
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

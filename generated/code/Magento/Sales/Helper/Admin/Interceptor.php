<?php
namespace Magento\Sales\Helper\Admin;

/**
 * Interceptor class for @see \Magento\Sales\Helper\Admin
 */
class Interceptor extends \Magento\Sales\Helper\Admin implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Helper\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Sales\Model\Config $salesConfig, \Magento\Framework\Pricing\PriceCurrencyInterface $priceCurrency, \Magento\Framework\Escaper $escaper)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $salesConfig, $priceCurrency, $escaper);
    }

    /**
     * {@inheritdoc}
     */
    public function escapeHtmlWithLinks($data, $allowedTags = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'escapeHtmlWithLinks');
        if (!$pluginInfo) {
            return parent::escapeHtmlWithLinks($data, $allowedTags);
        } else {
            return $this->___callPlugins('escapeHtmlWithLinks', func_get_args(), $pluginInfo);
        }
    }
}

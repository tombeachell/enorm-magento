<?php
namespace Magento\Directory\Model\PriceCurrency;

/**
 * Interceptor class for @see \Magento\Directory\Model\PriceCurrency
 */
class Interceptor extends \Magento\Directory\Model\PriceCurrency implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Directory\Model\CurrencyFactory $currencyFactory, \Psr\Log\LoggerInterface $logger)
    {
        $this->___init();
        parent::__construct($storeManager, $currencyFactory, $logger);
    }

    /**
     * {@inheritdoc}
     */
    public function format($amount, $includeContainer = true, $precision = 2, $scope = null, $currency = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'format');
        if (!$pluginInfo) {
            return parent::format($amount, $includeContainer, $precision, $scope, $currency);
        } else {
            return $this->___callPlugins('format', func_get_args(), $pluginInfo);
        }
    }
}

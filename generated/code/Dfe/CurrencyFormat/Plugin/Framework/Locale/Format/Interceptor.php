<?php
namespace Dfe\CurrencyFormat\Plugin\Framework\Locale\Format;

/**
 * Interceptor class for @see \Dfe\CurrencyFormat\Plugin\Framework\Locale\Format
 */
class Interceptor extends \Dfe\CurrencyFormat\Plugin\Framework\Locale\Format implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct()
    {
        $this->___init();
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function getPriceFormat($localeCode = null, $currencyCode = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getPriceFormat');
        if (!$pluginInfo) {
            return parent::getPriceFormat($localeCode, $currencyCode);
        } else {
            return $this->___callPlugins('getPriceFormat', func_get_args(), $pluginInfo);
        }
    }
}

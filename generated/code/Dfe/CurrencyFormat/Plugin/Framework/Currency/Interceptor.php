<?php
namespace Dfe\CurrencyFormat\Plugin\Framework\Currency;

/**
 * Interceptor class for @see \Dfe\CurrencyFormat\Plugin\Framework\Currency
 */
class Interceptor extends \Dfe\CurrencyFormat\Plugin\Framework\Currency implements \Magento\Framework\Interception\InterceptorInterface
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
    public function toCurrency($value = null, array $options = array())
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'toCurrency');
        if (!$pluginInfo) {
            return parent::toCurrency($value, $options);
        } else {
            return $this->___callPlugins('toCurrency', func_get_args(), $pluginInfo);
        }
    }
}

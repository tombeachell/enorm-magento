<?php
namespace Dfe\CurrencyFormat\Plugin\Framework\Pricing\Render\Amount;

/**
 * Interceptor class for @see \Dfe\CurrencyFormat\Plugin\Framework\Pricing\Render\Amount
 */
class Interceptor extends \Dfe\CurrencyFormat\Plugin\Framework\Pricing\Render\Amount implements \Magento\Framework\Interception\InterceptorInterface
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
    public function formatCurrency($amount, $includeContainer = true, $precision = 2)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'formatCurrency');
        if (!$pluginInfo) {
            return parent::formatCurrency($amount, $includeContainer, $precision);
        } else {
            return $this->___callPlugins('formatCurrency', func_get_args(), $pluginInfo);
        }
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

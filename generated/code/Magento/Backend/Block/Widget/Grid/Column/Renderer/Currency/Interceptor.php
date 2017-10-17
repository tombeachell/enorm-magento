<?php
namespace Magento\Backend\Block\Widget\Grid\Column\Renderer\Currency;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\Column\Renderer\Currency
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\Currency implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Directory\Model\Currency\DefaultLocator $currencyLocator, \Magento\Directory\Model\CurrencyFactory $currencyFactory, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $storeManager, $currencyLocator, $currencyFactory, $localeCurrency, $data);
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

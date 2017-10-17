<?php
namespace Magento\Backend\Block\Widget\Grid\Column\Renderer\Price;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\Column\Renderer\Price
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\Column\Renderer\Price implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Locale\CurrencyInterface $localeCurrency, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $localeCurrency, $data);
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

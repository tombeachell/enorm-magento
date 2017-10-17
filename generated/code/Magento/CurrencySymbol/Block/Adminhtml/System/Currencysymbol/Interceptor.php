<?php
namespace Magento\CurrencySymbol\Block\Adminhtml\System\Currencysymbol;

/**
 * Interceptor class for @see \Magento\CurrencySymbol\Block\Adminhtml\System\Currencysymbol
 */
class Interceptor extends \Magento\CurrencySymbol\Block\Adminhtml\System\Currencysymbol implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\CurrencySymbol\Model\System\CurrencysymbolFactory $symbolSystemFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $symbolSystemFactory, $data);
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

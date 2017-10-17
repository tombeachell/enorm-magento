<?php
namespace Magento\CurrencySymbol\Block\Adminhtml\System\Currency\Rate\Services;

/**
 * Interceptor class for @see \Magento\CurrencySymbol\Block\Adminhtml\System\Currency\Rate\Services
 */
class Interceptor extends \Magento\CurrencySymbol\Block\Adminhtml\System\Currency\Rate\Services implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Directory\Model\Currency\Import\Source\ServiceFactory $srcCurrencyFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $srcCurrencyFactory, $data);
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

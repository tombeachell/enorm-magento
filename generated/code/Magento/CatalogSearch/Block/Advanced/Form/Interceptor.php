<?php
namespace Magento\CatalogSearch\Block\Advanced\Form;

/**
 * Interceptor class for @see \Magento\CatalogSearch\Block\Advanced\Form
 */
class Interceptor extends \Magento\CatalogSearch\Block\Advanced\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\CatalogSearch\Model\Advanced $catalogSearchAdvanced, \Magento\Directory\Model\CurrencyFactory $currencyFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $catalogSearchAdvanced, $currencyFactory, $data);
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

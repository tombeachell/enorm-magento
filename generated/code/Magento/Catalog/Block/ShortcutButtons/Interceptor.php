<?php
namespace Magento\Catalog\Block\ShortcutButtons;

/**
 * Interceptor class for @see \Magento\Catalog\Block\ShortcutButtons
 */
class Interceptor extends \Magento\Catalog\Block\ShortcutButtons implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, $isCatalogProduct = false, $orPosition = null, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $isCatalogProduct, $orPosition, $data);
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

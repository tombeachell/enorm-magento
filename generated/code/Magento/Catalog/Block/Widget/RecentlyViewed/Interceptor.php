<?php
namespace Magento\Catalog\Block\Widget\RecentlyViewed;

/**
 * Interceptor class for @see \Magento\Catalog\Block\Widget\RecentlyViewed
 */
class Interceptor extends \Magento\Catalog\Block\Widget\RecentlyViewed implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Ui\Model\UiComponentGenerator $uiComponentGenerator, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $uiComponentGenerator, $data);
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

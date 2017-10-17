<?php
namespace Magento\Store\Block\Store\Switcher;

/**
 * Interceptor class for @see \Magento\Store\Block\Store\Switcher
 */
class Interceptor extends \Magento\Store\Block\Store\Switcher implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Store\Model\GroupFactory $storeGroupFactory, \Magento\Store\Model\StoreFactory $storeFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $storeGroupFactory, $storeFactory, $data);
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

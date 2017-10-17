<?php
namespace Magento\Theme\Block\Adminhtml\Design\Config\Edit\Scope;

/**
 * Interceptor class for @see \Magento\Theme\Block\Adminhtml\Design\Config\Edit\Scope
 */
class Interceptor extends \Magento\Theme\Block\Adminhtml\Design\Config\Edit\Scope implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\App\ScopeResolverPool $scopeResolverPool)
    {
        $this->___init();
        parent::__construct($context, $scopeResolverPool);
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

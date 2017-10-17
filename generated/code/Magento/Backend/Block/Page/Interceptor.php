<?php
namespace Magento\Backend\Block\Page;

/**
 * Interceptor class for @see \Magento\Backend\Block\Page
 */
class Interceptor extends \Magento\Backend\Block\Page implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Locale\ResolverInterface $localeResolver, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $localeResolver, $data);
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

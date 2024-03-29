<?php
namespace Magento\Backend\Block\Widget\Grid\Extended;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\Extended
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\Extended implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Backend\Helper\Data $backendHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $backendHelper, $data);
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

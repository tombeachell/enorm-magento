<?php
namespace Magento\Backend\Block\Widget\Grid\Column\Filter\Massaction;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\Column\Filter\Massaction
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\Column\Filter\Massaction implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\DB\Helper $resourceHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $resourceHelper, $data);
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

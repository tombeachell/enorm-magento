<?php
namespace Magento\Indexer\Block\Backend\Grid\Column\Renderer\Updated;

/**
 * Interceptor class for @see \Magento\Indexer\Block\Backend\Grid\Column\Renderer\Updated
 */
class Interceptor extends \Magento\Indexer\Block\Backend\Grid\Column\Renderer\Updated implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $data);
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
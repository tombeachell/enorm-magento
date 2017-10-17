<?php
namespace Magento\Integration\Block\Adminhtml\Widget\Grid\Column\Renderer\Button\Delete;

/**
 * Interceptor class for @see \Magento\Integration\Block\Adminhtml\Widget\Grid\Column\Renderer\Button\Delete
 */
class Interceptor extends \Magento\Integration\Block\Adminhtml\Widget\Grid\Column\Renderer\Button\Delete implements \Magento\Framework\Interception\InterceptorInterface
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

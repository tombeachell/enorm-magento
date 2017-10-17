<?php
namespace Magento\Reports\Block\Adminhtml\Grid\Column\Renderer\Blanknumber;

/**
 * Interceptor class for @see \Magento\Reports\Block\Adminhtml\Grid\Column\Renderer\Blanknumber
 */
class Interceptor extends \Magento\Reports\Block\Adminhtml\Grid\Column\Renderer\Blanknumber implements \Magento\Framework\Interception\InterceptorInterface
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

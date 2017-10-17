<?php
namespace Magento\Integration\Block\Adminhtml\Widget\Grid\Column\Renderer\Link\Activate;

/**
 * Interceptor class for @see \Magento\Integration\Block\Adminhtml\Widget\Grid\Column\Renderer\Link\Activate
 */
class Interceptor extends \Magento\Integration\Block\Adminhtml\Widget\Grid\Column\Renderer\Link\Activate implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Json\Helper\Data $jsonHelper, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonHelper, $data);
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

<?php
namespace Magento\Weee\Block\Adminhtml\Items\Price\Renderer;

/**
 * Interceptor class for @see \Magento\Weee\Block\Adminhtml\Items\Price\Renderer
 */
class Interceptor extends \Magento\Weee\Block\Adminhtml\Items\Price\Renderer implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Sales\Block\Adminhtml\Items\Column\DefaultColumn $defaultColumnRenderer, \Magento\Tax\Helper\Data $taxHelper, \Magento\Weee\Block\Item\Price\Renderer $itemPriceRenderer, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $defaultColumnRenderer, $taxHelper, $itemPriceRenderer, $data);
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

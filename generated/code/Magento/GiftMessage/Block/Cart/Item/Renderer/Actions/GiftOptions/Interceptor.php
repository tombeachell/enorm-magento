<?php
namespace Magento\GiftMessage\Block\Cart\Item\Renderer\Actions\GiftOptions;

/**
 * Interceptor class for @see \Magento\GiftMessage\Block\Cart\Item\Renderer\Actions\GiftOptions
 */
class Interceptor extends \Magento\GiftMessage\Block\Cart\Item\Renderer\Actions\GiftOptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\Encoder $jsonEncoder, array $layoutProcessors = array(), array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $layoutProcessors, $data);
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

<?php
namespace Magento\Email\Block\Adminhtml\Template\Grid\Renderer\Action;

/**
 * Interceptor class for @see \Magento\Email\Block\Adminhtml\Template\Grid\Renderer\Action
 */
class Interceptor extends \Magento\Email\Block\Adminhtml\Template\Grid\Renderer\Action implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $data);
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

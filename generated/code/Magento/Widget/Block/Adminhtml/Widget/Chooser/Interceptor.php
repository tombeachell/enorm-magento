<?php
namespace Magento\Widget\Block\Adminhtml\Widget\Chooser;

/**
 * Interceptor class for @see \Magento\Widget\Block\Adminhtml\Widget\Chooser
 */
class Interceptor extends \Magento\Widget\Block\Adminhtml\Widget\Chooser implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Framework\Data\Form\Element\Factory $elementFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $elementFactory, $data);
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

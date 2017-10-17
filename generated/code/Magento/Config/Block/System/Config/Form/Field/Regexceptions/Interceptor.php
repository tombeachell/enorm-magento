<?php
namespace Magento\Config\Block\System\Config\Form\Field\Regexceptions;

/**
 * Interceptor class for @see \Magento\Config\Block\System\Config\Form\Field\Regexceptions
 */
class Interceptor extends \Magento\Config\Block\System\Config\Form\Field\Regexceptions implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Data\Form\Element\Factory $elementFactory, \Magento\Framework\View\Design\Theme\LabelFactory $labelFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $elementFactory, $labelFactory, $data);
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

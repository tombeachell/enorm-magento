<?php
namespace Magento\Backend\Block\Widget\Form\Element\Dependence;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Form\Element\Dependence
 */
class Interceptor extends \Magento\Backend\Block\Widget\Form\Element\Dependence implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\Json\EncoderInterface $jsonEncoder, \Magento\Config\Model\Config\Structure\Element\Dependency\FieldFactory $fieldFactory, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $jsonEncoder, $fieldFactory, $data);
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

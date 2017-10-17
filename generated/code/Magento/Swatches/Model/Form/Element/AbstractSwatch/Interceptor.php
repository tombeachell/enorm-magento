<?php
namespace Magento\Swatches\Model\Form\Element\AbstractSwatch;

/**
 * Interceptor class for @see \Magento\Swatches\Model\Form\Element\AbstractSwatch
 */
class Interceptor extends \Magento\Swatches\Model\Form\Element\AbstractSwatch implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Data\Form\Element\Factory $factoryElement, \Magento\Framework\Data\Form\Element\CollectionFactory $factoryCollection, \Magento\Framework\Escaper $escaper, $data = array())
    {
        $this->___init();
        parent::__construct($factoryElement, $factoryCollection, $escaper, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function getElementHtml()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getElementHtml');
        if (!$pluginInfo) {
            return parent::getElementHtml();
        } else {
            return $this->___callPlugins('getElementHtml', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getHtmlAttributes()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getHtmlAttributes');
        if (!$pluginInfo) {
            return parent::getHtmlAttributes();
        } else {
            return $this->___callPlugins('getHtmlAttributes', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setForm($form)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setForm');
        if (!$pluginInfo) {
            return parent::setForm($form);
        } else {
            return $this->___callPlugins('setForm', func_get_args(), $pluginInfo);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function getLabelHtml($idSuffix = '', $scopeLabel = '')
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLabelHtml');
        if (!$pluginInfo) {
            return parent::getLabelHtml($idSuffix, $scopeLabel);
        } else {
            return $this->___callPlugins('getLabelHtml', func_get_args(), $pluginInfo);
        }
    }
}

<?php
namespace Magento\Config\Model\Config\Structure\Element\Iterator\Tab;

/**
 * Interceptor class for @see \Magento\Config\Model\Config\Structure\Element\Iterator\Tab
 */
class Interceptor extends \Magento\Config\Model\Config\Structure\Element\Iterator\Tab implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Config\Model\Config\Structure\Element\Tab $element)
    {
        $this->___init();
        parent::__construct($element);
    }

    /**
     * {@inheritdoc}
     */
    public function setElements(array $elements, $scope)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'setElements');
        if (!$pluginInfo) {
            return parent::setElements($elements, $scope);
        } else {
            return $this->___callPlugins('setElements', func_get_args(), $pluginInfo);
        }
    }
}

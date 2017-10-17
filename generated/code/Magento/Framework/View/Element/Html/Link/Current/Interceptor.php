<?php
namespace Magento\Framework\View\Element\Html\Link\Current;

/**
 * Interceptor class for @see \Magento\Framework\View\Element\Html\Link\Current
 */
class Interceptor extends \Magento\Framework\View\Element\Html\Link\Current implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Framework\App\DefaultPathInterface $defaultPath, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $defaultPath, $data);
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

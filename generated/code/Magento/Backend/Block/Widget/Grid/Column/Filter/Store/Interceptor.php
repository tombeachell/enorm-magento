<?php
namespace Magento\Backend\Block\Widget\Grid\Column\Filter\Store;

/**
 * Interceptor class for @see \Magento\Backend\Block\Widget\Grid\Column\Filter\Store
 */
class Interceptor extends \Magento\Backend\Block\Widget\Grid\Column\Filter\Store implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Context $context, \Magento\Framework\DB\Helper $resourceHelper, \Magento\Store\Model\System\Store $systemStore, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $resourceHelper, $systemStore, $data);
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

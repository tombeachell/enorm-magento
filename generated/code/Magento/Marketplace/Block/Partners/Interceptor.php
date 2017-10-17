<?php
namespace Magento\Marketplace\Block\Partners;

/**
 * Interceptor class for @see \Magento\Marketplace\Block\Partners
 */
class Interceptor extends \Magento\Marketplace\Block\Partners implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Marketplace\Model\Partners $partnersModel, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $partnersModel, $data);
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

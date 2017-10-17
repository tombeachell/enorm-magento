<?php
namespace Magento\Vault\Block\Form;

/**
 * Interceptor class for @see \Magento\Vault\Block\Form
 */
class Interceptor extends \Magento\Vault\Block\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Element\Template\Context $context, \Magento\Vault\Model\Ui\Adminhtml\TokensConfigProvider $tokensConfigProvider, \Magento\Payment\Model\CcConfigProvider $ccConfigProvider, array $data = array())
    {
        $this->___init();
        parent::__construct($context, $tokensConfigProvider, $ccConfigProvider, $data);
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

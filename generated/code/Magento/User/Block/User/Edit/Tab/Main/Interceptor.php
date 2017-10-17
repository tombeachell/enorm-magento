<?php
namespace Magento\User\Block\User\Edit\Tab\Main;

/**
 * Interceptor class for @see \Magento\User\Block\User\Edit\Tab\Main
 */
class Interceptor extends \Magento\User\Block\User\Edit\Tab\Main implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\Locale\ListsInterface $localeLists, array $data = array(), \Magento\Framework\Locale\OptionInterface $deployedLocales = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $authSession, $localeLists, $data, $deployedLocales);
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

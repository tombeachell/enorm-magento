<?php
namespace Magento\Backend\Block\System\Account\Edit\Form;

/**
 * Interceptor class for @see \Magento\Backend\Block\System\Account\Edit\Form
 */
class Interceptor extends \Magento\Backend\Block\System\Account\Edit\Form implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $registry, \Magento\Framework\Data\FormFactory $formFactory, \Magento\User\Model\UserFactory $userFactory, \Magento\Backend\Model\Auth\Session $authSession, \Magento\Framework\Locale\ListsInterface $localeLists, array $data = array(), \Magento\Framework\Locale\OptionInterface $deployedLocales = null)
    {
        $this->___init();
        parent::__construct($context, $registry, $formFactory, $userFactory, $authSession, $localeLists, $data, $deployedLocales);
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
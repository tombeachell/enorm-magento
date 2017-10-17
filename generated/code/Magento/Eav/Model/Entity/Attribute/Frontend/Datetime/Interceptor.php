<?php
namespace Magento\Eav\Model\Entity\Attribute\Frontend\Datetime;

/**
 * Interceptor class for @see \Magento\Eav\Model\Entity\Attribute\Frontend\Datetime
 */
class Interceptor extends \Magento\Eav\Model\Entity\Attribute\Frontend\Datetime implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Eav\Model\Entity\Attribute\Source\BooleanFactory $attrBooleanFactory, \Magento\Framework\Stdlib\DateTime\TimezoneInterface $localeDate)
    {
        $this->___init();
        parent::__construct($attrBooleanFactory, $localeDate);
    }

    /**
     * {@inheritdoc}
     */
    public function getLabel()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getLabel');
        if (!$pluginInfo) {
            return parent::getLabel();
        } else {
            return $this->___callPlugins('getLabel', func_get_args(), $pluginInfo);
        }
    }
}

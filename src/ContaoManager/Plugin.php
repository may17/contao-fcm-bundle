<?php

/**
 * @copyright  Joe Ray Gregory 2018 <http://may17.de>
 * @author     Joe Ray Gregory
 * @package    Fcm
 * @license    LGPL-3.0+
 * @see	       https://github.com/may17/contao-fcm-bundle
 *
 */

namespace May17\FcmBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Plugin for the Contao Manager.
 *
 * @author Joe Ray Gregory
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create('May17\FcmBundle\May17FcmBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle'])
                ->setReplace(['fcm<']),
        ];
    }
}
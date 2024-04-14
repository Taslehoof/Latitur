<?php

namespace ContainerYni47w1;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEndroidQrCode_DefaultBuilderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'endroid_qr_code.default_builder' shared autowired service.
     *
     * @return \Endroid\QrCode\Builder\Builder
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Builder/BuilderInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Builder/Builder.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Encoding/EncodingInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Encoding/Encoding.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Writer/WriterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Writer/ValidatingWriterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Writer/AbstractGdWriter.php';
        include_once \dirname(__DIR__, 4).'/vendor/endroid/qr-code/src/Writer/PngWriter.php';

        $container->services['endroid_qr_code.default_builder'] = $instance = new \Endroid\QrCode\Builder\Builder();

        $instance->writer(($container->privates['Endroid\\QrCode\\Writer\\PngWriter'] ??= new \Endroid\QrCode\Writer\PngWriter()));
        $instance->size(300);
        $instance->margin(10);
        $instance->encoding(new \Endroid\QrCode\Encoding\Encoding('UTF-8'));
        $instance->errorCorrectionLevel(\Endroid\QrCode\ErrorCorrectionLevel::Low);
        $instance->roundBlockSizeMode(\Endroid\QrCode\RoundBlockSizeMode::Margin);
        $instance->validateResult(false);

        return $instance;
    }
}

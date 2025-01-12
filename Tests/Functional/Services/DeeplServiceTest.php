<?php declare(strict_types = 1);

namespace Functional\Services;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\TestingFramework\Core\Functional\FunctionalTestCase;
use WebVision\WvDeepltranslate\Service\DeeplService;

class DeeplServiceTest extends FunctionalTestCase
{
    /**
     * @var string[]
     */
    protected $testExtensionsToLoad = [
        'typo3conf/ext/wv_deepltranslate',
    ];

    public function __construct()
    {
        parent::__construct();
        $this->configurationToUseInTestInstance = array_merge(
            $this->configurationToUseInTestInstance,
            require __DIR__ . '/../Fixtures/ExtensionConfig.php'
        );
    }

    protected function setUp(): void
    {
        parent::setUp();

        $this->importDataSet(__DIR__ . '/../Fixtures/Settings.xml');
        $this->importDataSet(__DIR__ . '/../Fixtures/Language.xml');
    }

    /**
     * @test
     */
    public function checkSupportedLanguages(): void
    {
        $deeplService = GeneralUtility::makeInstance(DeeplService::class);

        static::assertContains('EN-GB', $deeplService->apiSupportedLanguages);
        static::assertContains('EN-US', $deeplService->apiSupportedLanguages);
        static::assertContains('DE', $deeplService->apiSupportedLanguages);
        static::assertContains('UK', $deeplService->apiSupportedLanguages);
    }

    /**
     * @test
     */
    public function checkFormalitySupportedLanguages(): void
    {
        $deeplService = GeneralUtility::makeInstance(DeeplService::class);

        static::assertContains('ES', $deeplService->formalitySupportedLanguages);
        static::assertContains('DE', $deeplService->formalitySupportedLanguages);
        static::assertContains('NL', $deeplService->formalitySupportedLanguages);
    }
}

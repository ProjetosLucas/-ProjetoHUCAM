<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ImageTypesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ImageTypesTable Test Case
 */
class ImageTypesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ImageTypesTable
     */
    public $ImageTypes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.image_types',
        'app.images'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ImageTypes') ? [] : ['className' => ImageTypesTable::class];
        $this->ImageTypes = TableRegistry::getTableLocator()->get('ImageTypes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ImageTypes);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

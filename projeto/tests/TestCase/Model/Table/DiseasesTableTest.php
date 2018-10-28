<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DiseasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DiseasesTable Test Case
 */
class DiseasesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\DiseasesTable
     */
    public $Diseases;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.diseases',
        'app.users',
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
        $config = TableRegistry::getTableLocator()->exists('Diseases') ? [] : ['className' => DiseasesTable::class];
        $this->Diseases = TableRegistry::getTableLocator()->get('Diseases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Diseases);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}

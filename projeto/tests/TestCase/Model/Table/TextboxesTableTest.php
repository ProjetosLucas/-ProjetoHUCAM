<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TextboxesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TextboxesTable Test Case
 */
class TextboxesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\TextboxesTable
     */
    public $Textboxes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.textboxes',
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
        $config = TableRegistry::getTableLocator()->exists('Textboxes') ? [] : ['className' => TextboxesTable::class];
        $this->Textboxes = TableRegistry::getTableLocator()->get('Textboxes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Textboxes);

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

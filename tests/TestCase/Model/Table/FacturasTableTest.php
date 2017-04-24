<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FacturasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FacturasTable Test Case
 */
class FacturasTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FacturasTable
     */
    public $Facturas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.facturas',
        'app.reservas',
        'app.factura_productos',
        'app.productos',
        'app.recibos',
        'app.remitos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Facturas') ? [] : ['className' => 'App\Model\Table\FacturasTable'];
        $this->Facturas = TableRegistry::get('Facturas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Facturas);

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

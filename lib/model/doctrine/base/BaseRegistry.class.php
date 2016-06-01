<?php

/**
 * BaseRegistry
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $regkey
 * @property string $regclass
 * @property clob $value
 * 
 * @method integer  getId()       Returns the current record's "id" value
 * @method string   getRegkey()   Returns the current record's "regkey" value
 * @method string   getRegclass() Returns the current record's "regclass" value
 * @method clob     getValue()    Returns the current record's "value" value
 * @method Registry setId()       Sets the current record's "id" value
 * @method Registry setRegkey()   Sets the current record's "regkey" value
 * @method Registry setRegclass() Sets the current record's "regclass" value
 * @method Registry setValue()    Sets the current record's "value" value
 * 
 * @package    policat
 * @subpackage model
 * @author     developer-docker
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseRegistry extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('registry');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('regkey', 'string', 200, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => 200,
             ));
        $this->hasColumn('regclass', 'string', 40, array(
             'type' => 'string',
             'notnull' => true,
             'default' => '',
             'length' => 40,
             ));
        $this->hasColumn('value', 'clob', null, array(
             'type' => 'clob',
             ));


        $this->index('registry_key', array(
             'fields' => 
             array(
              0 => 'regkey',
             ),
             ));
        $this->index('registry_class', array(
             'fields' => 
             array(
              0 => 'regclass',
             ),
             ));
        $this->index('registry_key_class', array(
             'fields' => 
             array(
              0 => 'regkey',
              1 => 'regclass',
             ),
             ));
        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $cachetaggable0 = new Doctrine_Template_Cachetaggable(array(
             ));
        $this->actAs($timestampable0);
        $this->actAs($cachetaggable0);
    }
}
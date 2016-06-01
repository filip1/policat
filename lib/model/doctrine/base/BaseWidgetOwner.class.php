<?php

/**
 * BaseWidgetOwner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $status
 * @property integer $owner_id
 * @property integer $widget_id
 * @property Owner $Owner
 * @property Widget $Widget
 * 
 * @method integer     getId()        Returns the current record's "id" value
 * @method integer     getStatus()    Returns the current record's "status" value
 * @method integer     getOwnerId()   Returns the current record's "owner_id" value
 * @method integer     getWidgetId()  Returns the current record's "widget_id" value
 * @method Owner       getOwner()     Returns the current record's "Owner" value
 * @method Widget      getWidget()    Returns the current record's "Widget" value
 * @method WidgetOwner setId()        Sets the current record's "id" value
 * @method WidgetOwner setStatus()    Sets the current record's "status" value
 * @method WidgetOwner setOwnerId()   Sets the current record's "owner_id" value
 * @method WidgetOwner setWidgetId()  Sets the current record's "widget_id" value
 * @method WidgetOwner setOwner()     Sets the current record's "Owner" value
 * @method WidgetOwner setWidget()    Sets the current record's "Widget" value
 * 
 * @package    policat
 * @subpackage model
 * @author     developer-docker
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseWidgetOwner extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('widget_owner');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('status', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 4,
             ));
        $this->hasColumn('owner_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('widget_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));


        $this->index('wo_owner_widget', array(
             'fields' => 
             array(
              0 => 'owner_id',
              1 => 'widget_id',
             ),
             'type' => 'unique',
             ));
        $this->index('wo_widget', array(
             'fields' => 
             array(
              0 => 'widget_id',
             ),
             'type' => 'unique',
             ));
        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Owner', array(
             'local' => 'owner_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Widget', array(
             'local' => 'widget_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}
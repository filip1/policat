<?php

/**
 * BaseMailMessage
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property clob $message
 * 
 * @method clob        getMessage() Returns the current record's "message" value
 * @method MailMessage setMessage() Sets the current record's "message" value
 * 
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMailMessage extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('mail_message');
        $this->hasColumn('message', 'clob', null, array(
             'type' => 'clob',
             'notnull' => true,
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
        $this->actAs($timestampable0);
    }
}
<?php

/**
 * BaseTargetListRights
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $mailing_list_id
 * @property integer $user_id
 * @property integer $active
 * @property MailingList $MailingList
 * @property sfGuardUser $User
 * 
 * @method integer          getMailingListId()   Returns the current record's "mailing_list_id" value
 * @method integer          getUserId()          Returns the current record's "user_id" value
 * @method integer          getActive()          Returns the current record's "active" value
 * @method MailingList      getMailingList()     Returns the current record's "MailingList" value
 * @method sfGuardUser      getUser()            Returns the current record's "User" value
 * @method TargetListRights setMailingListId()   Sets the current record's "mailing_list_id" value
 * @method TargetListRights setUserId()          Sets the current record's "user_id" value
 * @method TargetListRights setActive()          Sets the current record's "active" value
 * @method TargetListRights setMailingList()     Sets the current record's "MailingList" value
 * @method TargetListRights setUser()            Sets the current record's "User" value
 * 
 * @package    policat
 * @subpackage model
 * @author     developer-docker
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseTargetListRights extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('target_list_rights');
        $this->hasColumn('mailing_list_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('user_id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'length' => 4,
             ));
        $this->hasColumn('active', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 1,
             ));

        $this->option('symfony', array(
             'form' => false,
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('MailingList', array(
             'local' => 'mailing_list_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));
    }
}
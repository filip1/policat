<?php

/**
 * BaseMember
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $sf_guard_user_id
 * @property integer $campaign_id
 * @property Doctrine_Collection $Group
 * @property sfGuardUser $sfGuardUser
 * @property Campaign $Campaign
 * @property Doctrine_Collection $GroupMember
 * 
 * @method integer             getId()               Returns the current record's "id" value
 * @method integer             getSfGuardUserId()    Returns the current record's "sf_guard_user_id" value
 * @method integer             getCampaignId()       Returns the current record's "campaign_id" value
 * @method Doctrine_Collection getGroup()            Returns the current record's "Group" collection
 * @method sfGuardUser         getSfGuardUser()      Returns the current record's "sfGuardUser" value
 * @method Campaign            getCampaign()         Returns the current record's "Campaign" value
 * @method Doctrine_Collection getGroupMember()      Returns the current record's "GroupMember" collection
 * @method Member              setId()               Sets the current record's "id" value
 * @method Member              setSfGuardUserId()    Sets the current record's "sf_guard_user_id" value
 * @method Member              setCampaignId()       Sets the current record's "campaign_id" value
 * @method Member              setGroup()            Sets the current record's "Group" collection
 * @method Member              setSfGuardUser()      Sets the current record's "sfGuardUser" value
 * @method Member              setCampaign()         Sets the current record's "Campaign" value
 * @method Member              setGroupMember()      Sets the current record's "GroupMember" collection
 * 
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMember extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('member');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('sf_guard_user_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));
        $this->hasColumn('campaign_id', 'integer', 4, array(
             'type' => 'integer',
             'length' => 4,
             ));

        $this->option('symfony', array(
             'filter' => false,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Group', array(
             'refClass' => 'GroupMember',
             'local' => 'member_id',
             'foreign' => 'group_id'));

        $this->hasOne('sfGuardUser', array(
             'local' => 'sf_guard_user_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Campaign', array(
             'local' => 'campaign_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('GroupMember', array(
             'local' => 'id',
             'foreign' => 'member_id'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}
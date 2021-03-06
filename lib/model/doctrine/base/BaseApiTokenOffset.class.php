<?php

/**
 * BaseApiTokenOffset
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $petition_api_token_id
 * @property string $country
 * @property integer $addnum
 * @property PetitionApiToken $ApiToken
 * 
 * @method integer          getId()                    Returns the current record's "id" value
 * @method integer          getPetitionApiTokenId()    Returns the current record's "petition_api_token_id" value
 * @method string           getCountry()               Returns the current record's "country" value
 * @method integer          getAddnum()                Returns the current record's "addnum" value
 * @method PetitionApiToken getApiToken()              Returns the current record's "ApiToken" value
 * @method ApiTokenOffset   setId()                    Sets the current record's "id" value
 * @method ApiTokenOffset   setPetitionApiTokenId()    Sets the current record's "petition_api_token_id" value
 * @method ApiTokenOffset   setCountry()               Sets the current record's "country" value
 * @method ApiTokenOffset   setAddnum()                Sets the current record's "addnum" value
 * @method ApiTokenOffset   setApiToken()              Sets the current record's "ApiToken" value
 * 
 * @package    policat
 * @subpackage model
 * @author     Martin
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseApiTokenOffset extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('api_token_offset');
        $this->hasColumn('id', 'integer', 4, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('petition_api_token_id', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'length' => 4,
             ));
        $this->hasColumn('country', 'string', 5, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 5,
             ));
        $this->hasColumn('addnum', 'integer', 4, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 4,
             ));


        $this->index('p_counter_idx', array(
             'fields' => 
             array(
              0 => 'petition_api_token_id',
              1 => 'country',
             ),
             ));
        $this->option('form', false);
        $this->option('filter', false);
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('PetitionApiToken as ApiToken', array(
             'local' => 'petition_api_token_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable(array(
             ));
        $this->actAs($timestampable0);
    }
}
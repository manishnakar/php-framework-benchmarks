<?php
/**
 * 
 * Table metadata for the Mock_Solar_Model_Taggings model class.
 * 
 * This class is auto-generated by make-model; any changes you make will be
 * overwritten the next time you use make-model.  Modify the Mock_Solar_Model_Taggings
 * class instead of this one.
 * 
 */
class Mock_Solar_Model_Taggings_Metadata extends Solar_Sql_Model_Metadata
{
    public $table_name = 'test_solar_taggings';
    
    public $table_cols = array (
      'id' => array (
        'name' => 'id',
        'type' => 'int',
        'size' => NULL,
        'scope' => NULL,
        'default' => NULL,
        'require' => true,
        'primary' => true,
        'autoinc' => true,
      ),
      'node_id' => array (
        'name' => 'node_id',
        'type' => 'int',
        'size' => NULL,
        'scope' => NULL,
        'default' => NULL,
        'require' => false,
        'primary' => false,
        'autoinc' => false,
      ),
      'tag_id' => array (
        'name' => 'tag_id',
        'type' => 'int',
        'size' => NULL,
        'scope' => NULL,
        'default' => NULL,
        'require' => false,
        'primary' => false,
        'autoinc' => false,
      ),
    );
    
    public $index_info = array (
      'node_id' => array (
        'type' => 'normal',
        'cols' => array (
          0 => 'node_id',
        ),
      ),
      'tag_id' => array (
        'type' => 'normal',
        'cols' => array (
          0 => 'tag_id',
        ),
      ),
    );
}
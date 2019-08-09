<?php
$manifest = array(
  0 =>
  array(
    'acceptable_sugar_versions' =>
    array(
      0 => '9.*',
    ),
  ),
  1 =>
  array(
    'acceptable_sugar_flavors' =>
    array(
      0 => 'PRO',
      1 => 'ENT',
    ),
  ),
  'readme' => '',
  'key' => '',
  'author' => 'RJM',
  'description' => 'creando campos',
  'icon' => '',
  'is_uninstallable' => true,
  'name' => 'selanusa_campos',
  'published_date' => '2019-08-09 00:00:00',
  'type' => 'module',
  'version' => "1.0.0",
);
$installdefs = array(
  'id' => 'selanusa_campos',
  'custom_fields' => array(
    // Leads
    array(
      'name' => 'job_title_c',
      'label' => 'LBL_JOB_TITLE',
      'type' => 'varchar',
      'default_value' => false,
      'module' => 'Leads',
      'date_modified' => '2019-08-09 15:00:00',
      'required' => false,
      'deleted' => '0',
      'audited' => true,
      'duplicate_merge' => false,
      'reportable' => true,
    ),
  ),

  'language' => array(
    array(
      'from' => '<basepath>/custom/Extension/leads/Ext/Language/es_LA.job_title.php',
      'to_module' => 'leads',
      'language' => 'es_LA'
    ),

  ),

  
);

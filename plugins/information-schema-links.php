<?php

/**
 * Show links to tables from information_schema tables
 *
 * @link http://www.adminer.org/plugins/#use
 * @author Vlasta Neubauer, http://paranoiq.cz/
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */
class AdminerInformationSchemaLinks
{

    /** @var string */
    private $selectTableName;

    /** @var string */
    private $rowTableSchema;

    /** @var float */
    private $rowLatitude;

    /**
     * Get a link to use in select table
     * @param string raw value of the field
     * @param array single field returned from fields()
     * @return string or null to create the default link
     */
    public function selectLink($val, $field) {
        $fieldName = $field['field'];
        switch (true) {
            case DB === 'information_schema' && $fieldName === 'TABLE_SCHEMA':
            case DB === 'information_schema' && $fieldName === 'CONSTRAINT_SCHEMA':
                $this->rowTableSchema = $val;
                break;
            case DB === 'information_schema' && $fieldName === 'TABLE_NAME':
            case DB === 'information_schema' && $fieldName === 'REFERENCED_TABLE_NAME':
                return sprintf(
                    '%s?server=%s&username=%s&db=%s&table=%s',
                    $_SERVER['DOCUMENT_URI'],
                    urlencode($_GET['server']),
                    urlencode($_GET['username']),
                    urlencode($this->rowTableSchema),
                    urlencode($val)
                );
                break;
        }
        return '';
    }

}

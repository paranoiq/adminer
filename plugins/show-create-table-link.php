<?php

/**
 * Show link to SHOW CREATE TABLE/VIEW in table menu
 *
 * @link http://www.adminer.org/plugins/#use
 * @author Vlasta Neubauer, http://paranoiq.cz/
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
 */
class AdminerShowCreateTableLink
{

    /**
     * Print links after select heading
     * @param array $tableStatus result of SHOW TABLE STATUS
     * @param string $set new item options, NULL for no new item
     * @return false
     */
    function selectLinks($tableStatus, $set = '')
    {
        echo '<p class="links">';
        $links = array("select" => lang('Select data'));
        if (support("table") || support("indexes")) {
            $links["table"] = lang('Show structure');
        }
        if (support("table")) {
            if (is_view($tableStatus)) {
                $links["view"] = lang('Alter view');
            } else {
                $links["create"] = lang('Alter table');
            }
        }
        if ($set !== null) {
            $links["edit"] = lang('New item');
        }
        foreach ($links as $key => $val) {
            echo " <a href='" . h(ME) . "$key=" . urlencode($tableStatus["Name"]) . ($key == "edit" ? $set : "") . "'" . bold(isset($_GET[$key])) . ">$val</a>";
        }
        if ($set !== null) {
            $title = lang('Show CREATE');
            if (is_view($tableStatus)) {
                $type = 'VIEW';
            } else {
                $type = 'TABLE';
            }
            echo " <a href='" . h(ME) . "sql=" . urlencode("SHOW CREATE $type " . $tableStatus['Name']) . "'>$title</a>";
        }
        echo "\n";

        return false;
    }

}

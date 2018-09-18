<?php
// This file keeps track of upgrades to
// the choice module
//
// Sometimes, changes between versions involve
// alterations to database structures and other
// major things that may break installations.
//
// The upgrade function in this file will attempt
// to perform all the necessary actions to upgrade
// your older installation to the current version.
//
// If there's something it cannot do itself, it
// will tell you what you need to do.
//
// The commands in here will all be database-neutral,
// using the methods of database_manager class
//
// Please do not forget to use upgrade_set_timeout()
// before any action that may take longer time to finish.

defined('MOODLE_INTERNAL') || die();

function xmldb_choice_upgrade($oldversion) {
    global $CFG, $DB;

    // Automatically generated Moodle v3.2.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.3.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.4.0 release upgrade line.
    // Put any upgrade step following this.

    // Automatically generated Moodle v3.5.0 release upgrade line.
    // Put any upgrade step following this.

    $dbman = $DB->get_manager();

    if ($oldversion < 2018051401) {

        // Define existing table `choice` to be altered.
        $table1 = new xmldb_table('choice');

        // Adding field `softlimitanswers` to table `choice`.
        $newfield1 = $table1->add_field('softlimitanswers', XMLDB_TYPE_INTEGER, '2', null, XMLDB_NOTNULL, null, '0');
        $dbman->add_field($table1, $newfield1);

        // Define existing table `choice_options` to be altered.
        $table2 = new xmldb_table('choice_options');

        // Adding field `softlimitanswers` to table `choice_options`.
        $newfield2 = $table2->add_field('softmaxanswers', XMLDB_TYPE_INTEGER, '10', null, false, null, '0');
        $dbman->add_field($table2, $newfield2);


        upgrade_mod_savepoint(true, 2018051401, 'choice');
    }

    return true;
}

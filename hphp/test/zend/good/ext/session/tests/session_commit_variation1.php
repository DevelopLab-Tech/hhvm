<?php

ob_start();

/* 
 * Prototype : bool session_commit(void)
 * Description : Write session data and end session
 * Source code : ext/session/session.c 
 */

echo "*** Testing session_commit() : variation ***\n";

var_dump(session_start());
var_dump(session_commit());
var_dump(session_commit());
var_dump(session_commit());
var_dump(session_commit());
var_dump(session_commit());
var_dump(session_start());
var_dump(session_destroy());

echo "Done";
ob_end_flush();

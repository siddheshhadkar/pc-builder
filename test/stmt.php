<?php

$link=mysqli_connect('localhost', 'test', '', 'test1_db');
if(mysqli_connect_errno()) echo mysqli_connect_error();

$stmt = mysqli_stmt_init($link);                        //init the statement with link
$query = "SELECT username FROM users";

if(mysqli_stmt_prepare($stmt, $query)) echo 'Done<br>'; //prepare with statement and query

//mysqli_stmt_bind_param($stmt, "type", vars);          //bind the params

mysqli_stmt_execute($stmt);                             //execute the statement

mysqli_stmt_bind_result($stmt, $name);                  //(bind/get) the result
while(mysqli_stmt_fetch($stmt))                         //fetch the result
  echo 'Username fetched is: '.$name.'<br>';

mysqli_stmt_free_result($stmt);                         //free the statement
mysqli_stmt_close($stmt);                               //close the statement
mysqli_close($link);                                    //close the connection



// mysqli_stmt_affected_rows ( mysqli_stmt $stmt ) : int
// mysqli_stmt_bind_param ( mysqli_stmt $stmt , string $types , mixed &$var1 [, mixed &$... ] ) : bool
// mysqli_stmt_bind_result ( mysqli_stmt $stmt , mixed &$var1 [, mixed &$... ] ) : bool
// mysqli_stmt_close ( mysqli_stmt $stmt ) : bool
// mysqli_stmt_data_seek ( mysqli_stmt $stmt , int $offset ) : void //mysqli_stmt_store_result() must be called prior to mysqli_stmt_data_seek().
// mysqli_stmt_errno ( mysqli_stmt $stmt ) : int
// mysqli_stmt_store_result ( mysqli_stmt $stmt ) : bool
// mysqli_stmt_error_list ( mysqli_stmt $stmt ) : array
// mysqli_stmt_error ( mysqli_stmt $stmt ) : string
// mysqli_stmt_execute ( mysqli_stmt $stmt ) : bool
// mysqli_stmt_fetch ( mysqli_stmt $stmt ) : bool
// mysqli_stmt_field_count ( mysqli_stmt $stmt ) : int
// mysqli_stmt_free_result ( mysqli_stmt $stmt ) : void
// mysqli_stmt_get_result ( mysqli_stmt $stmt ) : mysqli_result
// mysqli_stmt_insert_id ( mysqli_stmt $stmt ) : mixed
// mysqli_stmt_num_rows ( mysqli_stmt $stmt ) : int
// mysqli_stmt_param_count ( mysqli_stmt $stmt ) : int
// mysqli_stmt_prepare ( mysqli_stmt $stmt , string $query ) : bool
?>

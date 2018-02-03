<!-- Sanitize code template provided by Prof. Mindy McAdams -->

<?php include 'database.php'; ?>

<?php
// This is the "prepared statement" version of this file.
if (isset($_POST['user'])) {
    // sanitizeMySQL() is a custom function, written below
    $user = sanitizeMySQL($dbconn, $_POST['user']);
    $distance = sanitizeMySQL($dbconn, $_POST['distance']);
    $weight = sanitizeMySQL($dbconn, $_POST['weight']);
    $calories = sanitizeMySQL($dbconn, $_POST['calories']);
    // the prepared statement - note: 4 question marks represent
    // 4 variables we will send to database separately
    $query = "INSERT INTO strols (user, distance, weight, calories)
    VALUES (?, ?, ?, ?)";
    // prepare the statement in db
    if ( $stmt = mysqli_prepare($dbconn, $query) ) {
        // bind the values to replace the 4 question marks
        // note that 4 letters in 'siii' MUST MATCH data types in table
        // Type specification chars:
        // i - integer, s - string , d - double (decimal), b - blob
        mysqli_stmt_bind_param($stmt, 'siii',
        $user,
        $distance,
        $weight,
        $calories
        );
        // executes the prepared statement with the values already set, above
        mysqli_stmt_execute($stmt);
        // close the prepared statement
        mysqli_stmt_close($stmt);
        // close db connection
        mysqli_close($dbconn);
    } // end of prepare if-statement
} else {
    echo "Failed to enter!";
} // end of isset if-statement
// erase any HTML tags and then escape all quotes
// this is used on each value that came from the HTML form
function sanitizeMySQL($dbconn, $var) {
    $var = strip_tags($var);
    $var = mysqli_real_escape_string($dbconn, $var);
    return $var;
}
?>

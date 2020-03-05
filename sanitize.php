<?php


  // Sanitize integers
  function sanitizeNumberInt( $x ){
    // Trim spaces, commas, plus and minus signs
    $search = array( ' ', ',', '+', '-' );
    // Execute removal of characters in $search array
    $a  = str_replace( $search, "", $x );
    // Filter out anything other than numbers
    $y  = filter_var($a, FILTER_SANITIZE_NUMBER_INT );
    // Return filtered value
    return $y;
  }

  // Sanitize numbers. letters and some special characters
  function sanitizeNumbersLettersSpec( $x ){
    // Filter/Strip tags
    $y  = filter_var( $x, FILTER_SANITIZE_STRING );
    // Return sanitized value
    return $y;
  }

  // Sanitize
  function sanitizeDates( $x ){
    // Filter/Strip anything other than digits, +, . and -
    $y  = filter_var( $x, FILTER_SANITIZE_NUMBER_FLOAT );
    // Return sanitized value
    return $y;
  }

  // Sanitize emails
  function sanitizeEmail( $x ){
    // Filter all characters except letters, digits and !#$%&'*+-=?^_`{|}~@.[].
    $y  = filter_var( $x, FILTER_SANITIZE_EMAIL );
    // Return sanitized value
    return $y;
  }

  // Sanitize phone numbers
  function sanitizePhoneNumber( $x ){
    // Trim minus/hyphens signs
    $a  = str_replace( '-', "", $x );
    // Filter out anything other than numbers
    $y  = filter_var( $a, FILTER_SANITIZE_NUMBER_INT );
    // Return filtered value
    return $y;
  }


 ?>

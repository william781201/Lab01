<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author william
 */
class Student {
    
    function _construct() {
        $this->surname = '';        // last name
        $this->first_name = '';     // first name
        $this->emails = array();    // email
        $this->grades = array();    // grades
    }
    
    function add_email($which, $address) {
        $this->emails[$which] = $address; // address stores in the emails array
    }
    
    function add_grade($grade) {
        $this->grades[] = $grade; // grade stores in the grades array
    }
    
    function average() {
        $total = 0;
        foreach ($this->grades as $value) {
            $total += $value;
        }
        
        // the sum devided by the # of grade
        return $total / count($this->grades); 
    }
    
    // formats the student info
    function toString() {
        $result = $this->first_name . '' . $this->surname;
        $result .= ' ('. $this->average() . ") ";
        
        // which is the index in emails
        foreach ($this->emails as $which => $what) {
            $result .= $which . ': ' . $what . "\n";
        }
        $result .= "\n";
        return '<pre>' . $result . '</pre>';            
    }
    
}

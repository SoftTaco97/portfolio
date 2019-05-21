<?php

/**
 * File for processing form submissions
 * 
 * @author Jared Martinez
 * @version 05/17/2019
 */

// Making sure the script was called using the post method
if($_SERVER["REQUEST_METHOD"] !== "POST"){
    die('Access Denied');
} 

// Getting credentials
require_once ( dirname( __FILE__ ) . 'config.php');

/**
 * Class for Form Submissions
 */
class FormSubmission 
{
    /* Variables */
    private $name, $email, $number, $subject, $message;

    /**
     * Constructor
     *
     * @return void
     */
    public function __construct()
    {
        /* Init variables */

        // Name
        $this->name = (isset($_POST['name'])) ? $_POST['name'] : false;

        // Email
        $this->email = (isset($_POST['email'])) ? $_POST['email'] : false;

        // Number
        $this->number = (isset($_POST['number'])) ? $_POST['number'] : ''; // This one isn't required

        // Subject
        $this->subject = (isset($_POST['subject'])) ? $_POST['subject'] : false;

        // Message
        $this->message = (isset($_POST['message'])) ? $_POST['message'] : false;

        // Validating and sending the form
        if($this->validate_form() && $this->send()){
            $this->output(true, null, 'Thank you! Your message as been sent.');
        }
    }

    /**
     * Function to structure and send the data
     * 
     * @return void
     */
    private function structure_content()
    {
        // Variable for the email message
        $email_message = "Name: " . htmlentities($this->name) . "\n";
        $email_message .= "Email: " . htmlentities($this->email) . "\n";
        $email_message .= "Number: " . htmlentities($this->number) . "\n";
        $email_message .= "Subject: " . htmlentities($this->subject) . "\n";
        $email_message .= "Message: " . wordwrap(htmlentities($this->message)) . "\n ";

        // Storing the email message
        $this->message = $email_message;
    }

    /**
     * Function to send the form data
     * 
     * @return boolean
     */
    private function send() 
    {
        // making sure email variable is defined
        defined('EMAIL_ADDRESS') || output(false, '', 'Unable to send the message at this time. Please try again later.');

        // Structuring and escaping all of bad stuff
        $this->structure_content();

        return (mail(EMAIL_ADDRESS, $this->subject, $this->message));
    }

    /**
     * Function to validate the form data
     * 
     * @return boolean
     */
    private function validate_form()
    {
        // name 
        if( $this->name === false || empty($this->name) ) {
            $this->output(false, 'name', 'Please enter a valid name.');
        }

        // email
        if( $this->email === false || ! filter_var ( $this->email, FILTER_VALIDATE_EMAIL ) ){
            $this->output(false, 'email', 'Please enter a valid email.');
        }

        // number - validating just incase they did fill it out
        if( !empty($this->number) && ! preg_match ( "/^\D?(\d{3})\D?\D?(\d{3})\D?(\d{4})$/" , $this->number ) ) {
            $this->output(false, 'number', 'Please enter a valid number.');
        }

        // subject
        if( $this->subject === false || empty( $this->subject ) ) {
            $this->output(false, 'subject', 'Please enter a subject.');
        }

        // message 
        if( $this->message === false || empty( $this->message ) ){
            $this->output(false, 'message', 'Please enter a message.');
        }

        // Returning true since we made it to the end
        return true;
    }

    /**
     * Function structuring output data
     * 
     * @param $success
     * @param $error
     * @param $message
     * 
     * @return void
     */
    private function output($success, $error, $message)
    {
        die(
            json_encode(
                array(
                    'success' => $success,
                    'error' => $error,
                    'message' => $message                
                )
            )
        );
    }
}

// Away we go
$form = new FormSubmission();
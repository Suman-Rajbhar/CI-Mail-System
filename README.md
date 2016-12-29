# CI-Mail-System for User Email Verification
#### Step 1 : Create a method (here in Home Controller -> new_user_registration) for User entry form post.
#### Step 2 : Create a Model method (here in Home Controller -> Blogger -> save_new_blogger) with return last insert_id().
#### Step 3 : Get Newly inserted Blogger info with Model returned last insert_id() in Home Controller -> new_user_registration.
#### Step 4 : Arrange all info data in a mail_data array for mail method populate.
#### Step 5 : Create a HTML page in view folder for Email body with arranging mail_data.

<dl>
  <dt>NOTE to Initialize</dt>
  <dd>$this->load->library('email'); // Email Library</dd>
  <dd>$this->email->set_mailtype('html'); // set type for sending a markup template</dd>
  <dd>$this->email->from('your@example.com', 'Your Name'); // sender email</dd>
  <dd>$this->email->to('someone@example.com');  // registered user email</dd>
  <dd>$this->email->cc('another@another-example.com');  // Carbon Copy email</dd>
  <dd>$this->email->bcc('them@their-example.com');  // BCC email</dd>
  <dd>$this->email->subject($mail_data['subject']); // subject of email</dd>
  <dd>$this->email->message('Testing the email class.'); // Message</dd>
  <dd>$this->email->send();</dd>  
</dl>

# Textbelt-sms-webpage

<h1>Introduction</h1>
<p>This project demonstrates how to send SMS messages using the TextBelt API. It consists of a simple web interface built with HTML and PHP, allowing users to input phone numbers, a message, and an optional sender ID. Upon submission, the application sends the SMS messages and displays the responses.</p>

<img width="883" alt="Screenshot 2024-11-08 at 5 18 34 AM" src="https://github.com/user-attachments/assets/b8fa5535-cf25-44d3-91f9-f443847d215c">


<h2>Setup Instructions</h2>

<h3>Prerequisites</h3>
<ul>
    <li><strong>Web Server:</strong> Ensure you have a web server with PHP support (e.g., Apache, Nginx).</li>
    <li><strong>PHP:</strong> Make sure PHP is installed on your server (version 7.0 or higher is recommended).</li>
    <li><strong>cURL:</strong> Ensure the cURL extension is enabled in your PHP installation.</li>
</ul>

<h3>Steps to Set Up</h3>
<ol>
    <li><strong>Download the Code:</strong> Clone or download the codebase to your local machine or server.</li>
    <li><strong>File Structure:</strong> Ensure the following file structure:
        <pre>
        /path/to/your/project/
        ├── index.php
        └── send_sms.php
        </pre>
    </li>
    <li><strong>Configure the API Key:</strong>
        <ul>
            <li>Open <code>send_sms.php</code>.</li>
            <li>Locate the line with the API key:
                <pre>'key' => 'YOUR_API_KEY_HERE',</pre>
            </li>
            <li>Replace <code>'YOUR_API_KEY_HERE'</code> with your actual TextBelt API key. You can obtain an API key by visiting <a href="https://textbelt.com/">TextBelt</a>.</li>
        </ul>
    </li>
    <li><strong>Upload to Server:</strong> If you are working locally, you can use a tool like XAMPP or MAMP to run the server. If you are deploying to a live server, upload the files to your web server's document root.</li>
    <li><strong>Access the Application:</strong> Open your web browser and navigate to <code>http://your-server-address/index.php</code>. You should see the SMS sending form.</li>
    <li><strong>Send SMS:</strong> Fill in the phone numbers (comma-separated), the message, and the optional sender ID, then click "Send SMS". The responses will be displayed on the same page.</li>
</ol>


<h3>Conclusion</h3>
<p>You now have a simple SMS sending application using the TextBelt API. Customize the styles and functionality as needed to fit your requirements.</p>

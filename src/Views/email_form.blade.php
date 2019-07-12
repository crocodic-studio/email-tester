<html>
    <head>
        <title>Email Tester For Laravel</title>
        <style>
            pre {
                background: #000000;
                color: green;
                padding: 10px;
                border: 2px solid #cccccc;
                min-height: 100px;
            }
            table {
                border-collapse: collapse;
            }
            form {
                border: 2px solid #cccccc;
                box-shadow: 3px 5px 15px #aaaaaa;
            }
            input[type=submit] {
                border: 1px solid #aaaaaa;
                background: #0072d6;
                padding: 5px 10px 5px 10px;
                color: #ffffff;
                font-size: 20px;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
    <h2>Email Tester For Laravel</h2>
    <hr>
    <form action="" method="post">
        {!! csrf_field() !!}
        <table width="100%" cellpadding="5px" border="1px">
            <tr>
                <td width="20%">Driver</td><td><input type="text" name="driver" size="90" value="{{ $driver?:'smtp' }}" required ></td>
            </tr>
            <tr>
                <td>Hostname</td><td><input type="text" name="hostname" size="90" value="{{ $hostname }}" required ></td>
            </tr>
            <tr>
                <td>Username</td><td><input type="text" name="username" size="90" value="{{ $username }}" required ></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="text" name="password" size="90" value="{{ $password }}" required ></td>
            </tr>
            <tr>
                <td>Port</td><td><input type="text" name="port" size="40" value="{{ $port?:587 }}" required ></td>
            </tr>
            <tr>
                <td>Encryption</td><td><input type="text" name="encryption" size="40" value="{{ $encryption?:"tls" }}" ></td>
            </tr>
            <tr>
                <td>From</td><td><input type="text" name="from" size="90" value="{{ $from }}" required ></td>
            </tr>
            <tr>
                <td>To</td><td><input type="text" name="to" size="90" value="{{ $to }}" required ></td>
            </tr>
            <tr>
                <td>Subject</td><td><input type="text" name="subject" size="90" value="{{ $subject?:'Thank you for using this email tester at '.date('d F Y H:i') }}" required ></td>
            </tr>
            <tr>
                <td>Message</td><td>
                    <textarea style="width: 100%" required name="content" rows="5">{{ $content?:'Hi there, Congratulation the email has been received successfully' }}</textarea>
                    </td>
            </tr>
            <tr>
                <td>&nbsp;</td><td><input type="submit" value="SUBMIT TO TEST"></td>
            </tr>
        </table>
    </form>

    @if(isset($debug))
        <pre>
        {!! $debug !!}
        </pre>
        @else
        <pre>
            Ready to test!
        </pre>
    @endif
    </body>
</html>



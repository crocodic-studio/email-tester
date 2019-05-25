<html>
    <head>
        <title>Email Tester For Laravel</title>
    </head>
    <body>
    <h2>Email Tester For Laravel</h2>
    <form action="" method="post">
        {!! csrf_field() !!}
        <table width="500px" border="1px">
            <tr>
                <td>Driver</td><td><input type="text" name="driver" size="90" value="{{ request('driver')?:'smtp' }}" required ></td>
            </tr>
            <tr>
                <td>Hostname</td><td><input type="text" name="hostname" size="90" value="{{ request('hostname') }}" required ></td>
            </tr>
            <tr>
                <td>Username</td><td><input type="text" name="username" size="90" value="{{ request('username') }}" required ></td>
            </tr>
            <tr>
                <td>Password</td><td><input type="text" name="password" size="90" value="{{ request('password') }}" required ></td>
            </tr>
            <tr>
                <td>Port</td><td><input type="text" name="port" size="40" value="{{ request('port')?:587 }}" required ></td>
            </tr>
            <tr>
                <td>Encryption</td><td><input type="text" name="encryption" size="40" value="{{ request('encryption')?:"tls" }}" ></td>
            </tr>
            <tr>
                <td>To</td><td><input type="text" name="to" size="90" value="{{ request('to') }}" required ></td>
            </tr>
            <tr>
                <td>Subject</td><td><input type="text" name="subject" size="90" value="{{ request('subject')?:'Thank you for using this email tester' }}" required ></td>
            </tr>
            <tr>
                <td>Message</td><td><input type="text" name="content" size="90" value="{{ request('content')?:'Hi there, Congratulation the email has been received successfully' }}" required ></td>
            </tr>
            <tr>
                <td>&nbsp;</td><td><input type="submit" value="Submit"></td>
            </tr>
        </table>
    </form>

    @if(isset($debug))
        <pre>
        {!! $debug !!}
        </pre>
    @endif
    </body>
</html>



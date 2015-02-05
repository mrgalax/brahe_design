A lot of requests for more detailed description on how to setup password protector. Will do my best to clarify.

Download password protector to your local computer.

Unzip files from downloaded zip archive. You'll get password_protect.php.

Open password_protect.php in your favorite editor.

Update this section according to your needs. You can add/delete users in this section.
By default it is setup to grant access for two users:

User: zubrag
Password: root

User: admin
Password: adminpass

After you updated settings, save password_protect.php somewhere on your hosting server.
Lets say your website address is http://www.haveahobby.com, and you saved password_protect.php in /htdocs/protector/ folder

Open your browser, and type your site URL + path to the password_protect.php?help
In our example it would be: http://www.haveahobby.com/protector/password_protect.php?help

It will output something like
<?php include("/home/haveahobby/htdocs/protector/password_protect.php"); ?>
This output is a protection code which needs to be added to every php file you want to protect.

Lets say you want to protect your existing file named members.php.

You open members.php in your favorite editor, and add protection code at the very beginning of the file.

Lets say before update your members.php was:

<?php
echo "This information needs to be secured. Members area. Only members should be able to access it";
....
?>

After update it would look like (we added protection code at the beginning):

<?php include("/home/haveahobby/htdocs/protector/password_protect.php"); ?>
<?php
echo "This information needs to be secured. Members area. Only members should be able to access it";
....
?>

We secured members.php.

Now open your members.php file in browser. It should show login/password prompt.

Add protection string to every php file you want to protect.
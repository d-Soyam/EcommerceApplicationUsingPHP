<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Dress_Haat | Admin Login</title>
        <link rel="stylesheet" href="CSS/admin_login.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="CSS/style.css" type="text/css" />
    </head>

    <body>

      <html lang="en-US">
      <head>

        <meta charset="utf-8">

        <title>Login</title>

      </head>

      <body>

        <div class="container">

          <div id="login">

            <form action="ad_login.php" method="post">

              <fieldset class="clearfix">
                  <h2 style="padding-left:45px">Admin Login</h2>

                <p><span class="fontawesome-user"></span><input type="text" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required name="txtUserName"></p> <!-- JS because of IE support; better: placeholder="Username" -->
                <p><span class="fontawesome-lock"></span><input type="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required name="txtPassword"></p> <!-- JS because of IE support; better: placeholder="Password" -->
                <p><input type="submit" value="Sign In"></p>

              </fieldset>

            </form>

          </div> <!-- end login -->

        </div>

      </body>
    </html>

    </body>

</html>
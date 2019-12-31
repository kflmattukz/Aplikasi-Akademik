<style type="text/css">
    body {
      background-color: #DADADA;
    }
    body > .grid {
      height: 100%;
    }
    .image {
      margin-top: -100px;
    }
    .column {
      max-width: 450px;
    }
  </style>
  <script>
  $(document)
    .ready(function() {
      $('.ui.form')
        .form({
          fields: {
            firstName: {
              identifier :'firstName',
              rules : [
                {
                  type    : 'empty',
                  prompt  : 'Please enter your first name'
                }
              ]
            },
            lastName: {
              identifier :'lastName',
              rules : [
                {
                  type    : 'empty',
                  prompt  : 'Please enter your last name'
                }
              ]
            },
            email: {
              identifier  : 'email',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your email'
                },
                {
                  type   : 'email',
                  prompt : 'Please enter a valid email'
                }
              ]
            },
            password: {
              identifier  : 'password',
              rules: [
                {
                  type   : 'empty',
                  prompt : 'Please enter your password'
                },
                {
                  type   : 'length[6]',
                  prompt : 'Your password must be at least 6 characters'
                }
              ]
            }
          }

        })
      ;
    })
  ;
  </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
  <div class="column">
    <h2 class="ui blue header">
        Log-in to your account
    </h2>
    <form action="<?= BASEURL ?>/Auth/register" class="ui large form" method="post">
      <div class="ui stacked segment">
        <div class="two fields">
          <div class="field">
            <div class="ui left icon input">
              <i class="pencil icon"></i>
              <input type="text" name="firstName" placeholder="First Name">
            </div>
          </div>
          <div class="field">
            <div class="ui left icon input">
              <i class="pencil icon"></i>
              <input type="text" name="lastName" placeholder="Last Name">
            </div>
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="text" name="username" placeholder="username">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="password" placeholder="Password">
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input">
            <i class="envelope icon"></i>
            <input type="email" name="email" placeholder="Email">
          </div>
        </div>

        <div class="inline fields">
        <label for="gender">Select your gender:</label>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" value="L" name="gender" checked="" tabindex="0" class="hidden">
            <label><i class="ui mars icon"></i> Males</label>
          </div>
        </div>
        <div class="field">
          <div class="ui radio checkbox">
            <input type="radio" value="P" name="gender" tabindex="0" class="hidden">
            <label><i class="ui venus icon"></i> Females</label>
          </div>
        </div>
      </div>

        <button type="submit" class="ui fluid large primary submit button">Register</button>
      </div>

      <div class="ui error message"></div>

    </form>

    <div class="ui message">
      New to us? <a href="#">Sign Up</a>
    </div>
  </div>
</div>

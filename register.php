<!DOCTYPE html>
<html>
    <head>
        <title>Title</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- UIkit CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css" />
    </head>
    <body>

        <div class="uk-section uk-container">
            <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid="">
                <form class="uk-form-stacked js-register">
                    <h2>Register</h2>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="your@email.com">
                        </div>
                    </div>
                    <div class="uk-margin">
                        <label class="uk-form-label" for="form-stacked-text">Password</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="password">
                        </div>
                    </div>

                    <div class="uk-margin">
                        <button class="uk-button uk-button-default" type="submit">Register</button>
                    </div>

                </form>
            </div>
        </div>

        <?php include_once "inc/footer.php"; ?>
    </body>
</html>
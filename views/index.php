<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

<form method="POST" action="/" class="background" id="form">
    <div class="container">
        <div class="screen">
            <div class="screen-header">
                <div class="screen-header-left">
                    <div class="screen-header-button close"></div>
                    <div class="screen-header-button maximize"></div>
                    <div class="screen-header-button minimize"></div>
                </div>
                <div class="screen-header-right">
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                    <div class="screen-header-ellipsis"></div>
                </div>
            </div>

            <div class="screen-body">
                <div class="screen-body-item left">
                    <div class="app-title">
                        <span>CLICKVIEW</span>
                    </div>
                    <div class="app-contact">SUBMITTED BY: KAYUB MAHJARJAN "kAy"</div>
                </div>
                <div class="screen-body-item">
                    <div class="app-form">
                        <div class="app-form-group">
                            <input required class="app-form-control" type="text" name="full_name" placeholder="NAME" value=""/>
                        </div>
                        <div class="app-form-group">
                            <input required class="app-form-control" type="email" name="email" placeholder="EMAIL"/>
                        </div>
                        <div class="app-form-group">
                            <input required class="app-form-control" type="tel" name="phone" placeholder="CONTACT NO"/>
                        </div>
                        <div class="app-form-group">
                            <input required class="app-form-control" type="text" name="institute" placeholder="INSTITUTE NAME"/>
                        </div>
                        <div class="app-form-group">
                            <textarea name="message" class="app-form-control" required  cols="30" rows="10" placeholder="ENTER YOUR MESSAGE HERE..."></textarea>
                        </div>
                        <div class="app-form-group buttons">
                            <button class="app-form-button" onclick="reset()">RESET</button>
                            <button class="app-form-button" type="submit">SEND</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="screen-body">
                <div class="screen-body-item">
                    <a href="/list" class="app-form-button">View list</a>
                </div>
            </div>
        </div>
    </div>
</form>


</body>
<script>
    ( () => {
        const reset = () => {
            document.getElementById('form').reset();
        }
    })();
</script>
</html>
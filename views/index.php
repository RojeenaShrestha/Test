<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>

<form method="POST" action="/" class="background">
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
                        <span>CONTACT</span>
                        <span>US</span>
                    </div>
                    <div class="app-contact">CONTACT INFO : +62 81 314 928 595</div>
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
                        <div class="app-form-group message">
                            <input required class="app-form-control" type="text" name="message" placeholder="MESSAGE"/>
                        </div>
                        <div class="app-form-group buttons">
                            <button class="app-form-button">CANCEL</button>
                            <button class="app-form-button" type="submit">SEND</button>
                        </div>
                    </div>
                </div>
            </div>


            <div>
                <a href="" class="app-form-button">View list</a>
            </div>
        </div>
    </div>
</form>


</body>
</html>
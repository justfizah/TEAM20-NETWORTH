<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Net-Worth Calculator</title>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
            crossorigin="anonymous"
        />

        <style>
            body {
                background-color: rgb(38, 155, 120);
            }

            .wrapper {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
            }

            .wrapper p {
                margin: auto;
                text-indent: 10px;
                color: white;
                width: 500px;
                height: 300px;
                font-size: 26px;
            }

            .btn {
                background-color: #555;
                font-family: verdana;
                display: block;
                border: none;
                border-radius: 13px;
                padding: 13px;
                width: auto;
                margin: 43px auto;
                font-size: 1.65rem;
                color: #fff;
                box-shadow: 5px 5px 11px #333;
            }

            .btn a:hover {
                text-decoration: none;
            }

            @media(max-width: 767px) {
                .wrapper {
                    display: block;
                }

                .wrapper p {
                    text-align: center;
                    font-size: 22px;
                    width: auto;
                }

                .wrapper div {
                    margin:0 auto;
                }

                .wrapper img {
                    display: block;
                    margin: 20px auto;
                }

                .btn {
                    font-size: 1rem;
                }
            }

            @media(min-width: 768px) and (max-width: 991px) {
                .wrapper {
                    margin-top: 100px;
                }
                .wrapper p {
                    text-align: center;
                    font-size: 22px;
                    width: auto;
                }
                .wrapper img {
                    display: block;
                    margin: 10px auto;
                }
            }
        </style>
    </head>

    <body>
        <div style="padding: 20px;">
            <img src="images/image.png" width="150px" height="40px" />
        </div>

        <div class="wrapper">
            <p>Net-worth is an important asset to every individual, it helps you to know your assets and liabilities.Here at NETWORTH,we ensure to help you calcuate your networth with convienience and give you the best experience you could ask for, click below to get started.</p>
            <img src="images/NWT_7.jpg" width="85%" />
        </div>

        <button class="btn mb-sm-1 mb-md-0">
            <a class="text-white" href="index2.php">Get Started &raquo;</a>
        </button>
    </body>

</html>
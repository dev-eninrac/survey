<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="<?= base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/font.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

    <title>Survay Script</title>
    <style>
        .header.py-3 {
            background: #002447;
        }

        .logo img {
            width: 200px;
            margin: auto;
            display: block;
        }

        .survey-center {
            width: 100%;
            margin: auto;
            max-width: 400px;
            display: block;
        }

        .survey-center p {
            text-transform: uppercase;
            font-size: 14px;
            font-weight: 100;
            margin: 0;
        }

        .survey-center h1 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 0.35em;
            line-height: 1.2;
        }

        .lm-btn {
            padding: 20px 50px;
            border: none;
            border-radius: 34px;
            width: 200px;
            margin: auto;
            display: block;
            background: #002447;
            color: white;
        }

        .card.card-disable .card-survey {
            opacity: 0.5;
            filter: blur(1px);
        }

        .card.card-disable::after {
            content: "Survey Deactivate";
            position: absolute;
            height: 100%;
            top: 0;
            left: 0;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 25px;
        }
    </style>
</head>

<body>
    <div class="wrapper w-100">
        <div class="header py-3">
            <div class="logo">
                <a href="<?= base_url() ?>">
                    <img src="<?= base_url() ?>assets/images/eninrac-white.png" alt="eninrac Logo">
                </a>
            </div>
        </div>
        <div class="container py-5">
            <?php
            if ($survayText != "") {
                echo "<div class='survey-center py-5 text-center'>
                    <p>" . $survayText['title'] . "</p>
                    <h1>" . $survayText['sub-title'] . "</h1>
                </div>";
            } else {
                echo '<div class="survey-center py-5 text-center">
                    <p>Dashboard</p>
                    <h1>Vision Board Survey</h1>
                </div>';
            }
            ?>
            <div class="row py-3">
                <?php
                if ($categories != "") {
                    foreach ($categories as $categoriy) {
                        $link = "JavaScript:void(0)";
                        $linkClass = "card-disable";

                        if ($categoriy['status'] == 'active') {
                            $link = $categoriy['link'];
                            $linkClass = "";
                        }

                        echo "<div class='col-md-4'>
                            <div class='card mb-3 " . $linkClass . " position-relative'>
                                <div class='card-survey'>
                                    <a href='" . $link . "'>
                                        <img class='card-img-top w-50 d-block m-auto' src='" . $categoriy['icon'] . "' alt='" . $categoriy['name'] . "'>
                                    </a>
                                    <div class='card-body'>
                                        <h5 class='card-title text-center'>" . $categoriy['name'] . "</h5>
                                    </div>
                                </div>
                            </div>
                        </div>";
                    }
                }
                ?>
            </div>


            <!-- <button class="lm-btn">LOAD MORE</button> -->
        </div>
    </div>
    <script src="<?= base_url() ?>assets/js/bootstrap.min.js"></script>
</body>

</html>
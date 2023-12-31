<?php
// Connect to database
include 'connection.php';
?>

<html>
<head>
    <title>Online Examination System</title>
    <link rel="stylesheet" href="css/styleQ.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- Header part -->
    <header id="header">
        <div class="row">
            <i class="bi bi-question-octagon">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" fill="white"
                    class="bi bi-question-octagon" viewBox="0 0 16 16">
                    <path
                        d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z" />
                    <path
                        d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                </svg>
            </i>
            <h3 class="topic">Upload QAs</h3>
            <a href="admin_home.php" class="btn">Back</a>
        </div>
    </header>
    <section>
        <!-- checks for available subject to display from db -->
        <?php
        $query = "SELECT * FROM exam";
        $result = mysqli_query($conn, $query);
        while ($subj = mysqli_fetch_assoc($result)) {
            ?>
            <div class="col-lg-2">
                <div class="row justify-content-center align-items-center g-2">
                    <form>
                        <input type="button" id="sub" class="btn-sub" value="<?php echo $subj['Exam_name']; ?>"
                            onclick="getId(this.value)">
                    </form>
                </div>
            </div>
            <?php
        }
        ?>
    </section>
    <script>
        function getId(val) {
            switch (val) {
                case 'English':
                    location.href = "upload_QAs_form.php?id=Eng";
                    break;
                case 'Scholastic Aptitude Test':
                    location.href = "upload_QAs_form.php?id=Sat";
                    break;
                case 'Mathematics for Natural Science':
                    location.href = "upload_QAs_form.php?id=Math_N";
                    break;
                case 'Mathematics for Social Science':
                    location.href = "upload_QAs_form.php?id=Math_S";
                    break;
                case 'Biology':
                    location.href = "upload_QAs_form.php?id=Bio";
                    break;
                case 'Chemistry':
                    location.href = "upload_QAs_form.php?id=Chm";
                    break;
                case 'Physics':
                    location.href = "upload_QAs_form.php?id=Phy";
                    break;
                case 'Civics and Ethical Education':
                    location.href = "upload_QAs_form.php?id=Civ";
                    break;
                case 'History':
                    location.href = "upload_QAs_form.php?id=His";
                    break;
                case 'Geography':
                    location.href = "upload_QAs_form.php?id=Geo";
                    break;
                case 'Business':
                    location.href = "upload_QAs_form.php?id=Bus";
                    break;
            }
        };
    </script>
</body>
</html>
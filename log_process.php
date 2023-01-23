<?php
require_once('config.php');

?>
<?php
if (isset($_POST['create'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tblregistration (RUser, REmail, RPass) VALUES (?,?,?)";
    $stmtinsert = $conn->prepare($sql);
    $result = $stmtinsert->execute([$user, $email, $password]);
}

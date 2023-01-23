<?php
require_once('config.php');

?>
<?php
if (isset($_POST['create'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO tblregistration (RUser, REmail, RPass) VALUES (?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$user, $email, $password]);
}

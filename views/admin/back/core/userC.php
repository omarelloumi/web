<?PHP
include "config.php";
class userC
{
    function register($user)
    {
        $sql = "INSERT INTO user (username,email,password) values (:username, :email, :password) ";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
            $req->bindValue(':username', $user->getUsername());
            $req->bindValue(':email', $user->getEmail());
            $req->bindValue(':password', $user->getPassword());
            $req->execute();
        } catch (Exception $e) {
            echo 'erreur: ' . $e->getMessage();
        }
    }

    function login($username, $password)
    {
        $toConnectUser = null;

        $db = config::getConnexion();
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";


        try {
            //$liste = $db->query($sql);
            $liste = $db->query($sql);

            $arrayUsers = array();
            foreach ($liste as $row) {
                $user = new user($row['username'], $row['email'], $row['password']);
                $user->setId($row['id']);
                $user->role = ($row['role']);
                array_push($arrayUsers, $user);
            }
            if (count($arrayUsers) > 0) {
                $toConnectUser = $arrayUsers[0];
            }
            return $toConnectUser;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }











    public function findRecById($id)
    {
        $sql = "SELECT * FROM user WHERE id=:id";
        $db = config::getConnexion();
        try {
            $req->bindParam(":id", $id, PDO::PARAM_INT);
            $req->execute();
            return $req->fetch(PDO::FETCH_OBJ);
        } catch (Execption $e) {
            die("Erreur : " . $e->getMessage());
        }
    }
}
